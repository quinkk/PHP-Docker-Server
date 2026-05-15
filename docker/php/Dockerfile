FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    zip unzip git curl \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-install pdo_mysql zip intl opcache \
    && git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \
    && docker-php-ext-install redis

WORKDIR /var/www/html
