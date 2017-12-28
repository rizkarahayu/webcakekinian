<?php

Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/test', 'Website\Test\TestController@test');
});

Route::prefix('ck-admin')->middleware('auth')->group(function () {

});