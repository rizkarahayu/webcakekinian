<?php

namespace App\Http\Controllers\Website\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about(){
        return view('websites.about.about');
    }
}
