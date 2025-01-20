FROM debian:bookworm

# Install Pre-requisites
RUN apt update

RUN apt install apache2 php-mysql php-date php-json php-mbstring php-curl php-gd php-fileinfo php-ldap php-cli php-intl php-xml php-zip php-bcmath php-pear libpcre3 libpcre3-dev zip --yes
RUN apt install libapache2-mod-php nano patch --yes
# Copy Mantis BT into Docker image
COPY ./patches /patches
COPY ./mantisbt-2.26.2 /mantisbt-2.26.2
COPY ./apply_patches.sh /apply_patches.sh
RUN ./apply_patches.sh
RUN cp -r /mantisbt-2.26.2/* /var/www/html
RUN rm -rf /mantisbt-2.26.2

COPY admin/.htaccess.disabled /mantis-supplements/.htaccess.disabled
COPY config_inc.php /var/www/html/config/config_inc.php
COPY phpinfo.php /var/www/html/phpinfo.php
COPY php.ini /etc/php/8.2/apache2/php.ini

# Copy Apache Configuration into Docker
COPY apache2/sites-available /etc/apache2/sites-available

COPY ./mantis-entrypoint /usr/local/bin/mantis-entrypoint

EXPOSE 80

CMD ["mantis-entrypoint"]
