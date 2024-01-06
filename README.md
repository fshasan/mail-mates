# Getting started
## Installation

* Clone the repository

```sh
git clone https://github.com/fshasan/mail-mates.git
```

* Open the command prompt and switch to the repository folder

```sh
cd mail-mates
```

* Copy the example env file and make the required configuration changes in the .env file

```sh
cp .env.example .env
```

* Install all the dependencies using composer

```sh
composer install
```

* Generate a new application key

```sh
php artisan key:generate
```

* Run the database migrations

```sh
php artisan migrate
```
