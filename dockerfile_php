FROM php:7.4.26-apache

COPY index.php /var/www/html

RUN chmod -R 774 /var/www/html

RUN chgrp -R www-data /var/www

RUN chown -R www-data /var/www

RUN docker-php-ext-install mysqli

RUN docker-php-ext-enable mysqli
