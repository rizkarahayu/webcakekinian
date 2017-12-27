<?php

namespace App\Model\Transaksi;

use App\Model\Master\Customer;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table    = 'transaksi';
    protected $fillable = [
        'customer_id',
        'total',
        'status_pembayaran',
        'kode_pembayaran',
        'status_pengiriman',
        'status_kedatangan',
    ];

    protected static $validation_rules = [
        'customer_id'               => 'required',
        'total'                     => 'required',
        'status_pembayaran'         => 'required',
        'kode_pembayaran'           => 'required',
        'status_pengiriman'         => 'required',
        'status_kedatangan'         => 'required',
    ];

    public function detail_transaksi() {
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id', 'id');
    }
    public function customer() {
        return $this->hasOne(Customer::class, 'users_id', 'id');
    }
}
