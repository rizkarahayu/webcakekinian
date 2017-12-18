<?php

Route::prefix('ck-admin')->group(function () {
    Route::get('/users', 'Admin\Users\UserController@index');
    Route::get('/customer', 'Admin\Customer\CustomerController@index');
    Route::get('/toko', 'Admin\Toko\TokoController@index');
    Route::get('/produk', 'Admin\Produk\ProdukController@index');
    Route::get('/events', 'Admin\Events\EventsController@index');
});