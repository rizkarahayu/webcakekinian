<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\GeneralFunction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Transaksi\Transaksi;
use Illuminate\Support\Facades\Auth;

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
    public function confirmBayar(Request $request, $id) {
        $form['status_pembayaran'] = 1;
        $transaksi = app('transaksi')->update($form, [], $id);

        if ($transaksi['status'] == GeneralFunction::$SUCCESS_STATUS) {
            if ($transaksi['status'] == GeneralFunction::$FAILED_STATUS)
                return redirect('/ck-admin/transaksi');
            else
                return redirect('/ck-admin/transaksi');
        }
    }
    public function confirmTerkirim(Request $request, $id) {
        $form['status_pengiriman'] = 1;
        $transaksi = app('transaksi')->update($form, [], $id);

        if ($transaksi['status'] == GeneralFunction::$SUCCESS_STATUS) {
            if ($transaksi['status'] == GeneralFunction::$FAILED_STATUS)
                return redirect('/ck-admin/transaksi');
            else
                return redirect('/ck-admin/transaksi');
        }
    }
    public function confirmDatang(Request $request, $id) {
        $form['status_kedatangan'] = 1;
        $transaksi = app('transaksi')->update($form, [], $id);

        if ($transaksi['status'] == GeneralFunction::$SUCCESS_STATUS) {
            if ($transaksi['status'] == GeneralFunction::$FAILED_STATUS)
                return redirect('/history/' . Auth::user()->id);
            else
                return redirect('/history/' . Auth::user()->id);
        }
    }
}
