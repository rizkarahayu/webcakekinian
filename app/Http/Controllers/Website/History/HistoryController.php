<?php

namespace App\Http\Controllers\Website\History;

use App\Model\Transaksi\Transaksi;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function history($id){
        $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');
        $user   = User::with('customer')->where('id', $id)->first();
        $trans  = Transaksi::with(['customer' => function($query) {
            return $query->with('users');
        }, 'detail_transaksi', 'payment_transaksi', 'detail_pengiriman'])->where('customer_id', $user->customer->id)->get();

//        return $this->responseJson($trans);

        return view('websites.history.history', compact(['toko', 'toko1', 'toko2', 'trans']));
    }
}
