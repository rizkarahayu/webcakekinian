<?php

namespace App\Http\Controllers\Website\Toko;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
     public function listtoko($id_toko){
         $data = [];
         $data['nama_toko'] = 'Banana Foster Lampung';
         $data['nama_produk'] = 'Peanut Foster Lampung';
         $data['deskripsi_toko'] = 'Super Delicious Banana Foster Lampung';
        return view('websites.toko.listtoko', compact('data'));
    }
}

