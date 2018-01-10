<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $toko   = app('toko')->getWithOrder(['users'], 'id', 'asc');
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');

        return view('websites.index', compact(['toko', 'toko1', 'toko2']));
    }
}
