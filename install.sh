# List of commands to install project
cp docker-compose.yml.example docker-compose.yml

cd src/
cp .env.example .env

cd ..
docker-compose build
docker-compose up -d

cd src/
./php.sh
composer update
chmod -R 777 storage/
php artisan key:generate 
php artisan migrate:fresh

exit

