<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function test() {
        return view('admin.test');
    }


    public function index() {
        return view('admin.users.index');
    }
}
