<?php

namespace App\Http\Controllers\Website\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    $toko  = app('toko')->get();
    public function about(){
        $toko  = app('toko')->get();
        return view('websites.about.about', compact('toko'));
    }
}
