#!/usr/bin/env bash
#
# deploy-on-server.sh — atualiza o Laravel em produção (EC2) após git push.
#
# Documentação completa (Nginx, .env, permissões, troubleshooting):
#   repositório: DEPLOY.md
#   URL em produção: https://lp.altavistainvest.com.br/ponto-de-vista/
#
set -euo pipefail

usage() {
  cat <<'EOF'
Uso: bash scripts/deploy-on-server.sh [opções]

  Corre na máquina do servidor (ex.: EC2), dentro do clone do projeto.

Etapas executadas (nesta ordem):

  1) git pull origin <branch>                       (a menos que SKIP_GIT=1)
  2) composer install --no-dev --optimize-autoloader (se composer.lock mudou
     ou FORCE_COMPOSER=1)
  3) Remove views compiladas obsoletas em
     storage/framework/views/*.php
  4) Limpa caches do bootstrap em bootstrap/cache/
     (config.php, routes-v7.php, events.php, etc.)
  5) Reajusta owner de storage/ e bootstrap/cache/ para apache:apache
  6) php artisan optimize:clear  +  config:cache  +  view:cache
     (executado como o utilizador apache)
  7) systemctl reload php-fpm    (flush do opcache, evita servir versão antiga)
  8) systemctl reload nginx      (best-effort; só falha-fechado se WEB_RELOAD=1)

Sinalizadores via variáveis de ambiente:

  DEPLOY_ROOT        caminho do projeto (default: /var/www/ponto-de-vista)
  GIT_BRANCH         branch a puxar  (default: main)
  SKIP_GIT=1         não executa git pull
  FORCE_COMPOSER=1   força composer install mesmo sem mudança em composer.lock
  SKIP_COMPOSER=1    nunca executa composer install
  SKIP_RELOAD=1      não dá reload em php-fpm/nginx
  WEB_RELOAD=1       falha se reload de php-fpm/nginx falhar (default: 0)

Opções:

  --help, -h         mostra este texto sem executar nada

EOF
}

if [[ "${1:-}" == "--help" || "${1:-}" == "-h" ]]; then
  usage
  exit 0
fi

ROOT="${DEPLOY_ROOT:-/var/www/ponto-de-vista}"
BRANCH="${GIT_BRANCH:-main}"

if [[ ! -d "$ROOT" ]]; then
  echo "Erro: diretório do projeto não existe: $ROOT" >&2
  echo "Define DEPLOY_ROOT ou cria o clone nesse caminho. Ajuda: $0 --help" >&2
  exit 1
fi
cd "$ROOT"

if [[ ! -f artisan ]]; then
  echo "Erro: não encontrei artisan em $ROOT — não parece um projeto Laravel." >&2
  echo "Ajuda: $0 --help" >&2
  exit 1
fi

echo ">>> Diretório: $ROOT"
echo ">>> Branch alvo: $BRANCH"
echo ">>> (Documentação: ficheiro DEPLOY.md na raiz do repositório)"

OLD_HEAD=""
if [[ -d .git ]]; then
  OLD_HEAD="$(git rev-parse HEAD 2>/dev/null || true)"
fi

if [[ "${SKIP_GIT:-0}" != "1" ]]; then
  echo ">>> git pull origin $BRANCH"
  git pull --ff-only origin "$BRANCH"
else
  echo ">>> SKIP_GIT=1 — a saltar git pull"
fi

NEW_HEAD=""
if [[ -d .git ]]; then
  NEW_HEAD="$(git rev-parse HEAD 2>/dev/null || true)"
fi

COMPOSER_LOCK_CHANGED=0
if [[ -n "$OLD_HEAD" && -n "$NEW_HEAD" && "$OLD_HEAD" != "$NEW_HEAD" ]]; then
  if git diff --name-only "$OLD_HEAD" "$NEW_HEAD" -- composer.lock | grep -q .; then
    COMPOSER_LOCK_CHANGED=1
  fi
fi

if [[ "${SKIP_COMPOSER:-0}" == "1" ]]; then
  echo ">>> SKIP_COMPOSER=1 — a saltar composer install"
elif [[ "${FORCE_COMPOSER:-0}" == "1" || "$COMPOSER_LOCK_CHANGED" == "1" ]]; then
  if [[ -f composer.json ]] && command -v composer >/dev/null 2>&1; then
    echo ">>> composer install (produção, sem hooks; package:discover roda como apache depois)"
    composer install --no-dev --no-interaction --optimize-autoloader --no-scripts
    NEEDS_PACKAGE_DISCOVER=1
  fi
else
  echo ">>> composer.lock inalterado — a saltar composer install (use FORCE_COMPOSER=1 se necessário)"
fi

echo ">>> Removendo views compiladas obsoletas (storage/framework/views/*.php)"
if [[ -d storage/framework/views ]]; then
  sudo find storage/framework/views -type f -name '*.php' -delete || true
fi

echo ">>> Limpando bootstrap/cache (config/routes/events/services/packages)"
if [[ -d bootstrap/cache ]]; then
  sudo find bootstrap/cache -type f \
    \( -name 'config.php' -o -name 'routes-v7.php' -o -name 'routes.php' \
       -o -name 'events.php' -o -name 'services.php' -o -name 'packages.php' \) \
    -delete || true
fi

echo ">>> Garantindo owner apache:apache em storage/ e bootstrap/cache/"
sudo chown -R apache:apache storage bootstrap/cache

echo ">>> Laravel cache (utilizador apache)"
sudo -u apache php artisan optimize:clear
if [[ "${NEEDS_PACKAGE_DISCOVER:-0}" == "1" ]]; then
  echo ">>> Regenerando bootstrap/cache/packages.php (post-script do composer)"
  sudo -u apache php artisan package:discover --ansi
fi
sudo -u apache php artisan config:cache
sudo -u apache php artisan view:cache

if [[ "${SKIP_RELOAD:-0}" == "1" ]]; then
  echo ">>> SKIP_RELOAD=1 — a saltar reload do php-fpm/nginx"
else
  echo ">>> systemctl reload php-fpm (flush do opcache)"
  if ! sudo systemctl reload php-fpm; then
    echo "Aviso: reload de php-fpm falhou; a tentar restart"
    if [[ "${WEB_RELOAD:-0}" == "1" ]]; then
      sudo systemctl restart php-fpm
    else
      sudo systemctl restart php-fpm || true
    fi
  fi

  echo ">>> systemctl reload nginx (best-effort)"
  if ! sudo systemctl reload nginx 2>/dev/null; then
    if [[ "${WEB_RELOAD:-0}" == "1" ]]; then
      sudo systemctl reload httpd
    else
      sudo systemctl reload httpd 2>/dev/null || true
    fi
  fi
fi

echo ">>> Concluído."
if [[ -n "$NEW_HEAD" ]]; then
  echo ">>> HEAD: $(git log -1 --oneline 2>/dev/null || echo "$NEW_HEAD")"
fi
echo ">>> Teste rápido: curl -I \"https://lp.altavistainvest.com.br/ponto-de-vista/\""
