#!/bin/sh

if [ ! -d "/var/run/mysqld" ]; 
then
	mkdir -p /var/run/mysqld
	chown -R mysql:mysql /var/run/mysqld
fi

if [ ! -d "/var/lib/mysql/mysql" ];
then
	chown -R mysql:mysql /var/lib/mysql
	
	mariadb-install-db --user=mysql \
		--basedir=/usr \
		--datadir=/var/lib/mysql
	echo -e "\n\nDATABASE INSTALLED\n\n"
	echo -e "USE mysql;\n\
FLUSH PRIVILEGES;\n\
ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';\n\
DELETE FROM mysql.user WHERE User='';\n\
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');\n\
DROP DATABASE IF EXISTS test;\n\
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';\n\
CREATE DATABASE $MYSQL_DATABASE;\n\
CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';\n\
GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';\n\
FLUSH PRIVILEGES;" > db_setup.sql
	mariadbd --user=mysql \
		--basedir=/usr \
		--datadir=/var/lib/mysql/ \
		--bootstrap < /db_setup.sql
	echo -e "\n\nSQL SCRIPT RAN\n\n"
fi
echo -e "[mysqld]\n"\
	"skip-networking=0\n"\
	"skip-bind-address"\
	>> /etc/my.cnf.d/mariadb-server.cnf

exec mysqld --datadir=/var/lib/mysql \
	--user=mysql 

