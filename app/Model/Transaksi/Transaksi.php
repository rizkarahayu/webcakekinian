<?php

namespace App\Model\Transaksi;

<<<<<<< HEAD

=======
use App\Model\Master\Customer;
>>>>>>> d7d8ecf775352336a4da428e22870b13022308f0
use Illuminate\Database\Eloquent\Model;
use App\Model\Master\Customer;
use App\Model\Master\Toko;

class Transaksi extends Model
{
    protected $table    = 'transaksi';
    protected $fillable = [
        'customer_id',
        'nama',
        'total',
        'status_pembayaran',
        'kode_pembayaran',
        'status_pengiriman',
        'status_kedatangan',
    ];

    protected static $validation_rules = [
        'customer_id'               => 'required',
        'nama'                      => 'required',
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

    public function payment_transaksi() {
        return $this->hasOne(PaymentTransaksi::class, 'transaksi_id', 'id');
<<<<<<< HEAD
=======
    }

    public function detail_pengiriman() {
        return $this->hasOne(DetailPengirimanTransaksi::class, 'transaksi_id', 'id');
>>>>>>> d7d8ecf775352336a4da428e22870b13022308f0
    }
}
