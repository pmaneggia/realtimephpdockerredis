FROM php:7.4-apache
COPY --chown=www-data:www-data src/ /var/www/html/