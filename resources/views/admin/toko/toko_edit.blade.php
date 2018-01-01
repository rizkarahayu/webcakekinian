@extends('layout.admin_template')

@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'Halaman ini adalah untuk mengedit data toko.')

@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    
                </div>

                <div class="box-body">
                  <form class="form-horizontal" method="post" action="{{ url('/ck-admin/toko/update/' .$toko->id ) }}" autocomplete="off" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" id="name" required placeholder="Masukkan Nama Toko">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="username" id="username"required placeholder="Masukkan Username" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email" id="email"required placeholder="Masukkan Email " readonly="" autocomplete="nope" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-building"> &nbsp;</i>Nama Kota</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="kota" id="kota" placeholder="Masukkan Nama Kota"  required>
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
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-cc-amex"> &nbsp;</i>SIUP</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="siup" id="siup" placeholder="Masukkan Nomor SIUP"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-credit-card-alt"> &nbsp;</i>NPWP</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Masukkan Nomor NPWP"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Bank</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Masukkan Nomor Rekening"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-credit-card"> &nbsp;</i>Nomor Rekening</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="no_rek" id="no_rek" placeholder="Masukkan Nomor Rekening"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-image"> &nbsp;</i>Foto Profil</label>
                            <div class="col-sm-5">
                                <input type="file" class="" name="gambar" id="gambar" required>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ url('/ck-admin/toko') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                       <button type="button" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection