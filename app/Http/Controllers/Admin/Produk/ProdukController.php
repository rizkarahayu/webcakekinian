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
        $produk  = app('produk')->get();
        return view('admin.produk.produk', compact('produk'));
    }
    public function tambah(){
        $tokos  = app('tokos')->get();
        return view('admin.produk.produk_tambah', compact('tokos'));
    }

    public function edit($id){
        $produk   = app('produk')->getById($id);
        $tokos  = app('toko')->get();

        return view('admin.produk.produk_edit', compact(['produk', 'tokos']));
    }

    public function store(Request $request) {
        $form   = $request->input();
        $rules  = Produk::$validation_rules;

        $create = app('produk')->create($form, $rules);

        $request->session()->flash('message', $create['message']);

        if (!$create)
            return redirect('/ck-admin/produk/tambah');

        return redirect('/ck-admin/produk/');
    }

    public function update(Request $request, $id) {
        $form   = $request->input();
        $rules  = Produk::$validation_rules;

        $update = app('produk')->update($form, $rules, $id);
        $request->session()->flash('message', $update['message']);

        if (!$update)
            return redirect('/ck-admin/produk/edit/' . $id);

        return redirect('/ck-admin/produk/');
    }

    public function delete(Request $request, $id) {
        $delete = app('produk')->delete($id);
        $request->session()->flash('message', $delete['message']);

        return redirect('/ck-admin/produk/');
    }
}
