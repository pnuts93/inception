FROM alpine:3.14.6

RUN apk update \
	&& apk upgrade
RUN apk add vsftpd

COPY tools/conf.sh .
ENTRYPOINT ["sh", "/conf.sh"]
