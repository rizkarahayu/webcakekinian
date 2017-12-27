<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table    = 'toko';
    protected $fillable = [
        'nama',
        'siup',
        'npwp',
        'no_rek',
    ];

    protected static $validation_rules = [
        'nama'      => 'required',
        'siup'      => 'required',
        'npwp'      => 'required',
        'no_rek'    => 'required',
    ];

    public function produk() {
        return $this->hasMany(Produk::class, 'toko_id', 'id');
    }

}
