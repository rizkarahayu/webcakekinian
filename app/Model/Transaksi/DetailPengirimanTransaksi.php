<?php

namespace App\Model\Transaksi;

use Illuminate\Database\Eloquent\Model;

class DetailPengirimanTransaksi extends Model
{
    protected $table    = 'detail_pengiriman_transaksi';
    protected $fillable = [
        'transaksi_id',
        'nama_pembeli',
        'no_telp',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
    ];

    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
}
