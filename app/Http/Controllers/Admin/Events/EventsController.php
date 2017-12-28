<?php

namespace App\Http\Controllers\Admin\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
     public function index(){
        return view('admin.events.events');
    }
      public function tambah(){
        return view('admin.events.events_tambah');
    }
    public function edit(){
        return view('admin.events.events_edit');
    }
}
