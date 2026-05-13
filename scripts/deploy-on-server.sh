#!/usr/bin/env bash
# Correr na EC2 a partir do diretório do projeto (ex.: /var/www/ponto-de-vista).
# Utilizador: quem tiver permissão de escrita no .git (normalmente ec2-user).
#
#   cd /var/www/ponto-de-vista
#   git pull origin main
#   bash scripts/deploy-on-server.sh
#
# Se já tiveres feito o pull: SKIP_GIT=1 bash scripts/deploy-on-server.sh
#
# Variável opcional: DEPLOY_ROOT=/caminho/para/ponto-de-vista
set -euo pipefail

ROOT="${DEPLOY_ROOT:-/var/www/ponto-de-vista}"
cd "$ROOT"

echo ">>> Diretório: $ROOT"

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
