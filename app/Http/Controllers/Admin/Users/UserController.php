<?php

namespace App\Http\Controllers\Admin\Users;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('admin.users.users', compact('users'));
    }

    public function tambah(){
        return view('admin.users.users_tambah');
    }

    public function edit($id){
        $user   = User::find($id);

        return view('admin.users.users_edit', compact('user'));
    }

    public function store(Request $request) {
        $form   = $request->input();

        $rules      = User::$validation_rules;
        $validate   = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/users/tambah');
        }

        $form['created_at']     = Carbon::now()->toDateTimeString();
        $form['updated_at']     = Carbon::now()->toDateTimeString();
//            return response()->json($form);

        if ($form['password'] != $form['password_konfirmasi']) {
            $request->session()->flash('message', 'Password konfirmasi not valid');
            return redirect('/ck-admin/users/tambah');
        }

        $users = new User();
        $users->name        = $form['name'];
        $users->email       = $form['email'];
        $users->password    = bcrypt($form['password']);
        $users->username    = $form['username'];
        $users->alamat      = $form['alamat'];
        $users->no_telp     = $form['no_telp'];
        $users->role_id     = $form['role_id'];
        $users->created_at        = $form['created_at'];
        $users->updated_at        = $form['updated_at'];
        $users->save();

        if ($users) {
            $request->session()->flash('message', 'Success saving data !');
            return redirect('/ck-admin/users/');
        } else {
            $request->session()->flash('message', 'Failed saving data !');
            return redirect('/ck-admin/users/tambah');
        }

    }

    public function update(Request $request, $id) {
        $form   = $request->input();

        $rules      = User::$validation_rules;
        unset($rules['password']);
        $validate   = Validator::make($form, $rules);

        if ($validate->fails()) {
            $request->session()->flash('message', 'Validation Error');
            return redirect('/ck-admin/users/edit/' . $id);
        }
        $form['updated_at']     = Carbon::now()->toDateTimeString();

        $users = User::find($id);
        $users->name        = $form['name'];
        $users->email        = $form['email'];
        $users->username        = $form['username'];
        $users->alamat        = $form['alamat'];
        $users->no_telp        = $form['no_telp'];
        $users->role_id        = $form['role_id'];
        $users->updated_at        = $form['updated_at'];
        $users->save();

        if ($users) {
            $request->session()->flash('message', 'Success editing data !');
            return redirect('/ck-admin/users/');
        } else {
            $request->session()->flash('message', 'Failed editing data !');
            return redirect('/ck-admin/users/edit/' . $id);
        }

    }

    public function delete(Request $request, $id) {
        $user   = User::find($id);
        $user->delete();

        if ($user) {
            $request->session()->flash('message', 'Success deleting data !');
            return redirect('/ck-admin/users/');
        } else {
            $request->session()->flash('message', 'Failed deleting data !');
            return redirect('/ck-admin/users/');
        }
    }
}
