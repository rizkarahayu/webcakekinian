<?php

namespace App\Http\Controllers\Admin\Events;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Model\Master\Event;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
     public function index(){
         $events= Event::all();
        return view('admin.events.events', compact('events'));
    }
      public function tambah(){
        return view('admin.events.events_tambah');
    }
    public function edit($id){
        $events  = Event::find($id);
        return view('admin.events.events_edit', compact('events'));
    }

    public function store(Request $request){
        $form   = $request->input();

        $rules      = Event::$validation_rules;
        $validate   = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/events/tambah');
        }

        $form['created_at']     = Carbon::now()->toDateTimeString();
        $form['updated_at']     = Carbon::now()->toDateTimeString();

        $events = new Event();
        $events->nama               = $form['nama'];
        $events->toko_id            = $form['toko_id'];
        $events->tanggal_mulai      = $form['tanggal_mulai'];
        $events->tanggal_selesai    = $form['tanggal_selesai'];
        $events->deskripsi          = $form['deskripsi'];
        $events->gambar             = $form['gambar'];
        $events->save();

        if ($events) {
            $request->session()->flash('message', 'Success saving data !');
            return redirect('/ck-admin/events/');
        } else {
            $request->session()->flash('message', 'Failed saving data !');
            return redirect('/ck-admin/events/tambah');
        }

    }

    public function update(Request $request, $id) {
        $form   = $request->input();

        $rules      = Event::$validation_rules;
        unset($rules['password']);
        $validate   = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/events/edit/' . $id);
        }
        $form['updated_at']     = Carbon::now()->toDateTimeString();

        $events = Event::find($id);
        $events->nama               = $form['nama'];
        $events->toko_id            = $form['toko_id'];
        $events->tanggal_mulai      = $form['tanggal_mulai'];
        $events->tanggal_selesai    = $form['tanggal_selesai'];
        $events->deskripsi          = $form['deskripsi'];
        $events->gambar             = $form['gambar'];
        $events->save();

        if ($events) {
            $request->session()->flash('message', 'Success editing data !');
            return redirect('/ck-admin/events/');
        } else {
            $request->session()->flash('message', 'Failed editing data !');
            return redirect('/ck-admin/events/edit/' . $id);
        }

    }

    public function delete(Request $request, $id) {
        $events   = Event::find($id);
        $events->delete();

        if ($events) {
            $request->session()->flash('message', 'Success deleting data !');
            return redirect('/ck-admin/events/');
        } else {
            $request->session()->flash('message', 'Failed deleting data !');
            return redirect('/ck-admin/events/');
        }
    }

}
