FROM php:7.4-apache

WORKDIR /var/www/html

COPY ./app /var/www/html/

RUN apt-get update && apt-get install -y unzip

COPY git.zip /var/www/html/
RUN unzip /var/www/html/git.zip -d /var/www/html/home/ && \
    rm /var/www/html/git.zip

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN a2enmod rewrite

RUN echo "<Directory /var/www/html/>" >> /etc/apache2/apache2.conf && \
    echo "    Options +Indexes" >> /etc/apache2/apache2.conf && \
    echo "    AllowOverride All" >> /etc/apache2/apache2.conf && \
    echo "</Directory>" >> /etc/apache2/apache2.conf

EXPOSE 80

CMD ["apache2-foreground"]
