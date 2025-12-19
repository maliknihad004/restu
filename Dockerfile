FROM ubuntu:22.04

RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql

WORKDIR /var/www/html
COPY site/ .

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
