#!/bin/sh

if [ ! -d /var/www/html/pnuti.42.fr/adminer ]
then
	mkdir -p /var/www/html/pnuti.42.fr/adminer
	wget -O /var/www/html/pnuti.42.fr/adminer/adminer.php "https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php"
fi

adduser -S nginx && addgroup -S nginx && adduser nginx nginx

exec php-fpm7