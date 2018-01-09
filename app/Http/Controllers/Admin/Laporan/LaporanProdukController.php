<?php

namespace App\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanProdukController extends Controller
{
    public function laporanproduk(){
        $produk  = app('produk')->get();
        return view('admin.laporan.laporanproduk', compact('produk'));
    }
}
