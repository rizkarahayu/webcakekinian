<?php

namespace App\Model\Transaksi;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table    = 'detail_transaksi';
    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'qty',
        'subtotal',
    ];

    protected static $validation_rules = [
        'transaksi_id'              => 'required',
        'produk_id'                 => 'required',
        'qty'                       => 'required',
        'subtotal       '           => 'required',
    ];

    public function transaksi() {
        return $this->belongsTo(transaksi::class, 'transaksi_id', 'transaksi_id');
    }
     public function produk() {
        return $this->hasMany(produk::class, 'produk_id', 'id');
    }
}
