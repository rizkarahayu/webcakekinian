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
                    @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                 <div class="box-body">
                  <form class="form-horizontal" method="POST" action="{{ url('/ck-admin/produk/update/' .$produk->id ) }}" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-birthday-cake"> &nbsp;</i>Nama Produk</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Produk" style="text-transform:capitalize" value="{{ $produk->nama }}"  required>
                            </div>
                        </div>
                           <div class="form-group">
                            <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Toko</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="toko_id">
                                    <option  value="1" @if ($produk->toko_id == 1) {{ 'selected' }} @endif>Patata</option>
                                    <option  value="2" @if ($produk->toko_id == 2) {{ 'selected' }} @endif>Lampung Banana Fooster</option>
                                    <option  value="3" @if ($produk->toko_id == 3) {{ 'selected' }} @endif>Bosang Makasar</option>
                                    <option  value="4" @if ($produk->toko_id == 4) {{ 'selected' }} @endif>Bandung Makuta</option>
                                    <option  value="5" @if ($produk->toko_id == 5) {{ 'selected' }} @endif>Queen Puff</option>
                                    <option  value="6" @if ($produk->toko_id == 6) {{ 'selected' }} @endif>Lapis Minang Nantigo</option>
                                    <option  value="7" @if ($produk->toko_id == 7) {{ 'selected' }} @endif>Malang Struddle</option>
                                    <option  value="8" @if ($produk->toko_id == 8) {{ 'selected' }} @endif>Medan Napoleon</option>
                                    <option  value="9" @if ($produk->toko_id == 9) {{ 'selected' }} @endif>Surabaya Snowcake</option>
                                    <option  value="10" @if ($produk->toko_id == 10) {{ 'selected' }} @endif>Solo Pluffy</option>
                                    <option  value="11" @if ($produk->toko_id == 11) {{ 'selected' }} @endif>Mamahke Jogja</option>
                                    <option  value="12" @if ($produk->toko_id == 12) {{ 'selected' }} @endif>Bogor Rain Cake</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-hourglass-2"> &nbsp;</i>Stok</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="stock" id="stock" placeholder="Masukkan Jumlah Stok" style="text-transform:capitalize" value="{{ $produk->stock }}" required>
                            </div>
                        </div>
                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-money"> &nbsp;</i>Stok</label>
                              <div class="col-sm-4">
                                  <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Jumlah Stok" style="text-transform:capitalize" value="{{ $produk->stock }}" required>
                              </div>
                          </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-newspaper-o"> &nbsp;</i>Deskripsi</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" style="text-transform:capitalize" required>{{ $produk->deskripsi }}</textarea>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-money"> &nbsp;</i>Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Masukkan Harga Produk" style="text-transform:capitalize" value="{{ $produk->gambar }}" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">

                        <a href="{{ url('/ck-admin/produk') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection