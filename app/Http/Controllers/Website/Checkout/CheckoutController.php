<?php

namespace App\Http\Controllers\Website\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function cart(){
        return view('websites.checkout.cart');
    }
    public function payment(){
        $toko  = app('toko')->get();
        return view('websites.checkout.payment', compact('toko'));
    }
}
