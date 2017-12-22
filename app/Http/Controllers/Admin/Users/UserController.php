<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     public function index(){
        return view('admin.users.users');
    }
      public function tambah(){
        return view('admin.users.users_tambah');
    }
     public function edit(){
        return view('admin.users.users_edit');
    }
}
