# :rocket: Laravel Vue Starter
<dl>
<dt>Prerequesties</dt>
<dd>PHP v7.3</dd>
<dd>NodeJS</dd>
</dl>

<dl>
<dt>Installation Setup Steps</dt>
<dd>run ```composer install```</dd>
<dd>run ```npm install```</dd>
<dd>run ```cp .env.example .env```</dd>
<dd>configure the database in .env</dd>
<dd>run ```php artisan key:generate```</dd>
<dd>add the following in the .env file</dd>
    ```API_STANDARDS_TREE=vnd
    API_SUBTYPE=exporer
    API_PREFIX=api
    API_VERSION=v1
    API_NAME="Explorer"
    API_CONDITIONAL_REQUEST=false
    API_STRICT=true
    API_DEFAULT_FORMAT=json
    API_DEBUG=true
<dd>run ```php artisan migrate```</dd>
<dd>run ```php artisan passport:install```</dd>
<dd>copy the 2nd client secret & change it in /resources/js/_store/_modules/_auth/actions.js</dd>
<dd>now add a new user in the database</dd>
    ```INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Admin', 'admin@explorer.dev', NULL, '$2y$10$1pCwgY4Io7EqyccVaNUaKucqote2ppsHSqMc28QdhSny3kc2hsGxO', NULL, NULL, NULL);```
<dd>run ```php artisan serve```</dd>
<dd>run ```run npm run watch```</dd>
<dd>goto ```http://127.0.0.1:8000``` login into the application using the following</dd>
    ```user: admin@explorer.dev, password: secret```
</dl>

<dl>
<dt>Screenshots</dt>
![Explorer](https://raw.githubusercontent.com/moaj257/Laravel-Vue-Starter/master/snap.png)

<dl>
<dt>To Dos</dt>
 <dd>[x] Laravel</dd>
 <dd>[x] Vue</dd>
 <dd>[x] Vuex</dd>
 <dd>[x] Vue Authentication</dd>
 <dd>[x] Module Based Vuex</dd>
 <dd>[x] Vue Router</dd>
 <dd>[x] Dingo API</dd>
 <dd>[x] Laravel Passport</dd>
 <dd>[ ] Repository Based Design</dd>
</dl>

<dl>
<dt>References:</dt>
<dd>[Laravel](https://laravel.com/)</dd>
<dd>[Dingo-API](https://github.com/dingo/api)</dd>
<dd>[Passport](https://laravel.com/docs/5.8/passport)</dd>
<dd>[Vue](https://vuejs.org/)</dd>
<dd>[Vuex](https://vuex.vuejs.org/)</dd>
<dd>[VueRouter](https://router.vuejs.org/)</dd>
</dl>
