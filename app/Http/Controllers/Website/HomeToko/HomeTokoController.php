<?php

namespace App\Http\Controllers\Website\HomeToko;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeTokoController extends Controller
{
     public function hometoko(){
         $toko  = app('toko')->get();
         $list = [];
         $list['id_produk'] = '10';
         $list['nama_toko'] = 'Banana Foster Lampung';
         $list['nama_produk'] = 'Caramelized Foster Lampung';
         $list['deskripsi_produk'] = 'Perpaduan cake lembut dengan coklat dan karamel yang enak. Karamel super yummy lumer di mulut. Perfect mix!';
         $list['harga'] = 'Rp68.000,00';
         $list['harga_diskon'] = 'Rp65.000,00'; 
         $list['review'] = "Pengiriman sangat cepat";
         return view('websites.hometoko.hometoko', compact('list'));
    }
}
