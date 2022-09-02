FROM php:7.4-apache
RUN apt-get update && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
ADD ./back /var/www/html
COPY ./back/config.php /etc/apache2/sites-available/config.php
RUN echo 'SetEnv MYSQL_DB_CONNECTION ${DB_HOST}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_DB_NAME ${DB_DATABASE_NAME}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_USER ${DB_USERNAME}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_PASSWORD ${DB_PASSWORD}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite &&\
    a2enmod headers &&\
    a2enmod rewrite &&\
    a2dissite 000-default &&\
    a2ensite config &&\
    service apache2 restart
EXPOSE 80
EXPOSE 443