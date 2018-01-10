<?php

namespace App\Http\Controllers\Website\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about(){
        $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');

        return view('websites.about.about', compact(['toko', 'toko1', 'toko2']));
    }
}
