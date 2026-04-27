FROM php:8.2-apache
COPY api/ /var/www/html/
RUN docker-php-ext-install mysqli
EXPOSE 80
