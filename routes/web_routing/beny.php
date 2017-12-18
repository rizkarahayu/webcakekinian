<?php

Route::prefix('')->group(function () {
    Route::get('/test', 'Website\Test\TestController@test');
});

Route::prefix('ck-admin')->group(function () {

});