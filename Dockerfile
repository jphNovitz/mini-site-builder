# syntax=docker/dockerfile:1

FROM node:24-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY vite.config.js ./
COPY resources ./resources
COPY public ./public
RUN npm run build

FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction
COPY . .
RUN composer dump-autoload --optimize --no-dev

FROM dunglas/frankenphp:1-php8.4-bookworm AS app
RUN install-php-extensions zip pdo_sqlite pdo_mysql
WORKDIR /app
COPY . .
COPY --from=vendor /app/vendor ./vendor
COPY --from=assets /app/public/build ./public/build
COPY docker/Caddyfile /etc/frankenphp/Caddyfile
RUN php artisan package:discover --ansi \
 && php artisan storage:link
RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache storage/logs bootstrap/cache public/cartes \
 && chown -R www-data:www-data storage bootstrap/cache database public/cartes
RUN setcap -r /usr/local/bin/frankenphp \
 && chown -R www-data:www-data /data/caddy /config/caddy
ENV APP_ENV=production \
    APP_DEBUG=false
USER www-data
EXPOSE 8080
