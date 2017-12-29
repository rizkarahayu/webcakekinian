<?php

Route::prefix('ck-admin')->middleware('auth')->group(function () {
    Route::get('/users', 'Admin\Users\UserController@index');
    Route::get('/users/tambah', 'Admin\Users\UserController@tambah');  
    Route::get('/users/edit/{id}', 'Admin\Users\UserController@edit');
    Route::post('/users/create', 'Admin\Users\UserController@store');
    Route::post('/users/update/{id}', 'Admin\Users\UserController@update');
    Route::get('/users/delete/{id}', 'Admin\Users\UserController@delete');

    Route::get('/customer', 'Admin\Customer\CustomerController@index');
    Route::get('/customer/edit', 'Admin\Customer\CustomerController@edit');
    
    Route::get('/toko', 'Admin\Toko\TokoController@index');
    Route::get('/toko/tambah', 'Admin\Toko\TokoController@tambah');
    Route::get('/toko/edit/{id}', 'Admin\Toko\TokoController@edit');
    Route::post('/toko/create', 'Admin\Toko\TokoController@store');
    Route::post('/toko/update/{id}', 'Admin\Toko\TokoController@update');
    Route::get('/toko/delete/{id}', 'Admin\Toko\TokoController@delete');

    
    Route::get('/produk', 'Admin\Produk\ProdukController@index');
    Route::get('/produk/tambah', 'Admin\Produk\ProdukController@tambah');
    Route::get('/produk/edit', 'Admin\Produk\ProdukController@edit');    
    
    Route::get('/events', 'Admin\Events\EventsController@index');
    Route::get('/events/tambah', 'Admin\Events\EventsController@tambah');
    Route::get('/events/edit', 'Admin\Events\EventsController@edit'); 
});