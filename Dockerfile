FROM php:8.3.7-apache

# Copy Mantis BT into Docker image
COPY ./mantisbt-2.26.2 /mantisbt-2.26.2
RUN cp -r /mantisbt-2.26.2/* /var/www/html
RUN rm -rf /mantisbt-2.26.2

COPY config_inc.php /var/www/html/config/config_inc.php

# Copy Apache Configuration into Docker
COPY apache2/sites-available /etc/apache2/sites-available

COPY ./mantis-entrypoint /usr/local/bin/mantis-entrypoint

EXPOSE 80

CMD ["mantis-entrypoint"]