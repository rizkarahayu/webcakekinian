@extends('layout.admin_template')

@section('title', 'Data Produk')
@section('page_title', 'Data Produk')
@section('page_description', 'Halaman ini adalah untuk mengedit data produk.')


@section('content')
    <div class="row">
@section('title','halaman test')
@section('page_title','halaman test')
@section('page_description','Halaman ini adalah untuk mengedit data produk.')
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
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-birthday-cake"> &nbsp;</i>Nama Produk</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk" style="text-transform:capitalize" required>
                            </div>
                        </div>
                           <div class="form-group">
                            <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Toko</label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                  <option nama="toko" value="1">WingkoRolls</option>
                                  <option nama="toko" value="2">Savana Cake</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-hourglass-2"> &nbsp;</i>Stok</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan Jumlah Stok" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-money"> &nbsp;</i>Harga</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Produk" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-newspaper-o"> &nbsp;</i>Deskripsi</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-money"> &nbsp;</i>Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Produk" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">

                        <a href="{{ url('/ck-admin/produk') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                        <button type="button" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection