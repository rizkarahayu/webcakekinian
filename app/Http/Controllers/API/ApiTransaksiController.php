<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiTransaksiController extends Controller
{
    public function getById(Request $request, $id) {
        $transaksi = app('transaksi')->getWhereWithFirst(['id' => $id], ['detail_pengiriman',
            'payment_transaksi' => function($query) {
                $query->with(['metode_payment']);
            }, 'customer'=> function($query) {
                $query->with(['users']);
            }, 'detail_transaksi' => function($query) {
                $query->with(['produk' => function($query) {
                    $query->with('toko');
                }]);
            }]);
        return $this->responseJson($transaksi);
    }
}
