<?php

namespace App\Http\Controllers\Admin\Toko;

use App\Model\Master\Toko;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
     public function index(){
         $toko = Toko::all();
        return view('admin.toko.toko', compact('toko'));
    }
    public function tambah(){
        return view('admin.toko.toko_tambah');
    }
    public function edit(){
        return view('admin.toko.toko_edit');
    }
}
