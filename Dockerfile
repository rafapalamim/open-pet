FROM php:7.4-apache
WORKDIR /var/www/html
RUN apt-get update
COPY ./_docker/server/ssl/ssl.crt /etc/apache2/ssl/ssl.crt
COPY ./_docker/server/ssl/ssl.key /etc/apache2/ssl/ssl.key
COPY ./_docker/server/apache/openpet.conf /etc/apache2/sites-enabled/openpet.conf
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
RUN a2enmod ssl
RUN service apache2 restart