@extends('layout.admin_template')

@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'adalah data yang berisi tentang user.')


@section('content')
    <div class="row">
@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'adalah data yang berisi tentang user.')
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
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username Anda" style="text-transform:capitalize" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-lock"> &nbsp;</i>Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda" style="text-transform:capitalize" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-lock"> &nbsp;</i>Konfirmasi Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password_konfirmasi" id="password_konfirmasi" placeholder="Masukkan Password Konfirmasi Anda" style="text-transform:capitalize" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Anda" style="text-transform:capitalize" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" style="text-transform:capitalize" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-tty"> &nbsp;</i>No. Telepon</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon Anda" style="text-transform:capitalize" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" style="text-transform:capitalize" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-road"> &nbsp;</i>Role User</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="role_id">
                                  <option value="1">Admin</option>
                                  <option value="2">Toko</option>
                                </select>
                            </div>
                        </div>
                      
                        
                    </div>
                    <div class="box-footer">
                       <button data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</button>
                        <input type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                    </div><!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection