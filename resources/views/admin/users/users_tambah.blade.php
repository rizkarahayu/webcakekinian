@extends('layout.admin_template')

@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'Tambah data user')

@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
                    @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                   <form class="form-horizontal" method="POST" action="{{ url('/ck-admin/users/create') }}" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       <div class="modal-body">
                            <div class="form-group">
                               <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>
                               <div class="col-sm-5">
                                   <input type="text" class="form-control" name="name" id="name"required placeholder="Masukkan Nama Anda">
                               </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="username" id="username"required placeholder="Masukkan Username Anda" >
                                </div>
                            </div>
                           <div class="form-group">
                               <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>
                               <div class="col-sm-6">
                                   <input type="email" class="form-control" name="email" id="email"required placeholder="Masukkan Email Anda" autocomplete="nope" >
                               </div>
                           </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-lock"> &nbsp;</i>Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="password" id="password"required placeholder="Masukkan Password Anda" autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-lock"> &nbsp;</i>Konfirmasi Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="password_konfirmasi" id="password_konfirmasi"required placeholder="Masukkan Password Konfirmasi Anda" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" name="alamat" id="alamat"required placeholder="Masukkan Alamat Anda" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No. Telepon</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="no_telp" id="no_telp"required placeholder="Masukkan Nomor Telepon Anda" >
                                </div>
                            </div>

                           <div class="form-group">
                                <label  for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-road"> &nbsp;</i>Role User</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="role_id">
                                        <option value="1" disabled="" selected>Pilih Role -></option>
                                        @if (count($roles) > 0)
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="box-footer">
                       <a href="{{ url('/ck-admin/users') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                        <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </div><!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection