<?php

Route::prefix('ck-admin')->group(function () {
    Route::get('/test','Admin\Test\TestController@test');
    Route::get('/transaksi','Admin\Transaksi\TransaksiController@transaksi'); Route::get('/detailtransaksi','Admin\Transaksi\TransaksiController@detailtransaksi');
    Route::get('/laporanbln','Admin\Laporan\LaporanController@laporanbln');
});

