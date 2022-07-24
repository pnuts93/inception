USER := $(shell whoami)

all : stop
	docker pull alpine:3.15 ; docker-compose -f srcs/docker-compose.yml up --build -d

clean : stop
	docker system prune -af

ifeq ($(USER), root)
fclean : clean
	docker volume rm v_mariadb v_wordpress
	rm -fr v_mariadb v_wordpress

else
fclean : clean

endif

stop :
	docker-compose -f srcs/docker-compose.yml down

re : fclean all


.PHONY: all fclean clean stop re
