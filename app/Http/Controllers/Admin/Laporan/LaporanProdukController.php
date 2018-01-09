<?php

namespace App\Http\Controllers\Admin\Laporan;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\Produk;

class LaporanProdukController extends Controller
{
    public function laporanproduk(Request $request){
        $produk = Produk::all();
        return view('admin.laporan.laporanproduk', compact('produk'));
    }
    public function pdf_laporanproduk(Request $request){
        $produk = Produk::all();
        view()->share('produk',$produk);
        if($request->has('download')){
            $pdf = \PDF::loadView('admin.laporan._pdf_laporanproduk');
            return $pdf->download('admin.laporan._pdf_laporanproduk');
        }
        return view('admin.laporan._pdf_laporanproduk', compact('produk'));
    }

}
