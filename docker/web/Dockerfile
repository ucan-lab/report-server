FROM php:7.1
RUN apt-get update \
    && apt-get install -y git libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev \
    && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv mcrypt

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update
RUN composer config -g repos.packagist composer https://packagist.jp
RUN composer global require hirak/prestissimo
