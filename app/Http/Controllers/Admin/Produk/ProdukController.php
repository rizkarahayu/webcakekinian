<?php

namespace App\Http\Controllers\Admin\Produk;

use App\Model\Master\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('admin.produk.produk', compact('produk'));
    }
    public function tambah(){
        return view('admin.produk.produk_tambah');
    }
    public function edit(){
        return view('admin.produk.produk_edit');
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
        $produk->nama_produk    = $form['nama_produk'];
        $produk->toko           = $form['toko'];
        $produk->stok           = $form['stok'];
        $produk->harga          = $form['harga'];
        $produk->deskripsi      = $form['deskripsi'];
        $produk->gambar         = $form['gambar'];
        $produk->created_at        = $form['created_at'];
        $produk->updated_at        = $form['updated_at'];
        $produk->save();

        if ($produk) {
            $request->session()->flash('message', 'Success saving data !');
            return redirect('/ck-admin/produk/');
        } else {
            $request->session()->flash('message', 'Failed saving data !');
            return redirect('/ck-admin/produk/tambah');
        }

    }





    }
}
