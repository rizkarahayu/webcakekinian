<?php

namespace App\Http\Controllers\Website\Transaksi;

use App\Model\Transaksi\Cart;
use App\Model\Transaksi\DetailPengirimanTransaksi;
use App\Model\Transaksi\DetailTransaksi;
use App\Model\Transaksi\PaymentTransaksi;
use App\Model\Transaksi\Transaksi;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function addToCart(Request $request, $produk_id, $action = 'add') {
        $form   = $request->all();
        $rules  = Cart::$validation_rules;

        if (Auth::guest()) {
            return $this->responseJson(Auth::guest());
        } else {
            $form['users_id']   = Auth::user()->id;
            $form['produk_id']  = $produk_id;
            if (@$form['qty'] == null || @$form['qty'] == '')
                $form['qty']    = 1;

            $checkIfExists  = app('cart')->isExists($form['users_id'], $form['produk_id']);

            if (!$checkIfExists && $action == 'add')
                $cartAction = $this->cartAdd($form, $rules);
            else if ($checkIfExists != false || $action == 'update')
                $cartAction = $this->cartUpdate($form, $rules, $checkIfExists['id']);

            return redirect(url('cart'));
//            return $this->responseJson($cartAction);
        }
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

    public function checkout(Request $request) {
        $form   = $request->all();
//        return $this->responseJson($form);
        $customer   = User::with('customer')->where('id', Auth::user()->id)->first();

        $rules_transaksi    = Transaksi::$validation_rules;
        $form_transaksi     = [];
        $form_transaksi['customer_id']          = $customer->customer->id;
        $form_transaksi['total']                = 0;
        $form_transaksi['status_pembayaran']    = 0;
        $form_transaksi['kode_pembayaran']      = bin2hex(random_bytes(3));
        $form_transaksi['status_pengiriman']    = 0;
        $form_transaksi['status_kedatangan']    = 0;
        $form_transaksi['status_transaksi']     = 0;
        $form_transaksi['tanggal_transaksi']    = Carbon::now()->toDateString();
        if (@$form_transaksi['deskripsi_pemesanan'] != null)
            $form_transaksi['deskripsi_pemesanan']  = $form['deskripsi_pemesanan'];
        else
            $form_transaksi['deskripsi_pemesanan']  = '-';

        $transaksi      = app('transaksi')->create($form_transaksi, $rules_transaksi);
        $transaksi_id   = $transaksi['data']['id'];

        $total  = 0;
        $carts  = app('cart')->getWhereWith(['users_id' => Auth::user()->id], ['produk']);
        foreach ($carts as $cart) {
            $detail     = new DetailTransaksi();
            $detail->transaksi_id   = $transaksi_id;
            $detail->produk_id      = $cart['produk_id'];
            $detail->qty            = $cart['qty'];
            $detail->subtotal       = $cart['produk']['harga'] * $cart['qty'];
            $detail->created_at     = Carbon::now()->toDateTimeString();
            $detail->updated_at     = Carbon::now()->toDateTimeString();
            $detail->save();

            $produk         = app('produk')->getById($cart['produk_id']);
            $update_stock   = app('produk')->update(['stock' => ($produk->stock - $detail->qty)], [], $produk->id);

            $total  += $detail->subtotal;

            $cart_delete    = app('cart')->delete($cart['id']);
        }
        $update_trans   = app('transaksi')->update(['total' => $total], [], $transaksi_id);

        $metode_pengiriman  = app('payment_transaksi')->create(
            [
                'transaksi_id'      => $transaksi_id,
                'metode_payment_id' => $form['metode_payment_id']
            ],
            PaymentTransaksi::$validation_rules
        );

        unset($form['metode_payment_id']);
        unset($form['deskripsi_pemesanan']);
        $form['transaksi_id']   = $transaksi_id;
        $detail_pengiriman  = app('detail_pengiriman_transaksi')->create($form, []);

        return redirect(url('/checkout/invoice/' . $transaksi_id));
    }
}
