FROM php:8.1-fpm

RUN set -x && \
  adduser --system --home /var/www/html \
  --uid 1000 --gid 33 paoloumali

RUN docker-php-ext-install mysqli pdo pdo_mysql && \
  docker-php-ext-enable mysqli pdo_mysql

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

USER paoloumali
