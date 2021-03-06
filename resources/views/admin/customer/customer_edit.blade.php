@extends('layout.admin_template')

@section('title', 'Data Customer')
@section('page_title', 'Data Customer')
@section('page_description', 'Halaman ini adalah untuk mengedit data customer.')


@section('content')
<div class="row">
@section('title', 'Data Customer')
@section('page_title', 'Data Customer')
@section('page_description', 'Halaman ini adalah untuk mengedit data customer.')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                   
                    
                </div>
                <div class="box-body">
                   <form class="form-horizontal" action="" autocomplete="off" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username Anda" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Anda" style="text-transform:capitalize" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-road"> &nbsp;</i>Jenis Kelamin</label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                  <option nama="jk" value="Islam">Laki-Laki</option>
                                  <option nama="jk" value="Kristen">Perempuan</option>
                                </select>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-tty"> &nbsp;</i>No. Telepon</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Masukkan Nomor Telepon Anda" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" style="text-transform:capitalize" required>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir Anda" style="text-transform:capitalize" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama Bank</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Masukkan Nama Bank Anda" style="text-transform:capitalize" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nomor Rekening</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="norek" id="norek" placeholder="Masukkan Nomor Rekening Anda" style="text-transform:capitalize" required>
                            </div>
                        </div>
                      
                        
                    </div>
                    <div class="box-footer">

                        <a href="{{ url('/ck-admin/customer') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                        <button type="button" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection