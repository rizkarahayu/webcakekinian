@extends('layout.admin_template')

@section('title', 'Data Produk')
@section('page_title', 'Data Produk')
@section('page_description', 'adalah data yang berisi tentang produk.')

@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="pull-left">
                        {{--<span class="">Tambah data user</span>--}}
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('ck-admin/produk') }}">
                            <button class='btn btn-default flat'><span class='fa fa-arrow-left'></span> Back</button>
                        </a>
                    </div>
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
                                    <option value="1" disabled="" selected>Pilih Toko -></option>
                                    @if (count($tokos) > 0)
                                        @foreach($tokos as $toko)
                                            <option value="{{ $toko->id }}">{{ $toko->nama }}</option>
                                        @endforeach
                                    @endif
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
                                <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" style="text-transform:capitalize"></textarea>
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

                        <a href="{{ url('ck-admin/produk') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                       <button type="submit" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection