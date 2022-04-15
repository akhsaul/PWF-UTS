# <div style="text-align: center;">API Product<br>UTS Pemrograman Web Framework</div>

## Identity

- Name : [Ikhsan Maulana](https://github.com/akhsaul)
- NIM : 20416255201192
- Class : IF20E

## How to Install

1. [Clone this repository](#how-to-clone).
2. Install [XAMPP](https://www.apachefriends.org/download.html) with PHP version 8 or newer.
3. Make sure PHP directory can be found in `PATH` environment.
4. Open XAMPP. Turn on Apache dan MySQL.
5. Open Phpmyadmin and create a new database named `pwfuts`.
6. Download file database [here](/public/db/pwfuts.sql). `/public/db/pwfuts.sql`.
7. Import database named `pwfuts.sql`.
8. [Run server](#how-to-run-server-api).

## Testing API

### Login as Admin (to get Auth Token)

![Login as Admin Image](/public/img/login.png "Login as Admin")

### Add Data Product

![Add Data Product Image](/public/img/add.png "Add Data Product")

### Read All Data Product

![Read All Data Product Image](/public/img/readAll.png "Read All Data Product")

### Read Data Product By ID

![Read Data Product By ID Image](/public/img/readById.png "Read Data Product By ID")

### Read Data Product By Name

![Read Data Product By Name Image](/public/img/readByName.png "Read Data Product By Name")

### Update Data Product

![Update Data Product Image](/public/img/update.png "Update Data Product")

### Delete Data Product

![Delete Data Product Image](/public/img/delete.png "Delete Data Product")

## How to Clone

1. Install [git](https://git-scm.com/downloads).
2. Open ***CMD*** or ***Terminal***.
3. Run this command `git clone https://github.com/akhsaul/PWF-UTS.git`.

## How to Run Server API

1. Open ***CMD*** or ***Terminal***.
2. Move current directory to your cloning directory. Example:`cd /d  "D:/project/PWF-UTS"`.
3. Run this command `php artisan serve`.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
