<?php

Route::prefix('')->group(function () {
    Route::get('/toko','Website\Toko\TokoController@toko');
    Route::get('/toko/{id_toko}','Website\Toko\TokoController@listtoko');
    Route::get('/produk/{id_produk}','Website\Produk\ProdukController@listproduk');
    Route::get('/about','Website\About\AboutController@about');
    Route::get('/cart','Website\Checkout\CheckoutController@cart');

    Route::middleware('auth', function () {
        Route::get('/checkout/payment','Website\Checkout\CheckoutController@payment');
    });
});
