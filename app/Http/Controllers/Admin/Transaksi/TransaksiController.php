<?php

namespace App\Http\Controllers\Admin\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Transaksi\Transaksi;

class TransaksiController extends Controller
{
     public function transaksi(){
         $transaksi = Transaksi::all();
        return view('admin.transaksi.transaksi', compact('transaksi'));
    }
      public function detailtransaksi($id_transaksi){
        return view('admin.detailtransaksi.detailtransaksi', compact('id_transaksi'));
    }
}
