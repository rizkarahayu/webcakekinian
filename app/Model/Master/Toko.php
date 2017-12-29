<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table    = 'toko';
    protected $fillable = [
        'nama',
        'kota',
        'siup',
        'npwp',
        'no_rek',
        'nama_bank'
    ];

    protected static $validation_rules = [
        'nama'      => 'required',
        'kota'      => 'required',
        'siup'      => 'required',
        'npwp'      => 'required',
        'no_rek'    => 'required',
        'nama_bank'      => 'required',
    ];

    public function produk() {
        return $this->hasMany(Produk::class, 'toko_id', 'id');
    }
    
    public function events() {
        return $this->hasMany(Event::class, 'toko_id', 'id');
    }
}
