<?php

namespace App\Http\Controllers\Admin\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\Event;

class EventsController extends Controller
{
     public function index(){
         $events= Event::all();
        return view('admin.events.events', compact('events'));
    }
      public function tambah(){
        return view('admin.events.events_tambah');
    }
    public function edit(){
        return view('admin.events.events_edit');
    }
}
