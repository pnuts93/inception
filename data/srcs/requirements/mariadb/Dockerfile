FROM alpine:3.15

RUN apk update \
&& apk upgrade \
&& apk add \
	mariadb\
	mariadb-client

COPY ./tools/conf.sh /

ENTRYPOINT ["sh", "/conf.sh"]
