<?php

namespace App\Http\Controllers\Admin\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
     public function transaksi(){
        return view('admin.transaksi.transaksi');
    }
      public function detailtransaksi($id_transaksi){
        return view('admin.detailtransaksi.detailtransaksi', compact('id_transaksi'));
    }
}
