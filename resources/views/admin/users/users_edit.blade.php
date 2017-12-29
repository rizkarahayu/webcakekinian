@extends('layout.admin_template')

@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'Halaman ini adalah untuk mengedit data user.')

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

                   <form class="form-horizontal" method="post" action="{{ url('/ck-admin/users/update/' .$user->id ) }}" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username Anda" style="text-transform:capitalize" value="{{ $user->username }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Anda" style="text-transform:capitalize" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" style="text-transform:capitalize" required>{{ $user->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-tty"> &nbsp;</i>No. Telepon</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon Anda" style="text-transform:capitalize" value="{{ $user->no_telp }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" style="text-transform:capitalize"  value="{{ $user->email }}" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-road"> &nbsp;</i>Role User</label>
                            <div class="col-sm-4">
                                <select name="role_id" class="form-control">
                                  <option value="1" @if ($user->role_id == 1) {{ 'selected' }} @endif>Admin</option>
                                  <option value="2" @if ($user->role_id == 2) {{ 'selected' }} @endif>Toko</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="box-footer">

                        <a href="{{ url('/ck-admin/users') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection