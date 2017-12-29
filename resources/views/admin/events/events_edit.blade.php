@extends('layout.admin_template')

@section('title', 'Data Events')
@section('page_title', 'Data Events')
@section('page_description', 'Halaman ini adalah untuk mengedit data events.')


@section('content')
    <div class="row">
@section('title','halaman test')
@section('page_title','halaman test')
@section('page_description','Halaman ini adalah untuk mengedit data events.')
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
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Nama Event</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="Masukkan Nama Event" style="text-transform:capitalize" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Toko</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="Masukkan Nama Event" style="text-transform:capitalize" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-calendar-check-o"> &nbsp;</i>Tanggal Mulai</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Masukkan Nama Toko" style="text-transform:capitalize" required>
                            </div>
                        </div>
                            <div class="form-group">
                             <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-calendar-times-o"> &nbsp;</i>Tanggal Selesai</label>
                          <div class="col-md-4">
                            <input type="password" class="form-control" id="inputPassword3" disabled placeholder="082285698889">
                          </div>
                        </div>
                         <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Deskripsi Events</label>
                  <div class="col-sm-9">
                   <textarea class="form-control" rows="4" disabled placeholder="Jalan Gebang Lor No.32, Sukolilo-Surabaya. Rumah Kost Bapak H.Aji"></textarea>
                  </div>
                </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-image"> &nbsp;</i>Gambar</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="gambar" id="gambar"  style="text-transform:capitalize" required>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ url('/ck-admin/events') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                        <button type="button" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection