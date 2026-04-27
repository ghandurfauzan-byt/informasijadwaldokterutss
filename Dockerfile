FROM php:8.2-apache

# Ubah MPM prefork secara paksa dengan mengganti file konfigurasi
RUN a2dismod mpm_event mpm_worker || true; \
    a2enmod mpm_prefork; \
    echo "LoadModule mpm_prefork_module modules/mod_mpm_prefork.so" > /etc/apache2/mods-available/mpm_prefork.load; \
    echo "LoadModule mpm_prefork_module modules/mod_mpm_prefork.so" > /etc/apache2/mods-enabled/mpm_prefork.load; \
    rm -f /etc/apache2/mods-enabled/mpm_event.load /etc/apache2/mods-enabled/mpm_worker.load

RUN docker-php-ext-install mysqli
COPY api/ /var/www/html/
EXPOSE 80
