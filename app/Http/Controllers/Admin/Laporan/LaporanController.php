<?php

namespace App\Http\Controllers\Admin\Laporan;

use App\Http\Controllers\Controller;
use App\Model\Master\Laporan;
use App\Model\Transaksi\Transaksi;

class LaporanController extends Controller
{
    public function laporanbln(){
        $transaksi = app('transaksi')->getWhereWith([], ['detail_pengiriman',
            'payment_transaksi' => function($query) {
                $query->with(['metode_payment']);
            }, 'customer'=> function($query) {
                $query->with(['users']);
            }, 'detail_transaksi' => function($query) {
                $query->with(['produk' => function($query) {
                    $query->with('toko');
                }]);
            }]);
        $total_trans = Transaksi::sum('total');
        return view('admin.laporan.laporanbln', compact(['transaksi' , 'total_trans']));
    }

}
