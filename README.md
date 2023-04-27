## About Flower Farm

Is a web application that allows one to add new flowers to their catalogue and can update its database, once launched in the web it is easily accessible and anyone can search for a type of flower:

## Requirements
- php: >=7.2
- mysql: >=5.7

## Local Setup
- Run `cp env.example .env`
- Create a database and update your `.env` file with your database credentials
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `php artisan storage:link`
- Run `php artisan serve`

## To Login

- Go to http://127.0.0.1:8000/login

**User Name:** `admin@gmail.com`

**Password:** `password`
