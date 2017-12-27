<?php

namespace App\Model\Transaksi;


use App\Model\Transaksi\PaymentTransaksi;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table    = 'metode_payment';
    protected $fillable = [
        'metode',
    ];

    protected static $validation_rules = [
        'metode'      => 'required',
    ];
    
    public function payment_transaksi() {
        return $this->hasOne(PaymentTransaksi::class, 'metode_id', 'id');
    }
}
