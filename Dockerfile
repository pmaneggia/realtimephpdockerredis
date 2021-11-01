FROM phpredis:latest
COPY --chown=www-data:www-data src/ /var/www/html/
