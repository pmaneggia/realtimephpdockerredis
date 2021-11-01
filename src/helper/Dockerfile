FROM php:7.4-apache

RUN pecl install redis-5.3.4 \
    && docker-php-ext-enable redis
