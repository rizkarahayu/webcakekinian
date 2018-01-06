@extends('layout.admin_template')

@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'Halaman ini adalah untuk mengedit data toko.')

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
                  <form class="form-horizontal" method="post" action="{{ url('/ck-admin/toko/update/' .$toko->id ) }}" autocomplete="off" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" id="name" value="{{ $toko->nama }}" required placeholder="Masukkan Nama Toko">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="username" id="username"  value="{{ $toko->users->username }}" required placeholder="Masukkan Username" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email" id="email" value="{{ $toko->users->email }}" required placeholder="Masukkan Email " readonly="" autocomplete="nope" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-building"> &nbsp;</i>Nama Kota</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" name="kota" id="kota" style="width: 100%;">
                                    <option selected="selected">Pilih Kota -></option>
                                    @if (count($kota) > 0)
                                        @for($i = 0; $i < count($kota); $i++)
                                            <option value="{{ $kota[$i] }}"
                                            @if($toko->kota == $kota[$i])
                                                {{ 'selected' }}
                                                    @endif>
                                                {{ $kota[$i] }}
                                            </option>
                                        @endfor
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>
                            <div class="col-sm-6">
                                <textarea type="text" class="form-control" name="alamat" id="alamat" required placeholder="Masukkan Alamat Anda" >{{ $toko->users->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No. Telepon</label>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="{{ $toko->users->no_telp }}" required data-inputmask='"mask": "+62-999-9999-9999"' data-mask>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-cc-amex"> &nbsp;</i>SIUP</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="siup" id="siup" value="{{ $toko->siup }}" placeholder="Masukkan Nomor SIUP"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-credit-card-alt"> &nbsp;</i>NPWP</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="npwp" id="npwp"  value="{{ $toko->npwp }}" placeholder="Masukkan Nomor NPWP"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Bank</label>
                            <div class="col-sm-5">
                                <select class="form-control select2" name="nama_bank" id="nama_bank" style="width: 100%;">
                                    <option selected="selected">Pilih Bank -></option>
                                    @if (count($bank) > 0)
                                        @for($i = 0, $value = $bank['data']; $i < count($bank['data']); $i++)
                                            <option value="{{ $value[$i]['name'] }}"
                                                    @if($toko->nama_bank == $value[$i]['name'])
                                                        {{ 'selected' }}
                                                    @endif>
                                                {{ $value[$i]['name'] }}
                                            </option>
                                        @endfor
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-credit-card"> &nbsp;</i>Nomor Rekening</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="no_rek" id="no_rek" value="{{ $toko->no_rek }}" placeholder="Masukkan Nomor Rekening"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-image"> &nbsp;</i>Foto Profil</label>
                            <div class="col-sm-5">
                                <input type="file" class="" name="gambar" id="gambar" value="{{ $toko->users->gambar }}"><span class="label label-default">{{ $toko->users->gambar }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-4">
                                <img src="{{ asset('img/users/' . $toko->users->gambar) }}" id="gambar_preview" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ url('/ck-admin/toko') }}" data-dismiss="modal" class="btn btn-default flat"><span class="fa fa-chevron-left"></span> Back</a>
                        <button type="submit" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    @include('admin.toko._js')
@endsection