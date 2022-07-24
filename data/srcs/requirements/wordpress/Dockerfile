FROM alpine:3.14.6

RUN apk update\
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
	php-tokenizer \
	php7-redis

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
&& chmod +x wp-cli.phar \
&& mv wp-cli.phar /usr/local/bin/wp

COPY tools/conf.sh /

ENTRYPOINT [ "sh", "/conf.sh" ]
