FROM php:5.6-apache

RUN apt-get update -y && apt-get install -y curl 
RUN apt-get -y install git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer require php-on-couch/php-on-couch

COPY index.php /var/www/html
COPY interogari.php /var/www/html
COPY pillowchat.css /var/www/html

CMD apachectl -D FOREGROUND
