<?php

namespace App\Http\Controllers\Admin\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Transaksi\Transaksi;

class TransaksiController extends Controller
{
     public function transaksi(){
         $transaksi = app('transaksi')->getWhereWith([], ['detail_pengiriman',
             'payment_transaksi' => function($query) {
                 $query->with(['metode_payment']);
             }, 'customer'=> function($query) {
                 $query->with(['users']);
             }, 'detail_transaksi' => function($query) {
                 $query->with(['produk' => function($query) {
                     $query->with('toko');
                 }]);
             }]);
         $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
         $toko1  = app('toko')->getLimit(6, 'asc');
         $toko2  = app('toko')->getLimit(6, 'desc');

//        return $this->responseJson($transaksi);
        return view('admin.transaksi.transaksi', compact('transaksi'));
    }
      public function detailtransaksi($id_transaksi){
          $transaksi = app('transaksi')->getWhereWithFirst(['id' => $id_transaksi], ['detail_pengiriman',
              'payment_transaksi' => function($query) {
                  $query->with(['metode_payment']);
              }, 'customer'=> function($query) {
                  $query->with(['users']);
              }, 'detail_transaksi' => function($query) {
                  $query->with(['produk' => function($query) {
                      $query->with('toko');
                  }]);
              }]);
          //return $this->responseJson($transaksi);

          return view('admin.detailtransaksi.detailtransaksi', compact('transaksi', 'id_transaksi'));
    }
}
