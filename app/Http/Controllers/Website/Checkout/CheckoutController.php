<?php

namespace App\Http\Controllers\Website\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    //$toko  = app('toko')->get();
    public function cart(){
        return view('websites.checkout.cart');
    }
    public function payment(){
        return view('websites.checkout.payment', compact('toko'));
    }
}
