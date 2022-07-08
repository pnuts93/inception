FROM alpine:3.14.6

RUN apk update \
&& apk upgrade \
&& apk add \
	mariadb\
	mariadb-client

COPY ./tools/conf.sh /

ENTRYPOINT ["sh", "/conf.sh"]
