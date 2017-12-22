<?php

Route::prefix('ck-admin')->group(function () {
    Route::get('/users', 'Admin\Users\UserController@index');
    Route::get('/users/tambah', 'Admin\Users\UserController@tambah');  
    Route::get('/users/edit', 'Admin\Users\UserController@edit'); 
    
    Route::get('/customer', 'Admin\Customer\CustomerController@index');
    Route::get('/customer/edit', 'Admin\Customer\CustomerController@edit');
    
    Route::get('/toko', 'Admin\Toko\TokoController@index');
    Route::get('/toko/tambah', 'Admin\Toko\TokoController@tambah');
    Route::get('/toko/edit', 'Admin\Toko\TokoController@edit');
    
    Route::get('/produk', 'Admin\Produk\ProdukController@index');
    Route::get('/produk/tambah', 'Admin\Produk\ProdukController@tambah');
    Route::get('/produk/edit', 'Admin\Produk\ProdukController@edit');    
    
    Route::get('/events', 'Admin\Events\EventsController@index');
    Route::get('/events/tambah', 'Admin\Events\EventsController@tambah');
    Route::get('/events/edit', 'Admin\Events\EventsController@edit'); 
});