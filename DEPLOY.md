# Deploy em Produção (EC2 + Nginx em Subrota)

Este guia documenta o deploy do projeto Laravel `ponto-de-vista` na subrota:

- `https://lp.altavistainvest.com.br/ponto-de-vista/`

com Nginx + PHP-FPM (Amazon Linux 2023), mantendo o projeto principal já existente no mesmo domínio.

## 1) Estrutura no servidor

Projeto Laravel:

- `/var/www/ponto-de-vista`

Arquivo de configuração Nginx:

- `/etc/nginx/conf.d/lp.altavistainvest.com.br.conf`

## 2) Configuração de ambiente (`.env`)

Arquivo:

- `/var/www/ponto-de-vista/.env`

Valores importantes para este cenário (sem uso de banco):

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://lp.altavistainvest.com.br/ponto-de-vista
ASSET_URL=https://lp.altavistainvest.com.br/ponto-de-vista

CACHE_STORE=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
DB_CONNECTION=null
VIEW_COMPILED_PATH=/var/www/ponto-de-vista/storage/framework/views
```

## 3) Permissões corretas (importante)

No Amazon Linux, o pool do PHP-FPM roda como `apache:apache` por padrão.

```bash
cd /var/www/ponto-de-vista

sudo mkdir -p storage/framework/{cache,sessions,views} storage/logs bootstrap/cache database
sudo touch database/database.sqlite

sudo chown -R apache:apache storage bootstrap/cache database
sudo find storage bootstrap/cache database -type d -exec chmod 775 {} \;
sudo find storage bootstrap/cache database -type f -exec chmod 664 {} \;

sudo chcon -R -t httpd_sys_rw_content_t /var/www/ponto-de-vista/storage /var/www/ponto-de-vista/bootstrap/cache /var/www/ponto-de-vista/database
```

## 4) Cache do Laravel

Executar como o mesmo usuário do PHP-FPM (`apache`):

```bash
cd /var/www/ponto-de-vista

sudo -u apache php artisan optimize:clear
sudo -u apache php artisan config:cache
sudo -u apache php artisan view:cache
```

## 5) Nginx final (subrota)

Use este arquivo completo em:

- `/etc/nginx/conf.d/lp.altavistainvest.com.br.conf`

```nginx
# HTTP -> HTTPS
server {
    listen 80;
    listen [::]:80;
    server_name lp.altavistainvest.com.br;

    # excecao para o desafio ACME
    location ^~ /.well-known/acme-challenge/ {
        alias /home/ec2-user/altavista-lading-page/public/.well-known/acme-challenge/;
        default_type "text/plain";
    }

    # rota temporaria para o novo projeto por caminho
    location /the-way/ {
        proxy_pass http://127.0.0.1:3000/;
        proxy_http_version 1.1;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }

    # redireciona o restante para HTTPS
    location / {
        return 301 https://$host$request_uri;
    }
}

# HTTPS + PHP-FPM
server {
    listen 443 ssl;
    listen [::]:443 ssl;
    server_name lp.altavistainvest.com.br;

    ssl_certificate     /etc/letsencrypt/live/lp.altavistainvest.com.br/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/lp.altavistainvest.com.br/privkey.pem;

    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers HIGH:!aNULL:!MD5;
    ssl_prefer_server_ciphers on;
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;

    # projeto principal atual
    root /home/ec2-user/altavista-lading-page/public;
    index index.php index.html;

    # rota temporaria para o novo projeto por caminho
    location /the-way/ {
        proxy_pass http://127.0.0.1:3000/;
        proxy_http_version 1.1;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }

    # Ponto de Vista em subrota
    location = /ponto-de-vista {
        return 301 /ponto-de-vista/;
    }

    # Importante: try_files com fallback direto para index.php?$query_string PERDE o caminho
    # (/artigos/... vira so index.php). Usamos @pdv_laravel para reescrever em PATH_INFO.
    location /ponto-de-vista/ {
        alias /var/www/ponto-de-vista/public/;
        index index.php;
        try_files $uri $uri/ @pdv_laravel;
    }

    location @pdv_laravel {
        rewrite ^/ponto-de-vista/(.*)$ /ponto-de-vista/index.php/$1 last;
    }

    # DEVE ficar ANTES do location ~ \.php$ generico (senao o FPM aponta para o projeto errado).
    # Trata /ponto-de-vista/index.php e /ponto-de-vista/index.php/qualquer/coisa
    location ~ ^/ponto-de-vista/index\.php(/|$) {
        include fastcgi_params;
        fastcgi_pass unix:/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_split_path_info ^(/ponto-de-vista/index\.php)(/.*)$;
        fastcgi_param SCRIPT_FILENAME /var/www/ponto-de-vista/public/index.php;
        fastcgi_param SCRIPT_NAME /ponto-de-vista/index.php;
        fastcgi_param PATH_INFO $fastcgi_path_info;
        fastcgi_param DOCUMENT_ROOT /var/www/ponto-de-vista/public;
    }

    # php do projeto principal
    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    # fallback projeto principal
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ /\.ht {
        deny all;
    }

    error_page 404 /index.php;
}
```

## 6) Aplicar e validar

```bash
sudo nginx -t
sudo systemctl reload nginx
sudo systemctl restart php-fpm
```

Checks de saúde:

```bash
curl -I "https://lp.altavistainvest.com.br/ponto-de-vista/"
curl -I "https://lp.altavistainvest.com.br/ponto-de-vista/artigos/economista-chefe/copom-corta-025pp-29-04-2026"
```

## 7) Fluxo de deploy (do Mac → GitHub → EC2)

Os scripts em `scripts/` automatizam o pipeline. Edite normalmente, e depois:

```bash
# Mensagem opcional: cria commit local antes do push se houver mudanças.
bash scripts/deploy.sh -m "Mensagem do commit"

# Já commitado? Basta:
bash scripts/deploy.sh
```

O que o `scripts/deploy.sh` faz, no seu Mac:

1. Verifica `git status` (se houver mudanças, pede `-m` para commitar).
2. `git push origin main`.
3. SSH na EC2 e executa `scripts/deploy-on-server.sh` lá.
4. `curl` nas rotas principais para checar HTTP 2xx/3xx.

Variáveis úteis (têm defaults para a EC2 atual):

```bash
SSH_HOST=ec2-3-87-71-227.compute-1.amazonaws.com
SSH_USER=ec2-user
SSH_KEY=~/Desktop/LP_AV.pem
REMOTE_ROOT=/var/www/ponto-de-vista
GIT_BRANCH=main
PRODUCTION_BASE_URL=https://lp.altavistainvest.com.br/ponto-de-vista
```

Para sobrescrever:

```bash
SSH_KEY=~/keys/outro.pem bash scripts/deploy.sh
```

Opções:

```bash
bash scripts/deploy.sh --help          # ajuda
bash scripts/deploy.sh --dry-run       # mostra o que faria sem executar
bash scripts/deploy.sh --skip-push     # só roda o lado servidor
bash scripts/deploy.sh --force-composer # roda composer install no servidor
bash scripts/deploy.sh --skip-smoke    # sem smoke tests
```

### Só no servidor (SSH manual)

Se preferir rodar direto na EC2 (após `git pull`):

```bash
cd /var/www/ponto-de-vista
bash scripts/deploy-on-server.sh
bash scripts/deploy-on-server.sh --help   # ver opções
```

Etapas do `deploy-on-server.sh` (relevante para entender troubleshooting):

1. `git pull --ff-only origin main` (a menos que `SKIP_GIT=1`).
2. `composer install --no-dev --optimize-autoloader` apenas se `composer.lock`
   mudou (ou com `FORCE_COMPOSER=1`).
3. Apaga `storage/framework/views/*.php` (views Blade compiladas antigas).
4. Apaga `bootstrap/cache/config.php|routes-v7.php|events.php|services.php|packages.php`.
5. `chown -R apache:apache storage bootstrap/cache`.
6. Como `apache`: `optimize:clear`, `config:cache`, `view:cache`.
7. `systemctl reload php-fpm` (essencial para flush do **OPcache** —
   sem isso o PHP-FPM continua a servir a versão antiga das views compiladas).
8. `systemctl reload nginx` (best-effort).

> Importante: a etapa 7 é a que evita o sintoma "no servidor está diferente do
> local mesmo após `git pull`". O OPcache do PHP-FPM mantém em memória os
> arquivos compilados; sem reload, alterações em `.blade.php` podem demorar a
> aparecer.

## 8) Troubleshooting rápido

- Erro `tempnam(): file created in the system's temporary directory`:
  - normalmente indica permissão/owner/contexto SELinux em `storage` e `bootstrap/cache`.
- Erro `attempt to write a readonly database`:
  - cache/sessão ainda em driver `database` ou `database.sqlite` sem escrita.
- `File not found` em subrota (links internos):
  - causa comum: `try_files ... /ponto-de-vista/index.php?$query_string` faz o Nginx perder o path; usar `try_files $uri $uri/ @pdv_laravel;` + `rewrite` como no bloco acima.
  - conferir `APP_URL` com o prefixo `https://lp.altavistainvest.com.br/ponto-de-vista` (sem barra final duplicada nos links).
  - o bloco `location ~ ^/ponto-de-vista/index\.php` deve vir **antes** do `location ~ \.php$` do site principal.
