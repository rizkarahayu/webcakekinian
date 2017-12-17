<?php

namespace App\Http\Controllers\Admin\Toko;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
     public function index(){
        return view('admin.toko.toko');
    }
}
