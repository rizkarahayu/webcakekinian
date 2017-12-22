@extends('layout.admin_template')

@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'Halaman ini adalah untuk mengedit data toko.')


@section('content')
<div class="row">
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
                  <form class="form-horizontal" action="" autocomplete="off" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Toko</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Toko" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">SIUP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="siup" id="siup" placeholder="Masukkan Nomor SIUP" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">NPWP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Masukkan Nomor NPWP" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nomor Rekening</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="norek" id="norek" placeholder="Masukkan Nomor Rekening" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">
                        <button data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</button>
                        <button type="button" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection