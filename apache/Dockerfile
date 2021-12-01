FROM php:7.2-apache
RUN apt-get update
RUN apt-get -y install libaprutil1-dbd-mysql libxml2-dev git p7zip
RUN docker-php-ext-install mysqli pdo pdo_mysql soap

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod dbd && a2enmod authn_dbd
#COPY apache2.conf /etc/apache2/apache2.conf