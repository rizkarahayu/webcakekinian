<?php

namespace App\Model\Transaksi;

use App\Model\Transaksi\Transaksi;
use App\Model\Transaksi\PaymentMethod;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaksi extends Model
{
    protected $table    = 'payment_transaksi';
    protected $fillable = [
        'transaksi_id',
        'metode_payment_id',
        
    ];

    public static $validation_rules = [
        'transaksi_id'           => 'required',
        'metode_payment_id'      => 'required',
    ];
    
    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'id');
    }
    
    public function metode_payment() {
        return $this->belongsTo(PaymentMethod::class, 'metode_payment_id', 'id');
    }
}
