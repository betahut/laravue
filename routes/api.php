<?php

use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->get('ftp/list', 'App\Http\Controllers\Api\FtpController@list');
    });
    // $api->get('ftp/list', ['as' => 'ftp.list', 'uses' => 'App\Http\Controllers\Api\FtpController@list']);
});