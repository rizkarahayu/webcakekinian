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
         $data['harga'] = 'Rp68.000,00';
         $data['harga_diskon'] = 'Rp65.000,00';
         $toko1  = app('toko')->getLimit(6, 'asc');
         $toko2  = app('toko')->getLimit(6, 'desc');
         $produks = app('produk')->getWhereWith(['toko_id' => $id_toko ], ['toko']);
//         return response()->json($produks);

        return view('websites.toko.listtoko', compact(['data', 'toko1', 'toko2', 'produks']));
    }
}

