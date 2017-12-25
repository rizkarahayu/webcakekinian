<?php

namespace App\Http\Controllers\Website\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('websites.checkout.checkout');
    }
    public function payment(){
        return view('websites.checkout.payment');
    }
}
