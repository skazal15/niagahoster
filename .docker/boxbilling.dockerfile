FROM alpine:latest


COPY BoxBilling/ /var/www/localhost/htdocs
WORKDIR /var/www/localhost/htdocs/
COPY .docker/httpd.conf /etc/apache2/httpd.conf
RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories

RUN apk add --update && \
    apk add libcap bash apache2 php8-apache2 php8-xml \
    php8 curl ca-certificates openssl openssh git php8-phar php8-json \
    php8-iconv php8-openssl tzdata openntpd unzip mysql-client \
    shadow php8-ftp php8-mbstring php8-soap php8-gmp \
	php8-pdo_odbc php8-dom php8-pdo php8-zip php8-mysqli \
	php8-bcmath php8-gd php8-odbc php8-pdo_mysql \
	php8-pdo_sqlite \
	php8-gettext \
	php8-xmlreader \
	php8-xmlwriter \
	php8-tokenizer \
	php8-bz2 \
	php8-pdo_dblib \
	php8-curl \
	php8-ctype \
	php8-session \
	php8-redis \
	php8-exif \
	php8-intl \
	php8-fileinfo \
	php8-ldap php8-pecl-apcu php8-pecl-mcrypt php8-pecl-xdebug php8-pecl-xmlrpc php8-opcache && \
    rm -f /var/cache/apk/* && \
    addgroup -g 1000 -S apache2 && \
    adduser -S -D -H -u 1000 -h /etc/apache2/ -s /sbin/nologin -G apache2 -g apache2 apache2 && \
    chown -R apache2:apache2 /var/www/localhost && \
    chown -R apache2:apache2 /etc/apache2 && \
    chown -R apache2:apache2 /var/www/ && \
    chown -R apache2:apache2 /var/log/apache2 && \
    chown -R apache2:apache2 /run/apache2 && \
    ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log

RUN getcap /usr/sbin/httpd

USER apache2


RUN sed -i "s/#LoadModule\ rewrite_module/LoadModule\ rewrite_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ session_module/LoadModule\ session_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ session_cookie_module/LoadModule\ session_cookie_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ session_crypto_module/LoadModule\ session_crypto_module/" /etc/apache2/httpd.conf \
    && sed -i "s/#LoadModule\ deflate_module/LoadModule\ deflate_module/" /etc/apache2/httpd.conf 

EXPOSE 8004
CMD [ "httpd","-D","FOREGROUND" ]
