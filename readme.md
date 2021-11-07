# Wordpress_Theme_2021

<br/>
1. Import theme width All-in-One WP Migration
2. run npm install from the folder theme

```

- sw.js make a copy in the root of the site
- remplace all the favicons.png
- Remplace Client_name by client name /wp-admin/options-general.php
- manifest.json

```

https://github.com/mlafuentecr/wp_theme_gulp_2021.git

```
version: '3.9'

services:
  ### db ###################################################
  db:
    image: mysql:5.7
    container_name: db
    volumes:
      - ./mysql:/var/lib/mysql
    restart: always
    environment:
      MYSQL_DATABASE: devoddsa_wp_uhlwb
      MYSQL_ROOT_PASSWORD: wordpress1 #user root pass wordpress1
      MYSQL_USER: devoddsa_wp_u1mxf #user admin pass wordpress2
      MYSQL_PASSWORD: LCZst?40E1~7XFhh
    networks:
      - overlay
  ## phpMyAdmin ###########################################
  phpmyadmin:
    container_name: phpmyadmin
    depends_on:
      - db
    image: phpmyadmin:latest
    restart: always
    ports:
      - '8080:80'
    environment:
      PMA_HOST: db
      MYSQL_ROOT_PASSWORD: wordpress1
    networks:
      - overlay
  ## Wordpress ########################################### ./:/var/www/html
  wordpress:
    depends_on:
      - db
    image: wordpress:latest
    ports:
      - '8000:80'
    restart: always
    volumes:
      - ./src/themes:/var/www/html/wp-content/themes
      - ./src/themes:/var/www/html/wp-content/plugins
      - ./src/themes:/var/www/html/wp-content/uploads
    #volumes:
    #  - C:/xampp2/htdocs/wp/client:/var/www/html
    container_name: wp
    environment:
      WORDPRESS_DB_HOST: db
      WORDPRESS_DB_NAME: devoddsa_wp_uhlwb
      WORDPRESS_DB_USER: devoddsa_wp_u1mxf
      WORDPRESS_DB_PASSWORD: LCZst?40E1~7XFhh
    networks:
      - overlay
volumes:
  db_data: {}

networks:
  overlay:

```

```

# To Tear Down
$ docker-compose down --volumes
```
