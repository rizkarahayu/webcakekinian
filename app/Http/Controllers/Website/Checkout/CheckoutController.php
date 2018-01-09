<?php

namespace App\Http\Controllers\Website\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //$toko  = app('toko')->get();
    public function cart(){
        $carts  = app('cart')->getWhereWith(['users_id' => Auth::user()->id], ['produk']);
        $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');

        return view('websites.checkout.cart', compact(['toko', 'toko1', 'toko2', 'carts']));
    }
    public function payment(){
        $json   = file_get_contents(url('data/list_kota.json'));
        $kota   = json_decode($json, true);
        $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');

        return view('websites.checkout.payment', compact(['toko', 'toko1', 'toko2', 'kota']));
    }

    public function invoice(){
        $transaksi = app('transaksi')->get();
        $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');
        return view('websites.checkout.invoice', compact('toko', 'transaksi', 'toko1', 'toko2'));
    }
}
