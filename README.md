<p align="center"><a href="https://laravel.com" target="_blank"><img src="./fuck.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



FIRST DO
run
```bash
git clone https://github.com/RealSyferX/loginregisterlaravel.git
cd ./loginregisterlaravel
```

Now Create a database on your SQL and then import the database from this directory.
usercontroller.sql and then change the .env.example and there ya go done.
```cpp
php artisan serve
```


Here some extra code if you need it lol
```batch
reinstall
=-=-----=-=-=
rm -rf vendor composer.lock
composer install
php artisan key:generate
php artisan migrate
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```
