cd src/
cp .env.example .env

cd ..
docker-compose build
docker-compose up -d

cd src/
./php.sh
composer install
chmod -R 777 storage/
php artisan key:generate 
php artisan migrate:fresh

exit

