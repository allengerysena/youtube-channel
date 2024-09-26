FROM php:7.4-apache

WORKDIR /var/www/html

COPY ./app /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]