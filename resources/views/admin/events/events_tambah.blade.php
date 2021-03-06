@extends('layout.admin_template')

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
                    @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                  <form class="form-horizontal" method="POST" action="{{ url('/ck-admin/events/create') }}" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="modal-body">
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Nama Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Event" style="text-transform:capitalize" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Toko</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="toko_id" id="toko">
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
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-calendar-check-o"> &nbsp;</i>Tanggal Mulai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" placeholder="Masukkan Tanggal Mulai" style="text-transform:capitalize" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-calendar-times-o"> &nbsp;</i>Tanggal Selesai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="tanggal_selesai" id="tanggal_selesai" placeholder="Masukkan Tanggal Selesai" style="text-transform:capitalize" >
                            </div>
                        </div>
                         <div class="form-group">
                             <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Deskripsi Events</label>
                             <div class="col-sm-9">
                                 <textarea class="form-control" rows="4" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-image"> &nbsp;</i> Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="gambar" id="gambar"  style="text-transform:capitalize" >
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
                          <a href="{{ url('/ck-admin/events') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                        <input type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                    </div><!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection