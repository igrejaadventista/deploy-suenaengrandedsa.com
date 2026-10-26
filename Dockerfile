FROM php:8.4.27-apache

#copia site app folder
COPY --chown=www-data:www-data app /var/www/html

EXPOSE 80

# Install sendmail and the libraries needed to build the PHP extensions
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        zlib1g-dev libzip-dev sendmail && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql zip

# Install composer in /usr/lib folder
WORKDIR /usr/lib
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');"

# Install swiftmailer
RUN php /usr/lib/composer.phar require swiftmailer/swiftmailer @stable

# Install PHPMailer
RUN php /usr/lib/composer.phar require phpmailer/phpmailer @stable

RUN echo "sendmail_path=/usr/sbin/sendmail -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini 

RUN sed -i '/#!\/bin\/sh/aservice sendmail restart' /usr/local/bin/docker-php-entrypoint

RUN sed -i '/#!\/bin\/sh/aecho "$(hostname -i)\t$(hostname) $(hostname).localhost" >> /etc/hosts' /usr/local/bin/docker-php-entrypoint

# And clean up the image

RUN rm -rf /var/lib/apt/lists/*