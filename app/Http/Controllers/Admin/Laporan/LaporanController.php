<?php

namespace App\Http\Controllers\Admin\Laporan;

use App\Http\Controllers\Controller;
use App\Model\Master\Laporan;
use App\Model\Transaksi\Transaksi;

class LaporanController extends Controller
{
    public function laporanbln(){
        $transaksi  = app('transaksi')->get();
        return view('admin.laporan.laporanbln', compact('transaksi'));
    }
    public function laporanproduk(){
        $produk  = app('produk')->get();
        return view('admin.laporan.laporanproduk', compact('produk'));
        }
}
