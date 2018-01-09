<?php

namespace App\Model\Master;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use App\Model\Master\Toko;

class Produk extends Model
{

    protected $table    = 'produk';
    protected $fillable = [

        'toko_id',
        'nama',
        'stock',
        'harga',
        'deskripsi',
        'gambar'
    ];

    public static $validation_rules = [

        'toko_id'       => 'required',
        'nama'          => 'required',
        'stock'         => 'required',
        'harga'         => 'required',
        'deskripsi'     => 'required',
        'gambar'     => 'required',
    ];

    public function toko() {
        return $this->belongsTo(Toko::class, 'toko_id');
    }

    public function cart() {
        return $this->belongsTo(Cart::class, 'produk_id', 'id');
    }
}
