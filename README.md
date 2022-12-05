
### Services

This project was run on docker compose & here are the list of services used on docker-compose.yml file.

* [PHP 8](https://hub.docker.com/_/php)
* [MySQL](https://hub.docker.com/_/mysql)
* [Nginx](https://hub.docker.com/_/nginx)
* [phpmyadmin](https://hub.docker.com/_/phpmyadmin)

### Docker commands

List of docker commands to run the project.

* Make a .env file on src folder & copy the contents of .env.example on .env file.
   ```sh
   cp .env.example .env
   ```
* Run this command to build the docker containers.
   ```sh
   docker-compose build
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
* Start all docker conatainers.
   ```sh
   docker-compose up -d
   ```
* Check running docker conatainers status.
   ```sh
   docker-compose ps
   ```
* Shutting down all running docker containers.
   ```sh
   docker-compose down
   ```
