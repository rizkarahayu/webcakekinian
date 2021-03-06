<?php

namespace App\Http\Controllers\Website\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
      public function listproduk($id_produk){
          $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
          $toko1  = app('toko')->getLimit(6, 'asc');
          $toko2  = app('toko')->getLimit(6, 'desc');
          $produk = app('produk')->getWhereWithFirst(['id' => $id_produk], ['toko']);
//          return $produk

         $list = [];
         $list['id_produk'] = '10';
         $list['nama_produk'] = 'Caramelized Foster Lampung';
         $list['deskripsi_produk'] = 'Perpaduan cake lembut dengan coklat dan karamel yang enak. Karamel super yummy lumer di mulut. Perfect mix!';
         $list['harga'] = 'Rp68.000,00';
         $list['harga_diskon'] = 'Rp65.000,00'; 
         $list['review'] = "Pengiriman sangat cepat";
        return view('websites.produk.listproduk', compact(['produk','toko','list', 'toko1', 'toko2']));
    }
}
