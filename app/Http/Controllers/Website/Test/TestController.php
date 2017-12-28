<?php

namespace App\Http\Controllers\Website\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test() {
        return view('websites.test.test');
    }
}
