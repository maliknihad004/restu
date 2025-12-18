FROM ubuntu

RUN apt-get update
RUN apt-get install -y apache2 php libapache2-mod-php php-mysql

WORKDIR /var/www/html
RUN rm -rf ./*

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
