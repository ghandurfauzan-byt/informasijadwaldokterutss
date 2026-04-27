FROM php:8.2-apache

RUN docker-php-ext-install mysqli && a2enmod rewrite

# Menonaktifkan modul MPM lain dan mengaktifkan prefork
RUN a2dismod mpm_event && a2enmod mpm_prefork

# Menyalin folder 'public' sebagai root direktori web server
COPY public/ /var/www/html/

EXPOSE 80
