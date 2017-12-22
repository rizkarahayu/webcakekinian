@extends('layout.admin_template')

@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'Halaman ini adalah untuk mengedit data user.')


@section('content')
    <div class="row">
@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'Halaman ini adalah untuk mengedit data user.')
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
                            <label for="inputEmail3" class="col-sm-2 control-label">NRP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Input nrp" style="text-transform:capitalize" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="nama_mhs" placeholder="Input nama" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Input kelas" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-4">
                                <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Input alamat" style="text-transform:capitalize" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">No. Telepon</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Input notelp" style="text-transform:capitalize" required>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="foto" id="foto" placeholder="Input foto" style="text-transform:capitalize" required>
                            </div>
                        </div> -->
                        
                    </div>
                    <div class="box-footer">
                        <button data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</button>
                        <button type="button" class="btn btn-primary pull-right flat" id="insert"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div><!-- /.box-footer -->
                </form>
    </div>
@endsection