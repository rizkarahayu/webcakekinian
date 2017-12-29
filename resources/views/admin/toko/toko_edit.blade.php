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
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-industry"> &nbsp;</i>Nama Toko</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Toko" value="{{ $toko->nama }}" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-cc-amex"> &nbsp;</i>SIUP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="siup" id="siup" placeholder="Masukkan Nomor SIUP" style="text-transform:capitalize" value="{{ $toko->siup }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-credit-card-alt"> &nbsp;</i>NPWP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Masukkan Nomor NPWP" style="text-transform:capitalize" value="{{ $toko->npwp }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-building"> &nbsp;</i>Nama Kota</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="kota" id="kota" placeholder="Masukkan Nama Kota" style="text-transform:capitalize" value="{{ $toko->kota }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Bank</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Masukkan Nomor Rekening" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-credit-card"> &nbsp;</i>Nomor Rekening</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="norek" id="norek" placeholder="Masukkan Nomor Rekening" style="text-transform:capitalize" value="{{ $toko->no_rek }}" required>
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