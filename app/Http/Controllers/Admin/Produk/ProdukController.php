<?php

namespace App\Http\Controllers\Admin\Produk;

use App\Model\Master\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('admin.produk.produk', compact('produk'));
    }
    public function tambah(){
        return view('admin.produk.produk_tambah');
    }
    public function edit(){
        return view('admin.produk.produk_edit');
    }
}
