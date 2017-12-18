@extends('layout.admin_template')

@section('title', 'Data Events')
@section('page_title', 'Data Events')
@section('page_description', 'adalah data yang berisi tentang events.')


@section('content')
    <div class="row">
@section('title', 'Data Events')
@section('page_title', 'Data Events')
@section('page_description', 'adalah data yang berisi tentang events.')
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
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="Masukkan Nama Event" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Toko</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Masukkan Nama Toko" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tempat</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Masukkan Tempat Event" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Event" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan" style="text-transform:capitalize" required></textarea>
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