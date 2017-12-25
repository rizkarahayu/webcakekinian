<?php

Route::prefix('ck-admin')->group(function () {
    Route::get('/test','Admin\Test\TestController@test');
    
    Route::get('/transaksi','Admin\Transaksi\TransaksiController@transaksi'); Route::get('/transaksi/detail/{id_transaksi}','Admin\Transaksi\TransaksiController@detailtransaksi');
    
    Route::get('/laporanbln','Admin\Laporan\LaporanController@laporanbln');
  Route::get('/laporanproduk','Admin\Laporan\LaporanProdukController@laporanproduk');
});

