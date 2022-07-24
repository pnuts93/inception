FROM alpine:3.15

RUN apk update \
	&& apk upgrade
RUN apk add vsftpd

COPY tools/conf.sh .
ENTRYPOINT ["sh", "/conf.sh"]
