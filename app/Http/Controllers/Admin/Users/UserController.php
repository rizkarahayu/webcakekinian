<?php

namespace App\Http\Controllers\Admin\Users;

use App\GeneralFunction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $users  = app('users')->get();

        return view('admin.users.users', compact('users'));
    }

    public function tambah(){;
        $roles  = app('role_users')->get();

        return view('admin.users.users_tambah', compact('roles'));
    }

    public function edit($id){
        $user   = app('users')->getById($id);
        $roles  = app('role_users')->get();

        return view('admin.users.users_edit', compact(['user', 'roles']));
    }

    public function store(Request $request) {
        $form   = $request->input();
        $rules  = User::$validation_rules;

        if (app('users')->isEmailExists($form['email'])){
            $request->session()->flash('message', GeneralFunction::$EMAIL_EXIST_MESSAGE);
            return redirect('/ck-admin/users/tambah');
        }

        if ($form['password'] != $form['password_konfirmasi']) {
            $request->session()->flash('message', GeneralFunction::$PASSWORD_CONFIRM_NOTVALID_MESSAGE);
            return redirect('/ck-admin/users/tambah');
        }
        unset($form['password_konfirmasi']);

        $create         = app('users')->create($form, $rules);
//        $sendToEmail    = app('users')->sendToEmail($form);

        $request->session()->flash('message', $create['message']);

        if (!$create)
            return redirect('/ck-admin/users/tambah');

        return redirect('/ck-admin/users/');
    }

    public function update(Request $request, $id) {
        $form   = $request->input();
        $rules  = User::$validation_rules;

        unset($rules['password']);

        $update = app('users')->update($form, $rules, $id);
        $request->session()->flash('message', $update['message']);

        if (!$update)
            return redirect('/ck-admin/users/edit/' . $id);

        return redirect('/ck-admin/users/');
    }

    public function delete(Request $request, $id) {
        $delete = app('users')->delete($id);
        $request->session()->flash('message', $delete['message']);

        return redirect('/ck-admin/users/');
    }
}
