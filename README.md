## Tech Stack

[![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)](https://www.javascript.com/)
[![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)
[![NodeJS](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white)](https://nodejs.org)
[![NPM](https://img.shields.io/badge/NPM-%23000000.svg?style=for-the-badge&logo=npm&logoColor=white)](https://www.npmjs.com)

## Docker Services

* [PHP](https://hub.docker.com/_/php)
* [MySQL](https://hub.docker.com/_/mysql)
* [Nginx](https://hub.docker.com/_/nginx)
* [phpmyadmin](https://hub.docker.com/_/phpmyadmin)

## Getting Started

* Make a copy of docker compose file from the example file.

   ```sh
   cp docker-compose.yml.example docker-compose.yml
   ```
* Then switch to the project folder, i.e `src` & make copy of the local env file.

   ```sh
   cp .env.example .env
   ```

* Return to the root folder and run this command to build the docker containers.

   ```sh
   docker-compose up -d --build
   ```

* To access the php container, use this command

   ```sh
   docker exec -it php /bin/sh
   ```
* Install composer from the php container

   ```sh
   composer install
   ```

* Give permission to the storage folder of the application

   ```sh
   chmod -R 777 storage/
   ```
* Generate the application key using the following command

   ```sh
   php artisan key:generate
   ```
* Migrate the tables to the database

   ```sh
   php artisan migrate
   ```

* Check running docker conatainers status (Switch to root directory for docker access).

   ```sh
   docker-compose ps
   ```
* Shut down all running docker containers.

   ```sh
   docker-compose down
   ```

## Database Schema

Click [here](https://cutt.ly/Q2Q5oVq) to view.
## Demonstration

* As a user, I want to sign up with my `first name`, `last name`, `new email`, and `password`. The email address must be unique.

 <img src="./images/R1.png">

* As a user, I want to sign in using my email address and password.

 <img src="./images/R2.png">

* As a user, I want to send emails to another email address.

 <img src="./images/R3_a.jpg">

 <img src="./images/R3_b.jpg">

* As a user, I want to receive emails from another email address.

 <img src="./images/R4_a.jpg">

 <img src="./images/R4_b.jpg">

* As a user, I want to get emails in my inbox in four categories: `Primary`, `Social`, `Promotional`, and `Forum`.
 
 <img src="./images/R5_a.jpg">

 <img src="./images/R5_b.jpg">
