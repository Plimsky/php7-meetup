FROM php:5.6-apache

#RUN apt-get update
#RUN apt-get update --fix-missing
#RUN apt-get install -f -y --force-yes emacs

RUN echo "<Directory /var/www/html>" >> /etc/apache2/apache2.conf
RUN echo "Options Indexes FollowSymLinks" >> /etc/apache2/apache2.conf
RUN echo "</Directory>" >> /etc/apache2/apache2.conf

WORKDIR /var/www/html/