<?php

namespace App\Http\Controllers\Website\Toko;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
    public function toko(){
        return view('websites.toko.toko');
    }
     public function fosterlampung(){
        return view('websites.toko.fosterlampung');
    }
    
    
     public function listProduk($id_toko){
         $nama = 'Beny';
         
        return view('websites.toko.produk', compact('id_toko', 'nama'));
    }
}

