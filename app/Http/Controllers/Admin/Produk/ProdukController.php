<?php

namespace App\Http\Controllers\Admin\Produk;

use App\Model\Master\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('admin.produk.produk', compact('produk'));
    }
    public function tambah(){
        return view('admin.produk.produk_tambah');
    }
    public function edit($id){
        $produk   = Produk::find($id);

        return view('admin.produk.produk_edit', compact('produk'));
    }

    public function store(Request $request){
        $form = $request->input();

        $rules    = Produk::$validation_rules;
        $validate = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/produk/tambah');
        }

        $form['created_at']     = Carbon::now()->toDateTimeString();
        $form['updated_at']     = Carbon::now()->toDateTimeString();

        $produk = new Produk();
        $produk->nama           = $form['nama'];
        $produk->toko_id        = $form['toko_id'];
        $produk->stock          = $form['stock'];
        $produk->harga          = $form['harga'];
        $produk->deskripsi      = $form['deskripsi'];
        $produk->created_at     = $form['created_at'];
        $produk->updated_at     = $form['updated_at'];
        $produk->gambar         = $form['gambar'];
        $produk->save();

        if ($produk) {
            $request->session()->flash('message', 'Success saving data !');
            return redirect('/ck-admin/produk/');
        } else {
            $request->session()->flash('message', 'Failed saving data !');
            return redirect('/ck-admin/produk/tambah');
        }

    }

    public function update(Request $request, $id) {
        $form   = $request->input();

        $rules      = Produk::$validation_rules;
        unset($rules['password']);
        $validate   = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/produk/edit/' . $id);
        }
        $form['updated_at']     = Carbon::now()->toDateTimeString();

        $produk = Produk::find($id);
        $produk->nama           = $form['nama'];
        $produk->toko_id        = $form['toko_id'];
        $produk->stock           = $form['stock'];
        $produk->harga          = $form['harga'];
        $produk->deskripsi      = $form['deskripsi'];
        $produk->created_at     = $form['created_at'];
        $produk->updated_at     = $form['updated_at'];
        $produk->gambar         = $form['gambar'];
        $produk->save();

        if ($produk) {
            $request->session()->flash('message', 'Success editing data !');
            return redirect('/ck-admin/produk/');
        } else {
            $request->session()->flash('message', 'Failed editing data !');
            return redirect('/ck-admin/produk/edit/' . $id);
        }

    }

    public function delete(Request $request, $id) {
        $produk   = Produk::find($id);
        $produk->delete();

        if ($produk) {
            $request->session()->flash('message', 'Success deleting data !');
            return redirect('/ck-admin/produk/');
        } else {
            $request->session()->flash('message', 'Failed deleting data !');
            return redirect('/ck-admin/produk/');
        }
    }



}
