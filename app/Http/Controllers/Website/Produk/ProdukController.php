<?php

namespace App\Http\Controllers\Website\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
      public function listproduk($id_produk){
         $list = [];
         $list['id_produk'] = '10';
         $list['nama_produk'] = 'Peanut Foster Lampung';
         $list['deskripsi_produk'] = 'Perpaduan cake lembut dan coklat enak. Coklatnya lumer di mulut. Perfect mix!';
         $list['harga'] = 'Rp65.000,00';
         $list['review'] = "Pengiriman sangat cepat";
        return view('websites.produk.listproduk', compact('list'));
    }
}
