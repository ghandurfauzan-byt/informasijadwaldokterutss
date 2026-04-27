FROM php:8.2-apache

# Matikan semua MPM, lalu aktifkan mpm_prefork (kompatibel dengan PHP)
RUN a2dismod mpm_event mpm_worker || true && \
    a2enmod mpm_prefork

# Install ekstensi mysqli
RUN docker-php-ext-install mysqli

# Salin semua file dari folder "api" ke root web server
COPY api/ /var/www/html/

EXPOSE 80
