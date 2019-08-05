<?php

use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->post('ftp/list', ['as' => 'ftp.list', 'uses' => 'App\Http\Controllers\Api\FtpController@list']);
});