<?php

namespace App\Http\Controllers\website\Tes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TesController extends Controller
{
    public function tes(){
    	return view ('websites.tes.tes');
    }
}
