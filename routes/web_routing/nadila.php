<?php

Route::prefix('ck-admin')->group(function () {
    Route::get('/users', 'Admin\Users\UserController@index');
    Route::get('/users/tambah', 'Admin\Users\UserController@tambah');    

    Route::get('/customer', 'Admin\Customer\CustomerController@index');
    
    Route::get('/toko', 'Admin\Toko\TokoController@index');
    Route::get('/toko/tambah', 'Admin\Toko\TokoController@tambah');
    
    Route::get('/produk', 'Admin\Produk\ProdukController@index');
    Route::get('/produk/tambah', 'Admin\Produk\ProdukController@tambah');
    
    Route::get('/events', 'Admin\Events\EventsController@index');
    Route::get('/events/tambah', 'Admin\Events\EventsController@tambah');
});