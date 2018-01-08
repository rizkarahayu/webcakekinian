<?php

namespace App\Http\Controllers\Website\Transaksi;

use App\Model\Transaksi\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function addToCart(Request $request, $produk_id, $action = 'add') {
        $form   = $request->all();
        $rules  = Cart::$validation_rules;

        $form['users_id']   = Auth::user()->id;
        $form['produk_id']  = $produk_id;
        if (@$form['qty'] == null || @$form['qty'] == '')
            $form['qty']    = 1;

        $checkIfExists  = app('cart')->isExists($form['users_id'], $form['produk_id']);

        if (!$checkIfExists && $action == 'add')
            $cartAction = $this->cartAdd($form, $rules);
        else if ($checkIfExists != false || $action == 'update')
            $cartAction = $this->cartUpdate($form, $rules, $checkIfExists['id']);

        return $this->responseJson($cartAction);
    }

    public function cartAdd($form, $rules) {
        $create = app('cart')->create($form, $rules);
        return $create;
    }

    public function cartUpdate($form, $rules, $cart_id) {
        $cart           =   app('cart')->getById($cart_id);
        $form['qty']    +=  $cart->qty;
        $update         =   app('cart')->update($form, $rules, $cart_id);

        return $update;
    }
}
