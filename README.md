# About Project

Web based Laravel project.

# Installation

follow steps after clone.

-   run `composer install` //install dependencies
-   create env file from .env.example by copy pasting
-   create database and update in .env file
-   update other values in .env
-   run `php artisan key:generate`
-   run `php artisan migrate` // create tables in DB
-   run `php artisan storage:link`
-   run `php artisan db:seed` // populate neccessary data in DB
-   run `php artisan optimize` // this will create cache to make app faster
-   give read and write permission to these folders /storage & /bootstrap/cache (this will vary acording to Operting System)

## Helping Commands

-   `php artisan serve`
-   `php artisan db:seed --class=ProjectSeeder` // to create fake proeject in DB
-   `php artisan cache:clear`
