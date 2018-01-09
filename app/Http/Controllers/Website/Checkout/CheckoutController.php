<?php

namespace App\Http\Controllers\Website\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    //$toko  = app('toko')->get();
    public function cart(){
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');


        return view('websites.checkout.cart', compact(['toko1', 'toko2']));
    }
    public function payment(){
        $json   = file_get_contents(url('data/list_kota.json'));
        $kota   = json_decode($json, true);
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');

        return view('websites.checkout.payment', compact(['toko1', 'toko2', 'kota']));
    }

    public function invoice(){
        $transaksi = app('transaksi')->get();
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');
        return view('websites.checkout.invoice', compact('transaksi', 'toko1', 'toko2'));
    }
}
