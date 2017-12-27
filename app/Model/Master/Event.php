<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
      'toko_id',
      'nama',
      'tanggal_mulai',
      'tanggal_selesai',
      'deskripsi',
      'gambar',
    ];
    
    protected static $validation_rules = [
      'toko_id'         => 'required',
      'nama'            => 'required',
      'tanggal_mulai'   => 'required',
      'tanggal_selesai' => 'required',
      'deskripsi'       => 'required',
      'gambar'          => 'required',
    ];
    
    public function toko(){
        return $this->belongsTo(Toko::class, 'toko_id','toko_id');
    }
    
}
