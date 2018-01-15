<?php

Route::prefix('ck-admin')->middleware('auth')->group(function () {
    Route::get('/test','Admin\Test\TestController@test');
    
    Route::get('/transaksi','Admin\Transaksi\TransaksiController@transaksi'); Route::get('/transaksi/detail/{id_transaksi}','Admin\Transaksi\TransaksiController@detailtransaksi');


    Route::get('/transaksi/{id}/confirm/bayar', 'Admin\Transaksi\TransaksiController@confirmBayar');
    Route::get('/transaksi/{id}/confirm/terkirim', 'Admin\Transaksi\TransaksiController@confirmTerkirim');
    Route::get('/transaksi/{id}/confirm/datang', 'Admin\Transaksi\TransaksiController@confirmDatang');
    Route::get('/laporanbln','Admin\Laporan\LaporanController@laporanbln');
    Route::get('/laporanproduk','Admin\Laporan\LaporanProdukController@laporanproduk');
    Route::get('/pdf_laporanproduk',array('as'=>'pdf_laporanproduk','uses'=>'Admin\Laporan\LaporanProdukController@pdf_laporanproduk'));
});

