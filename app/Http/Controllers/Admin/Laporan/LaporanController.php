<?php

namespace App\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function laporanbln(){
        return view('admin.laporan.laporanbln');
    }
    public function laporanproduk(){
           return view('admin.laporan.laporanproduk');
        }
}
