<?php

Route::prefix('ck-admin')->group(function () {
    Route::get('/test', 'Admin\Test\TestController@test');
});