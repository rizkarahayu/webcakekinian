<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;
use App\Model\Master\Toko;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
      'nama',
      'toko_id',
      'nama',
      'tanggal_mulai',
      'tanggal_selesai',
      'deskripsi',
      'gambar',
    ];
    
    public static $validation_rules = [
      'nama'         => 'required',
      'toko_id'         => 'required',
      'nama'            => 'required',
      'tanggal_mulai'   => 'required',
      'tanggal_selesai' => 'required',
      'deskripsi'       => 'required',
      'gambar'          => 'required',
    ];
    
    public function toko(){
        return $this->belongsTo(Toko::class, 'toko_id');
    }
    
}
