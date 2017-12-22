<?php

Route::prefix('')->group(function () {
    Route::get('/toko','Website\Toko\TokoController@toko');
    Route::get('/toko/{id_toko}','Website\Toko\TokoController@listtoko');   
});