<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListKotaController extends Controller
{
    public function index() {
        $kota   = file_get_contents(url('data/list_kota.json'));
        $array  = json_decode($kota, true);

        return response()->json($array);
    }
}
