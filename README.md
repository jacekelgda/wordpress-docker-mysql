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

you can create wp-content directory in main directory and store all wp-content in there. Wordpress core is in wp directory and is not stored in this repository (.gitignore) you only store content of wp-content.

Visit your wordpress website under ip of docker host

example: 
docker beta (native mac) 127.0.0.1
docker toolbox (virtualbox machine) 192.168.99.100
