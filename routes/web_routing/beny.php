<?php

Route::get('/kota', 'API\ListKotaController@index');

Route::prefix('')->middleware('auth')->group(function () {
    Route::post('/cart/{produk_id}/{action}', 'Website\Transaksi\TransaksiController@addToCart');
});

Route::prefix('ck-admin/api/')->middleware('auth')->group(function () {
    Route::get('/users/{id}', 'API\ApiUserController@getById');

    Route::get('/customer/{id}', 'API\ApiCustomerController@getById');
});