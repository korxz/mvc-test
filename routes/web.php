<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{client_ip?}', [
    'as' => 'index',
    'uses' => 'IndexController@index'
]);

Route::get('/api/locations', [
    'as' => 'api-locations',
    'uses' => 'Api\LocationController@index'
]);
