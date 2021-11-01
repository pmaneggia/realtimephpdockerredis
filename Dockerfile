FROM php:7.4-apache
COPY --chown=www-data:www-data src/ /var/www/html/

RUN pecl install redis-5.3.4 \
    && docker-php-ext-enable redis
