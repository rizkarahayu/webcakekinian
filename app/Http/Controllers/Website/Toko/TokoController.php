<?php

namespace App\Http\Controllers\Website\Toko;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
     public function listtoko($id_toko){
         $data = [];
         $data['nama_toko'] = '';
         $data['nama_produk'] = '';
         $data['deskripsi_toko'] = '';
         $data['harga'] = '';
         $data['harga_diskon'] = '';
         $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
         $toko_detail   = app('toko')->getWhereWithOrder(['id' => $id_toko],['users'], 'id', 'asc');

         $toko1  = app('toko')->getLimit(6, 'asc');
         $toko2  = app('toko')->getLimit(6, 'desc');
         $produks = app('produk')->getWhereWith(['toko_id' => $id_toko ], ['toko']);
 //return response()->json($toko_detail);

        return view('websites.toko.listtoko', compact(['data','toko', 'toko_detail', 'toko1', 'toko2', 'produks']));
    }
}

