#!/bin/sh

if [ ! -f /var/www/html/pnuti.42.fr/adminer.php ]
then
	wget -O /var/www/html/pnuti.42.fr/adminer.php "https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php"
fi

exec php-fpm7