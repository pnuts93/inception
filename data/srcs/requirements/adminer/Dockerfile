FROM alpine:3.14.6

RUN apk update \
	&& apk upgrade
RUN apk add mariadb-client \
	php \
	php-fpm \
	php-json \
	php-common \
	php-session \
	php-iconv \
	php-gd \
	php-curl \
	php-xml \
	php-mysqli \
	php-imap \php-cgi \
	fcgi \
	php-pdo \
	php-pdo_mysql \
	php-soap \
	php-xmlrpc \
	php-posix \
	php-gettext \
	php-ldap \
	php-ctype \
	php-dom \
	php-simplexml \
	php-phar \
	php-tokenizer

ADD "https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php" /var/www/html/pnuti.42.fr/adminer.php

CMD ["php-fpm7"]