composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:refresh --seed
php artisan db:seed --class=CreateUserSeeder
php artisan serve