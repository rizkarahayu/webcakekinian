<?php

namespace App\Http\Controllers\Admin\Events;

use App\GeneralFunction;
use App\Http\Controllers\Controller;
use App\Model\Master\Event;
use Illuminate\Http\Request;


class EventsController extends Controller
{
    public function index()
    {
        $events = app('event')->get();

        return view('admin.events.events', compact('events'));
    }

    public function tambah()
    {
        $tokos = app('toko')->get();

        return view('admin.events.events_tambah', compact('tokos'));
    }

    public function edit($id)
    {
        $events = app('event')->getById($id);
        $tokos = app('toko')->get();

        return view('admin.events.events_edit', compact(['events', 'tokos']));
    }


    public function store(Request $request)
    {
        $form = $request->all();
        $rules = Event::$validation_rules;

        if (@$form['gambar'] != '') {
            $extension  = $request->file('gambar')->getClientOriginalExtension();

            if ($extension == 'jpg' || $extension == 'png'  || $extension == 'jpeg'
                || $extension == 'svg' || $extension == 'gif' ) {

                $name   = $form['nama'] . date('-d_m_Y-h_i_s');
                $request->file('gambar')->move('img/events/', $name . '.' . $extension);
                $form['gambar']    = $name. '.' . $extension;
            } else {
                $request->session()->flash('message', GeneralFunction::$IMAGE_NOT_VALID_MESSAGE);
                return redirect('/ck-admin/events/edit');
            }
        } else {
            unset($form['gambar']);
        }

        $create = app('event')->create($form, $rules);
        $request->session()->flash('message', $create['message']);

        if ($create['status'] == GeneralFunction::$FAILED_STATUS)
            return redirect('/ck-admin/events/tambah');

        return redirect('/ck-admin/events/');
    }

    public function update(Request $request, $id) {
        $form   = $request->all();
        $rules  = Event::$validation_rules;

        unset($rules['gambar']);

        if (@$form['gambar'] != '') {
            $extension  = $request->file('gambar')->getClientOriginalExtension();

            if ($extension == 'jpg' || $extension == 'png'  || $extension == 'jpeg'
                || $extension == 'svg' || $extension == 'gif' ) {

                $name   = $form['nama'] . date('-d_m_Y-h_i_s');
                $request->file('gambar')->move('img/events/', $name . '.' . $extension);
                $form['gambar']    = $name. '.' . $extension;
            } else {
                $request->session()->flash('message', GeneralFunction::$IMAGE_NOT_VALID_MESSAGE);
                return redirect('/ck-admin/events/edit');
            }
        } else {
            unset($form['gambar']);
        }

        $update = app('event')->update($form, $rules, $id);
        $request->session()->flash('message', $update['message']);

        if ($update['status'] == GeneralFunction::$FAILED_STATUS)
            return redirect('/ck-admin/events/edit/' . $id);

        return redirect('/ck-admin/events/');
    }

    public function delete(Request $request, $id) {
        $delete = app('event')->delete($id);
        $request->session()->flash('message', $delete['message']);

        return redirect('/ck-admin/events/');
    }
}