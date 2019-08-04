# :rocket: Laravel Vue Starter
<dl>
<dt>Prerequesties</dt>
<dt>PHP v7.3</dt>
<dt>NodeJS</dt>
</dl>

<dl>
<dt>Installation Setup Steps</dt>
<dt>run ```composer install```</dt>
<dt>run ```npm install```</dt>
<dt>run ```cp .env.example .env```</dt>
<dt>configure the database in .env</dt>
<dt>run ```php artisan key:generate```</dt>
<dt>add the following in the .env file</dt>
    ```API_STANDARDS_TREE=vnd
    API_SUBTYPE=exporer
    API_PREFIX=api
    API_VERSION=v1
    API_NAME="Explorer"
    API_CONDITIONAL_REQUEST=false
    API_STRICT=true
    API_DEFAULT_FORMAT=json
    API_DEBUG=true
<dt>run ```php artisan migrate```</dt>
<dt>run ```php artisan passport:install```</dt>
<dt>copy the 2nd client secret & change it in /resources/js/_store/_modules/_auth/actions.js</dt>
<dt>now add a new user in the database</dt>
    ```INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Admin', 'admin@explorer.dev', NULL, '$2y$10$1pCwgY4Io7EqyccVaNUaKucqote2ppsHSqMc28QdhSny3kc2hsGxO', NULL, NULL, NULL);```
<dt>run ```php artisan serve```</dt>
<dt>run ```run npm run watch```</dt>
<dt>goto ```http://127.0.0.1:8000``` login into the application using the following</dt>
    ```user: admin@explorer.dev, password: secret```
</dl>

<dl>
<dt>Screenshots</dt>
![Explorer](https://raw.githubusercontent.com/moaj257/Laravel-Vue-Starter/master/snap.png)

<dl>
<dt>To Dos</dt>
 <dt>[x] Laravel</dt>
 <dt>[x] Vue</dt>
 <dt>[x] Vuex</dt>
 <dt>[x] Vue Authentication</dt>
 <dt>[x] Module Based Vuex</dt>
 <dt>[x] Vue Router</dt>
 <dt>[x] Dingo API</dt>
 <dt>[x] Laravel Passport</dt>
 <dt>[ ] Repository Based Design</dt>
</dl>

<dl>
<dt>References:</dt>
<dt>[Laravel](https://laravel.com/)</dt>
<dt>[Dingo-API](https://github.com/dingo/api)</dt>
<dt>[Passport](https://laravel.com/docs/5.8/passport)</dt>
<dt>[Vue](https://vuejs.org/)</dt>
<dt>[Vuex](https://vuex.vuejs.org/)</dt>
<dt>[VueRouter](https://router.vuejs.org/)</dt>
</dl>
