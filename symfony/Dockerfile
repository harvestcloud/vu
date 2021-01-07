FROM php:7.4.12-fpm-alpine AS dev
ADD . /app
WORKDIR /app
RUN apk update
RUN apk add --no-cache --virtual libpq-dev postgresql-dev autoconf gcc g++ make
RUN docker-php-ext-install pdo pgsql pdo_pgsql
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN wget https://getcomposer.org/installer
RUN php installer --install-dir=/usr/local/bin/ --filename=composer
RUN rm installer
RUN composer install --no-interaction --optimize-autoloader
