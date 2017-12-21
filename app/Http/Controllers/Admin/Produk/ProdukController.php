<?php

namespace App\Http\Controllers\Admin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index(){
        return view('admin.produk.produk');
    }
    public function tambah(){
        return view('admin.produk.produk_tambah');
    }
}
