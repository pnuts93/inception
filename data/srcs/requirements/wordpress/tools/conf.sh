#!/bin/sh

# download and install wordpress
if [ ! -d "/var/www/html/pnuti.42.fr" ];
then
	mkdir -p /var/www/html/pnuti.42.fr
	wp core download --path=/var/www/html/pnuti.42.fr --allow-root
	wp config create --dbname=$WORDPRESS_DB_NAME \
		--dbuser=$WORDPRESS_DB_USER \
		--dbpass=$WORDPRESS_DB_PASSWORD \
		--dbhost=$WORDPRESS_DB_HOST \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root
	sed -i "38i define( 'WP_REDIS_HOST', 'srcs_redis-cache_1' );" /var/www/html/pnuti.42.fr/wp-config.php
	sed -i "39i define( 'WP_CACHE', true );" /var/www/html/pnuti.42.fr/wp-config.php
	wp config set --add WP_CACHE_KEY_SALT pnuti.42.fr \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root
	wp config set --add WP_REDIS_PORT 6379 \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root \
		--raw
	wp config set --add WP_REDIS_TIMEOUT 1 \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root \
		--raw
	wp config set --add WP_REDIS_READ_TIMEOUT 1 \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root \
		--raw
	wp config set --add WP_REDIS_DATABASE 0 \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root \
		--raw
	wp core install --url="https://pnuti.42.fr" \
		--title=inception \
		--admin_user=$WORDPRESS_ADMIN_USER \
		--admin_password=$WORDPRESS_ADMIN_PASSWORD \
		--admin_email=$WORDPRESS_ADMIN_EMAIL \
		--path=/var/www/html/pnuti.42.fr\
		--skip-email \
		--allow-root
	wp user create $WORDPRESS_USER_NAME \
		$WORDPRESS_USER_EMAIL \
		--user_pass=$WORDPRESS_USER_PASSWORD \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root
	wp plugin install redis-cache \
		--activate \
		--path=/var/www/html/pnuti.42.fr \
		--allow-root
fi

adduser -S nginx && addgroup -S nginx && adduser nginx nginx
chown -R nginx:nginx /var/www/html/pnuti.42.fr

exec php-fpm7
