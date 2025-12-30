# RestoFlow

git clone
docker compose up -d --build

docker compose exec backend bash
composer install
php artisan migrate:fresh --seed
php artisan tenants:seed
