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
                    @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                  <form class="form-horizontal" method="POST" action="{{ url('/ck-admin/produk/create') }}" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-birthday-cake"> &nbsp;</i>Nama Produk</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Produk" style="text-transform:capitalize">
                            </div>
                        </div>
                           <div class="form-group">
                            <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Toko</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="toko_id">
                                  <option  value="1">Patata</option>
                                  <option  value="2">Lampung Banana Fooster</option>
                                  <option  value="3">Bosang Makasar</option>
                                  <option  value="4">Bandung Makuta</option>
                                  <option  value="5">Queen Puff</option>
                                  <option  value="6">Lapis Minang Nantigo</option>
                                  <option  value="7">Malang Struddle</option>
                                  <option  value="8">Medan Napoleon</option>
                                  <option  value="9">Surabaya Snowcake</option>
                                  <option  value="10">Solo Pluffy</option>
                                  <option  value="11">Mamahke Jogja</option>
                                  <option  value="12">Bogor Rain Cake</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-hourglass-2"> &nbsp;</i>Stok</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="stock" id="stock" placeholder="Masukkan Jumlah Stok" style="text-transform:capitalize">
                            </div>
                        </div>
                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-money"> &nbsp;</i>Harga</label>
                              <div class="col-sm-4">
                                  <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Jumlah Stok" style="text-transform:capitalize">
                              </div>
                          </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-newspaper-o"> &nbsp;</i>Deskripsi</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" style="text-transform:capitalize"></textarea>
                            </div>
                        </div>
                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-image"> &nbsp;</i>Foto Profil</label>
                              <div class="col-sm-5">
                                  <input type="file" class="" name="gambar" id="gambar" required>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label"></label>
                          <div class="col-sm-4">
                              <img src="{{ url('img/noimage.jpg') }}" id="gambar_preview" width="100%">
                          </div>
                      </div>
                    <div class="box-footer">

                        <a href="{{ url('/ck-admin/produk') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                       <button type="submit" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection