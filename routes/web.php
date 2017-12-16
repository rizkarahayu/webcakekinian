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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('ck-admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index');

    Route::get('/test', 'Admin\Users\UsersController@index');
    Route::get('/users', 'Admin\Users\UsersController@index');
});

include_once "web_routing/nadila.php";
include_once "web_routing/reza.php";
include_once "web_routing/rizka.php";