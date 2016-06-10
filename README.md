## Requirements:
docker
docker-compose

## Install:
docker-compose build
docker-compose up -d

## install vendors
enter wp_web container 

```docker exec -it wp_web bash```

inside container run

```composer install -n```
exit

## create database
login to wp_db container and create wordpress database

```docker exec -it wp_db bash```

```mysql -uwordpress -ppassword```

```create database wordpress;```

exit mysql cli and container (```exit exit```)

as you can see /wp directory is in .gitignore, only wp-content directory stays in repository, keep your themes, plugins in there.

Visit your wordpress website under ip of docker host

example: 
docker beta (native mac) 127.0.0.1
docker toolbox (virtualbox machine) 192.168.99.100

you can add this ip to your ```/etc/hosts``` to simplify the process, for example:
```127.0.0.1 wordpress.dev```

inside wp_web container there is wp-cli installed, you can change hostnames in whole database simply by typing:
``` wp --allow-root --skip-themes search-replace 127.0.0.1 wordpress.dev```

Enjoy!
