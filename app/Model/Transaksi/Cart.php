<?php

namespace App\Model\Transaksi;

use App\Model\Master\Produk;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table    = 'cart';
    protected $fillable = [
        'users_id',
        'produk_id',
        'qty',
    ];

    protected static $validation_rules = [
        'users_id'                  => 'required',
        'produk'                    => 'required',
        'qty'                       => 'required',
    ];

    public function users() {
        return $this->hasOne(User::class, 'users_id', 'id');
    }
    public function produk() {
        return $this->hasOne(Produk::class, 'produk_id', 'id');
    }
}