## Requirements:
docker
docker-compose

## Install:
docker-compose build
docker-compose up -d

## install vendors
enter wp_web container 
docker exec -it wp_web bash

inside container run
composer install -n
exit

## create database
login to wp_db container and create wordpress database
docker exec -it wp_db bash
mysql -uwordpress -ppassword
create database wordpress;
exit
exit

Visit your wordpress website under ip of docker host

example: 
docker beta (native mac) 127.0.0.1
docker toolbox (virtualbox machine) 192.168.99.100
