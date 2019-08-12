# :rocket: Laravel Vue Starter
### Prerequesties
- PHP v7.3
- NodeJS

### Installation Setup Steps
- run ```composer install```
- run ```npm install```
- run ```cp .env.example .env```
- configure the database in .env
- run ```php artisan key:generate```
- add the following in the .env file
    ```API_STANDARDS_TREE=vnd
    API_SUBTYPE=exporer
    API_PREFIX=api
    API_VERSION=v1
    API_NAME="Explorer"
    API_CONDITIONAL_REQUEST=false
    API_STRICT=true
    API_DEFAULT_FORMAT=json
    API_DEBUG=true
- run ```php artisan migrate```
- run ```php artisan passport:install```
- copy the 2nd client secret & change it in /resources/js/_constants/global.constants.js
- now add a new user in the database
    ```INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Admin', 'admin@explorer.dev', NULL, '$2y$10$1pCwgY4Io7EqyccVaNUaKucqote2ppsHSqMc28QdhSny3kc2hsGxO', NULL, NULL, NULL);```
- run ```php artisan serve```
- run ```run npm run watch```
- goto ```http://127.0.0.1:8000``` login into the application using the following
    ```user: admin@explorer.dev, password: secret```

### Screenshots
![Login](https://raw.githubusercontent.com/moaj257/Laravel-Vue-Starter/master/snap1.png)
![Dashboard](https://raw.githubusercontent.com/moaj257/Laravel-Vue-Starter/master/snap2.png)

### To Dos
 - [x] Laravel
 - [x] Vue
 - [x] Vuex
 - [x] Vue Authentication
 - [x] Module Based Vuex
 - [x] Vue Router
 - [x] Dingo API
 - [x] Laravel Passport
 - [ ] Repository Based Design

### References:
- [Laravel](https://laravel.com/)
- [Dingo-API](https://github.com/dingo/api)
- [Passport](https://laravel.com/docs/5.8/passport)
- [Vue](https://vuejs.org/)
- [Vuex](https://vuex.vuejs.org/)
- [VueRouter](https://router.vuejs.org/)
