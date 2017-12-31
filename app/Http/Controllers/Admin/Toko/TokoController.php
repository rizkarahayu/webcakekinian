<?php

namespace App\Http\Controllers\Admin\Toko;

use App\Model\Master\Toko;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TokoController extends Controller
{
     public function index(){
         $toko = Toko::all();
        return view('admin.toko.toko', compact('toko'));
    }
    public function tambah(){
        return view('admin.toko.toko_tambah');
    }
    public function edit($id){
        $toko   = Toko::find($id);

        return view('admin.toko.toko_edit', compact('toko'));
    }

    public function store(Request $request){
        $form   = $request->input();

        $rules      = Toko::$validation_rules;
        $validate   = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/toko/tambah');
        }

        $form['created_at']     = Carbon::now()->toDateTimeString();
        $form['updated_at']     = Carbon::now()->toDateTimeString();

        $toko = new Toko();
        $toko->nama        = $form['nama'];
        $toko->siup        = $form['siup'];
        $toko->npwp        = $form['npwp'];
        $toko->no_rek      = $form['no_rek'];
        $toko->kota        = $form['kota'];
        $toko->save();

        if ($toko) {
            $request->session()->flash('message', 'Success saving data !');
            return redirect('/ck-admin/toko/');
        } else {
            $request->session()->flash('message', 'Failed saving data !');
            return redirect('/ck-admin/toko/tambah');
        }

    }

    public function update(Request $request, $id) {
        $form   = $request->input();

        $rules      = Toko::$validation_rules;
        unset($rules['password']);
        $validate   = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/toko/edit/' . $id);
        }
        $form['updated_at']     = Carbon::now()->toDateTimeString();

        $toko = Toko::find($id);
        $toko->name        = $form['name'];
        $toko->siup        = $form['siup'];
        $toko->npwp        = $form['npwp'];
        $toko->no_rek        = $form['no_rek'];
        $toko->save();

        if ($toko) {
            $request->session()->flash('message', 'Success editing data !');
            return redirect('/ck-admin/toko/');
        } else {
            $request->session()->flash('message', 'Failed editing data !');
            return redirect('/ck-admin/toko/edit/' . $id);
        }

    }

    public function delete(Request $request, $id) {
        $toko   = Toko::find($id);
        $toko->delete();

        if ($toko) {
            $request->session()->flash('message', 'Success deleting data !');
            return redirect('/ck-admin/toko/');
        } else {
            $request->session()->flash('message', 'Failed deleting data !');
            return redirect('/ck-admin/toko/');
        }
    }
}
