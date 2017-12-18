@extends('layout.admin_template')

@section('title', 'Data Produk')
@section('page_title', 'Data Produk')
@section('page_description', 'adalah data yang berisi tentang produk.')


@section('content')
    <div class="row">
@section('title','halaman test')
@section('page_title','halaman test')
@section('page_description','Ini adalah halaman test')
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
                                <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Toko</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Masukkan Nama Toko" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Stok</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan Nomor Stok" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Produk" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" style="text-transform:capitalize" required>
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