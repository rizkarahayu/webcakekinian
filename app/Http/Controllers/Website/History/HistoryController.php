<?php

namespace App\Http\Controllers\Website\History;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function history(){
        $toko1  = app('toko')->getLimit(6, 'asc');
        $toko2  = app('toko')->getLimit(6, 'desc');

        return view('websites.history.history', compact(['toko1', 'toko2']));
    }
}
