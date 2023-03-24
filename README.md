setup proper .env
run
composer install
php artisan migrate:fresh --seed
php artisan storage:link
Php artisan db:seed --class=ProjectSeeder
