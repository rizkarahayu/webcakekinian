@extends('layout.admin_template')

@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'adalah data yang berisi tentang toko.')


@section('content')
<div class="row">
@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'adalah data yang berisi tentang toko.')
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
                  <form class="form-horizontal" method="POST" action="{{ url('/ck-admin/toko/create') }}" autocomplete="off" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-industry"> &nbsp;</i>Nama Toko</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Toko" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-cc-amex"> &nbsp;</i>SIUP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="siup" id="siup" placeholder="Masukkan Nomor SIUP" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-credit-card-alt"> &nbsp;</i>NPWP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Masukkan Nomor NPWP" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-building"> &nbsp;</i>Nama Kota</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="kota" id="kota" placeholder="Masukkan Nama Kota" style="text-transform:capitalize" required>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Bank</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Masukkan Nomor Rekening" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-credit-card"> &nbsp;</i>Nomor Rekening</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="no_rek" id="no_rek" placeholder="Masukkan Nomor Rekening" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">
                        <a href="{{ url('/ck-admin/toko') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                        <input type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection