<?php

namespace App\Model\Transaksi;

use App\Model\Master\Produk;
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
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
     public function produk() {
        return $this->hasOne(Produk::class, 'id', 'produk_id');
    }
}
