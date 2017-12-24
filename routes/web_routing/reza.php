<?php

Route::prefix('')->group(function () {
    Route::get('/toko','Website\Toko\TokoController@toko');
    Route::get('/toko/{id_toko}','Website\Toko\TokoController@listtoko');
    Route::get('/produk/{id_produk}','Website\Produk\ProdukController@listproduk');
    Route::get('/about','Website\About\AboutController@about');
});
