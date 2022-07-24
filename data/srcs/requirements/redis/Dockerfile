FROM alpine:3.15

RUN apk update\
	&& apk upgrade
RUN apk add redis

CMD ["redis-server", "--protected-mode", "no"]
