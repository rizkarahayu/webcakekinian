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
                               <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>
                               <div class="col-sm-6">
                                   <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" readonly value="{{ $user->email }}" required>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>
                               <div class="col-sm-5">
                                   <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Anda" value="{{ $user->name }}" required>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>
                               <div class="col-sm-5">
                                   <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username Anda" value="{{ $user->username }}" required>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>
                               <div class="col-sm-6">
                                   <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" required>{{ $user->alamat }}</textarea>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No. Telepon</label>
                               <div class="col-sm-5">
                                   <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan Nomor Telepon Anda" value="{{ $user->no_telp }}" required>
                               </div>
                           </div>
                           <div class="form-group">
                               <label  for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-road"> &nbsp;</i>Role User</label>
                               <div class="col-sm-5">
                                   <select name="role_id" class="form-control">
                                       <option value="1" disabled="" selected>Pilih Role -></option>
                                       @if (count($roles) > 0)
                                           @foreach($roles as $role)
                                               <option value="{{ $role->id }}" @if($user->role_id == $role->id) {{ 'selected' }} @endif>{{ $role->role }}</option>
                                           @endforeach
                                       @endif
                                   </select>
                               </div>
                           </div>
                       </div>


                    <div class="box-footer">
                        <a href="{{ url('/ck-admin/users') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                        <button type="submit" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection