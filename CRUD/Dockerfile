
FROM php:8.0-apache

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo_mysql pdo && docker-php-ext-enable pdo_mysql pdo

COPY ./app /var/www/html/
EXPOSE 80
CMD /usr/sbin/apache2ctl -D FOREGROUND