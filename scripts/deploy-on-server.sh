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

Passos típicos (SSH para a EC2 primeiro):

  1) Ir ao diretório do site:
       cd /var/www/ponto-de-vista

  2) Trazer o código novo:
       git pull origin main

  3) Este script (composer + caches Laravel como utilizador apache):
       bash scripts/deploy-on-server.sh

  Se já tiveres feito o passo 2 antes:
       SKIP_GIT=1 bash scripts/deploy-on-server.sh

  Só ver esta ajuda, sem alterar nada:
       bash scripts/deploy-on-server.sh --help

Variáveis de ambiente:

  DEPLOY_ROOT   caminho do projeto se não for /var/www/ponto-de-vista
  SKIP_GIT=1    não executa git pull (útil se já atualizaste o repositório)

Notas:

  - O git pull deve correr com o utilizador que tem permissão no .git
    (muitas vezes ec2-user).
  - Se mudares Nginx ou PHP, pode ser preciso:
      sudo nginx -t && sudo systemctl reload nginx && sudo systemctl restart php-fpm
  - Erros de permissão em storage/: ver secção de permissões em DEPLOY.md

EOF
}

if [[ "${1:-}" == "--help" || "${1:-}" == "-h" ]]; then
  usage
  exit 0
fi

ROOT="${DEPLOY_ROOT:-/var/www/ponto-de-vista}"
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
echo ">>> (Documentação: ficheiro DEPLOY.md na raiz do repositório)"

if [[ "${SKIP_GIT:-0}" != "1" ]]; then
  echo ">>> git pull origin main"
  git pull origin main
else
  echo ">>> SKIP_GIT=1 — a saltar git pull"
fi

if [[ -f composer.json ]] && command -v composer >/dev/null 2>&1; then
  echo ">>> composer install (produção)"
  composer install --no-dev --no-interaction --optimize-autoloader
fi

echo ">>> Laravel cache (utilizador apache)"
sudo -u apache php artisan optimize:clear
sudo -u apache php artisan config:cache
sudo -u apache php artisan view:cache

echo ">>> Concluído."
echo ">>> Teste rápido: curl -I \"https://lp.altavistainvest.com.br/ponto-de-vista/\""
