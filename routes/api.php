<?php

use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->post('accessToken', ['as' => 'auth.login', 'uses' => 'App\Http\Controllers\Api\AuthController@accessToken']);
});