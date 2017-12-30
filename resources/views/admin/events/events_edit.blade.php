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
                    @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('/ck-admin/events/update'.$events->id ) }}" autocomplete="off" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Nama Event</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Event" style="text-transform:capitalize" value="{{ $events->nama }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Toko</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="toko_id">
                                        <option  value="1" @if ($events->toko_id == 1) {{ 'selected' }} @endif>Patata</option>
                                        <option  value="2" @if ($events->toko_id == 2) {{ 'selected' }} @endif>Lampung Banana Fooster</option>
                                        <option  value="3" @if ($events->toko_id == 3) {{ 'selected' }} @endif>Bosang Makasar</option>
                                        <option  value="4" @if ($events->toko_id == 4) {{ 'selected' }} @endif>Bandung Makuta</option>
                                        <option  value="5" @if ($events->toko_id == 5) {{ 'selected' }} @endif>Queen Puff</option>
                                        <option  value="6" @if ($events->toko_id == 6) {{ 'selected' }} @endif>Lapis Minang Nantigo</option>
                                        <option  value="7" @if ($events->toko_id == 7) {{ 'selected' }} @endif>Malang Struddle</option>
                                        <option  value="8" @if ($events->toko_id == 8) {{ 'selected' }} @endif>Medan Napoleon</option>
                                        <option  value="9" @if ($events->toko_id == 9) {{ 'selected' }} @endif>Surabaya Snowcake</option>
                                        <option  value="10" @if ($events->toko_id == 10) {{ 'selected' }} @endif>Solo Pluffy</option>
                                        <option  value="11" @if ($events->toko_id == 11) {{ 'selected' }} @endif>Mamahke Jogja</option>
                                        <option  value="12" @if ($events->toko_id == 12) {{ 'selected' }} @endif>Bogor Rain Cake</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-calendar-check-o"> &nbsp;</i>Tanggal Mulai</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="tanggal_mulai" id="tanggal_mulai" placeholder="Masukkan Nama Toko" style="text-transform:capitalize" value="{{ $events->tanggal_mulai }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-calendar-times-o"> &nbsp;</i>Tanggal Selesai</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="tanggal_selesai" id="tanggal_selesai" placeholder="Masukkan Nama Toko" style="text-transform:capitalize" value="{{ $events->tanggal_selesai }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Deskripsi Events</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="4" name="deskripsi" id="deskripsi" placeholder="Jalan Gebang Lor No.32, Sukolilo-Surabaya. Rumah Kost Bapak H.Aji">{{ $events->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-image"> &nbsp;</i>Gambar</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="gambar" id="gambar"  style="text-transform:capitalize" {{ $events->gambar }}>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('/ck-admin/events') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                            <input type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                        </div><!-- /.box-footer -->
                    </form>
                </div>
@endsection