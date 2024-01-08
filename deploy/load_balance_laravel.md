1. Change proxies to all to solve problem with https and http

file `app/Http/Middleware/TrustProxies.php` change

```textmate
protected $proxies = '*';
```
2. using session database instead of file in laravel

change in .env

```textmate
SESSION_DRIVER=database
SESSION_LIFETIME=120
```

Run command `php artisan session:table` to create database session table.

Run `php artisan migrate` to create table.

3. Cache using database

Run command `php artisan cache:table` to create database cache table
Run `php artisan migrate` to create table

Change .env to `CACHE_DRIVER=database`

Check browser to see
