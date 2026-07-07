FROM php:8.2-apache

# Enable the MySQLi extension so PHP can talk to MySQL
RUN docker-php-ext-install mysqli

# Copy application files into the Apache web root
COPY app/ /var/www/html/

EXPOSE 80
