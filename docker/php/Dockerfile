FROM php:7.0-fpm

WORKDIR /var/www/html

RUN apt-get update \
    && apt install -y unzip \
    && apt-get clean
RUN cd /usr/src \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer