<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;
use App\Model\Master\Toko;

class Produk extends Model
{
    protected $table    = 'produk';
    protected $fillable = [
        'nama',
        'toko_id',
        'nama',
        'stock',
        'harga',
        'deskripsi',
    ];

    protected static $validation_rules = [
        'nama'          => 'required',
        'toko_id'       => 'required',
        'nama'          => 'required',
        'stock'         => 'required',
        'harga'         => 'required',
        'deskripsi'     => 'required',
    ];

    public function toko() {
        return $this->belongsTo(Toko::class, 'toko_id');
    }
}
