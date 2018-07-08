FROM navidonskis/nginx-php7.1
COPY src/ /var/www
COPY vendor/ /var/vendor
EXPOSE 80