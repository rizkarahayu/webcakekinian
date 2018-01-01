<?php

Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/test', 'Website\Test\TestController@test');
});

Route::prefix('ck-admin/api/')->middleware('auth')->group(function () {
    Route::get('/users/{id}', 'API\ApiUserController@getById');

    Route::get('/customer/{id}', 'API\ApiCustomerController@getById');
});