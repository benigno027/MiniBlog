<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# MiniBlog
These project was create with laravel.

## Installation process
- configure .dev file (change database connection)
- php artisan migrate
- php artisan migrate:refresh --seed
- php artisan schedule:run this creates the command, [blog: publications]. runs periodically and gets API posts
- php artisan serve

### The project is created with 2 users.
- [webmaster] user with admin role, his password is [miniblog].
- [admin.api] user who saves API posts.
