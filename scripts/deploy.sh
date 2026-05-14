#!/usr/bin/env bash
#
# deploy.sh — pipeline local: commit (opcional) + git push + deploy na EC2.
#
# Fluxo:
#   1) Confere working tree (pode auto-commitar com -m "mensagem")
#   2) git push origin <branch>
#   3) SSH na EC2 e executa scripts/deploy-on-server.sh
#   4) Smoke test das URLs em produção
#
# Documentação completa: DEPLOY.md
#
set -euo pipefail

SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
REPO_ROOT="$( cd "$SCRIPT_DIR/.." && pwd )"

# ---- defaults configuráveis via env -----------------------------------------
: "${SSH_HOST:=ec2-3-87-71-227.compute-1.amazonaws.com}"
: "${SSH_USER:=ec2-user}"
: "${SSH_KEY:=$HOME/Desktop/LP_AV.pem}"
: "${REMOTE_ROOT:=/var/www/ponto-de-vista}"
: "${GIT_BRANCH:=main}"
: "${PRODUCTION_BASE_URL:=https://lp.altavistainvest.com.br/ponto-de-vista}"
: "${SKIP_SMOKE_TESTS:=0}"
# ----------------------------------------------------------------------------

COMMIT_MSG=""
DRY_RUN=0
SKIP_PUSH=0
FORCE_COMPOSER=0
REMOTE_EXTRA_ENV=""

usage() {
  cat <<EOF
Uso: bash scripts/deploy.sh [opções]

Opções:
  -m, --message "TXT"   Cria commit local com TXT antes do push (se houver mudanças).
  -n, --dry-run         Mostra o que faria sem alterar nada.
      --skip-push       Não faz git push (assume que o remoto já tem a versão).
      --force-composer  Força composer install no servidor.
      --branch NAME     Branch a sincronizar (default: ${GIT_BRANCH}).
      --skip-smoke      Não roda smoke tests no fim.
  -h, --help            Mostra esta ajuda.

Variáveis de ambiente úteis (com defaults):
  SSH_HOST              ${SSH_HOST}
  SSH_USER              ${SSH_USER}
  SSH_KEY               ${SSH_KEY}
  REMOTE_ROOT           ${REMOTE_ROOT}
  GIT_BRANCH            ${GIT_BRANCH}
  PRODUCTION_BASE_URL   ${PRODUCTION_BASE_URL}

Exemplos:
  bash scripts/deploy.sh
  bash scripts/deploy.sh -m "Ajusta título da home"
  bash scripts/deploy.sh --skip-push      # só executa o lado servidor
  SSH_KEY=~/keys/outro.pem bash scripts/deploy.sh
EOF
}

while [[ $# -gt 0 ]]; do
  case "$1" in
    -m|--message) COMMIT_MSG="${2:-}"; shift 2 ;;
    -n|--dry-run) DRY_RUN=1; shift ;;
    --skip-push) SKIP_PUSH=1; shift ;;
    --force-composer) FORCE_COMPOSER=1; shift ;;
    --branch) GIT_BRANCH="${2:-}"; shift 2 ;;
    --skip-smoke) SKIP_SMOKE_TESTS=1; shift ;;
    -h|--help) usage; exit 0 ;;
    *) echo "Opção desconhecida: $1" >&2; usage; exit 1 ;;
  esac
done

cd "$REPO_ROOT"

if [[ ! -f artisan ]]; then
  echo "Erro: não estou na raiz do projeto Laravel (artisan não encontrado)." >&2
  exit 1
fi

if [[ ! -f "$SSH_KEY" ]]; then
  echo "Erro: chave SSH não encontrada em: $SSH_KEY" >&2
  echo "Defina SSH_KEY para apontar para o ficheiro correto." >&2
  exit 1
fi

run() {
  if [[ "$DRY_RUN" == "1" ]]; then
    echo "[dry-run] $*"
  else
    echo "+ $*"
    "$@"
  fi
}

SSH_OPTS=(-o ConnectTimeout=15 -o ServerAliveInterval=10 -o ServerAliveCountMax=3 -i "$SSH_KEY")

ssh_run() {
  local cmd="$1"
  if [[ "$DRY_RUN" == "1" ]]; then
    echo "[dry-run] ssh ${SSH_USER}@${SSH_HOST} \"$cmd\""
  else
    ssh "${SSH_OPTS[@]}" "${SSH_USER}@${SSH_HOST}" "$cmd"
  fi
}

echo "=== Deploy do Ponto de Vista ==="
echo "Repo:       $REPO_ROOT"
echo "Branch:     $GIT_BRANCH"
echo "Servidor:   ${SSH_USER}@${SSH_HOST}:${REMOTE_ROOT}"
echo "Produção:   $PRODUCTION_BASE_URL"
echo ""

# --- 1) Status local ---------------------------------------------------------
echo ">> Estado local"
git fetch --quiet origin "$GIT_BRANCH" || true

if [[ -n "$(git status --porcelain)" ]]; then
  if [[ -n "$COMMIT_MSG" ]]; then
    echo ">>> Mudanças locais detetadas — a criar commit com a mensagem fornecida."
    run git add -A
    run git commit -m "$COMMIT_MSG"
  else
    echo "Erro: working tree tem mudanças não commitadas. Use:" >&2
    echo "  bash scripts/deploy.sh -m \"mensagem do commit\"" >&2
    echo "ou commit manualmente antes de rodar o deploy." >&2
    git status --short >&2
    exit 1
  fi
fi

LOCAL_HEAD="$(git rev-parse HEAD)"
REMOTE_HEAD="$(git rev-parse origin/"$GIT_BRANCH" 2>/dev/null || echo "")"
echo "  HEAD local:      $LOCAL_HEAD"
[[ -n "$REMOTE_HEAD" ]] && echo "  origin/$GIT_BRANCH:  $REMOTE_HEAD"

# --- 2) Push -----------------------------------------------------------------
if [[ "$SKIP_PUSH" == "1" ]]; then
  echo ">> --skip-push: a saltar git push"
else
  echo ">> git push origin $GIT_BRANCH"
  run git push origin "$GIT_BRANCH"
fi

# --- 3) Deploy no servidor ---------------------------------------------------
echo ">> A correr deploy-on-server.sh em $SSH_HOST"
REMOTE_ENVS="GIT_BRANCH=$GIT_BRANCH"
[[ "$FORCE_COMPOSER" == "1" ]] && REMOTE_ENVS="$REMOTE_ENVS FORCE_COMPOSER=1"

REMOTE_CMD="set -e; cd \"$REMOTE_ROOT\" && $REMOTE_ENVS bash scripts/deploy-on-server.sh"
ssh_run "$REMOTE_CMD"

# --- 4) Verifica HEAD no servidor -------------------------------------------
echo ">> Verificando HEAD no servidor"
ssh_run "cd \"$REMOTE_ROOT\" && git log -1 --oneline"

# --- 5) Smoke tests ----------------------------------------------------------
if [[ "$SKIP_SMOKE_TESTS" == "1" ]]; then
  echo ">> --skip-smoke: a saltar smoke tests"
else
  echo ">> Smoke tests em produção"
  ROUTES=(
    "/"
    "/artigos/economista-chefe/copom-corta-025pp-29-04-2026"
    "/artigos/economista-chefe/cdi-vs-ipca-plus-historico-25-anos"
    "/artigos/economista-chefe/cpi-eua-abril-2026-fed"
    "/artigos/economista-chefe/ipca-abril-2026-composicao"
    "/newsletters/semana-08-05-2026"
    "/newsletters/semana-30-04-2026"
  )
  FAILED=0
  for path in "${ROUTES[@]}"; do
    url="${PRODUCTION_BASE_URL}${path}"
    if [[ "$DRY_RUN" == "1" ]]; then
      echo "[dry-run] curl -sS -o /dev/null -w '%{http_code}' \"$url\""
      continue
    fi
    code="$(curl -sS -o /dev/null -w '%{http_code}' --max-time 15 "$url" || echo "000")"
    if [[ "$code" == "200" || "$code" == "301" || "$code" == "302" ]]; then
      printf "  [ok]  %s  %s\n" "$code" "$url"
    else
      printf "  [FAIL] %s  %s\n" "$code" "$url"
      FAILED=1
    fi
  done
  if [[ "$FAILED" == "1" ]]; then
    echo "Aviso: pelo menos uma rota não retornou 2xx/3xx." >&2
    exit 2
  fi
fi

echo ""
echo "✓ Deploy concluído."
