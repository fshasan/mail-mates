## About Project

The __src__ folder contains the project files.

## Local Device & OS

* [HP Pavilion 15](https://www.amazon.com/HP-Pavilion-Graphics-Compatible-15-cs3019nr/dp/B085B63QYR)
* [Ubuntu 20.04 LTS](https://linuxconfig.org/ubuntu-20-04-download)
## Tech Stack

* [PHP 8](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [MySQL 8](https://www.mysql.com/)
* [Nginx](https://www.nginx.com)
* [Laravel 9](https://laravel.com/)
* [Docker](https://www.docker.com/)
* [Dockerfile with Alpine](https://hub.docker.com/_/alpine)
* [Node 16](https://nodejs.org)
* [NPM 8](https://www.npmjs.com)

## Docker Services

Here are the list of services used on docker-compose.yml file.

* [PHP](https://hub.docker.com/_/php)
* [MySQL](https://hub.docker.com/_/mysql)
* [Nginx](https://hub.docker.com/_/nginx)
* [phpmyadmin](https://hub.docker.com/_/phpmyadmin)

## Docker commands

List of docker commands to run the project.

* Make a .env file on src folder & copy the contents of .env.example on .env file.
   ```sh
   cp .env.example .env
   ```
* Command to build & start all docker conatainers.
   ```sh
   docker-compose up -d --build
   ```
* Install composer on src folder.
   ```sh
   composer install
   ```
* For acessing php docker container, switch to src folder & run php.sh.
   ```sh
   ./php.sh
   ```
    * Provide permission to storage from src folder.
    ```sh
        chmod -R 777 storage/ 
    ```
    * Generate app key if .env file has none.
    ```sh
        php artisan key:generate
    ```
    * For table migration to database, run migration command.
    ```sh
        php artisan migrate
    ```
* Check running docker conatainers status.
   ```sh
   docker-compose ps
   ```
* Shutting down all running docker containers.
   ```sh
   docker-compose down
   ```

## Database Schema

![alt text](https://gitlab.com/Fsh-98/romato-u689p/-/blob/main/images/Databsae_Schema.png?raw=true)
