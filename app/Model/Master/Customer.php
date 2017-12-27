<?php

namespace App\Model\Master;

use App\User;
use App\Model\Transaksi\Transaksi;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $table    = 'customer';
    protected $fillable = [
        'username',
        'users_id',
        'nama',
        'jklm',
        'alamat',
        'notelp',
        'email',
        'tgl_lahir',
        'nama_bank',
        'no_rek',
    ];

    protected static $validation_rules = [  
        'username'  => 'required',
        'users_id'  => 'required',
        'nama'      => 'required',
        'jklm'      => 'required',
        'alamat'    => 'required',
        'notelp'    => 'required',
        'email'     => 'required',
        'tgl_lahir' => 'required',
        'nama_bank' => 'required',
        'no_rek'    => 'required',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }
     public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'customer_id');
    }
}
