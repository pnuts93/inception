FROM alpine:3.14.6

RUN apk update\
	&& apk upgrade
RUN apk add nginx\
	openssl;\
	mkdir -p /etc/nginx/ssl

RUN openssl req -newkey rsa:2048\
	-nodes\
	-keyout /etc/nginx/ssl/pnuti.key\
	-x509\
	-days 365\
	-out /etc/nginx/ssl/pnuti.crt\
	-subj "/C=DE/ST=Niedersachsen/L=Wolfsburg/O=42Wolfsburg/OU=Students/CN=pnuti.42.fr"

CMD ["nginx", "-g", "daemon off;"]
