<?php

namespace App\Http\Controllers\Admin\Toko;

use App\Model\Master\Toko;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\GeneralFunction;


class TokoController extends Controller
{
     public function index(){
        $toko  = app('toko')->get();
        return view('admin.toko.toko', compact('toko'));
    }
    public function tambah(){
        return view('admin.toko.toko_tambah');
    }
    public function edit($id){
        $toko   = app('toko')->getById($id);
       
        return view('admin.toko.toko_edit', compact(['toko']));

    }

    public function store(Request $request){
        $form_user   = $request->all();
        $form_toko   = $request->all();
        $rules_user  = User::$validation_rules;
        $rules_toko  = Toko::$validation_rules;

        if (app('users')->isEmailExists($form_user['email'])){
            $request->session()->flash('message', GeneralFunction::$EMAIL_EXIST_MESSAGE);
            return redirect('/ck-admin/toko/tambah');
        }

        if ($form_user['password'] != $form_user['password_konfirmasi']) {
            $request->session()->flash('message', GeneralFunction::$PASSWORD_CONFIRM_NOTVALID_MESSAGE);
            return redirect('/ck-admin/toko/tambah');
        }
        unset($form_user['password_konfirmasi'], $form_user['kota'], $form_user['siup'], $form_user['npwp'], $form_user['no_rek'], $form_user['nama_bank']);
        unset($form_toko['password_konfirmasi'], $form_toko['name'], $form_toko['username'], $form_toko['email'], $form_toko['password'], $form_toko['alamat'], $form_toko['no_telp'], $form_toko['gambar']);

        $form_user['role_id']   = 2;
        $form_user['status_active'] = 1;

        if (@$form_user['gambar'] != '') {
            $extension  = $request->file('gambar')->getClientOriginalExtension();

            if ($extension == 'jpg' || $extension == 'png'  || $extension == 'jpeg'
                || $extension == 'svg' || $extension == 'gif' ) {

                $name   = $form_user['name'] . date('-d_m_Y-h_i_s');
                $request->file('gambar')->move('img/users/', $name . '.' . $extension);
                $form_user['gambar']    = $name. '.' . $extension;
            } else {
                $request->session()->flash('message', GeneralFunction::$IMAGE_NOT_VALID_MESSAGE);
                return redirect('/ck-admin/toko/tambah');
            }
        } else {
            $form_user['gambar']    = '';
        }

        $create_user    = app('users')->create($form_user, $rules_user);

        if ($create_user) {
            $form_toko['users_id']  = $create_user['data']['id'];
            $form_toko['nama']      = $form_user['name'];

            $create_toko    = app('toko')->create($form_toko, $rules_toko);
            $request->session()->flash('message', $create_toko['message']);
            
            if (!$create_toko)
                return redirect('/ck-admin/toko/tambah');
            else
                return redirect('/ck-admin/toko/');
        } else {
            $request->session()->flash('message', $create_user['message']);
            return redirect('/ck-admin/toko/tambah');
        }
    }

    public function update(Request $request, $id) {
        $form   = $request->input();
        $rules  = Toko::$validation_rules;

        unset($rules['password']);

        $update = app('toko')->update($form, $rules, $id);
        $request->session()->flash('message', $update['message']);

        if (!$update)
            return redirect('/ck-admin/toko/edit/' . $id);

        return redirect('/ck-admin/toko/');
    }


    public function delete(Request $request, $id) {
        $toko           = Toko::where('id', $id)->first();
        $delete_cascade = $toko->users()->delete();

        if ($delete_cascade) {
            $delete         = app('toko')->delete($id);
            $request->session()->flash('message', $delete['message']);
        }

        return redirect('/ck-admin/toko/');
    }

}
