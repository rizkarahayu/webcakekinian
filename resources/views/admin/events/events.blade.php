@extends('layout.admin_template')

@section('title', 'Data Events')
@section('page_title', 'Data Events')
@section('page_description', 'adalah data yang berisi tentang events.')


@section('content')
    <div class="row">
@section('title', 'Data Events')
@section('page_title', 'Data Events')
@section('page_description', 'adalah data yang berisi tentang events.')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                   <a href="{{url('ck-admin/events/tambah')}}">
                  <button class='btn bg-purple flat'><span class='fa fa-plus-circle'></span> Tambah Data</button>
              </a>
                    
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Nama Event</th>
                  <th>Nama Toko</th>
                  <th>Tanggal</th>
                  <th>Detail</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>Blablabla</td>
                  <td>Patata</td>
                  <td>29/10/2017</td>
                  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                  <td>  <a href="." class="btn btn-warning">
                      <i class="fa fa-pencil"></i>
                  </a>
                      <a class="btn btn-danger" onclick="">
                      <i class="fa fa-trash"></i>
                      </a>
                    </td>
                </tr>
                 </tbody>
              </table>
             <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-md-12 col-md-offset-0">
                  <form action='' method='POST' class="form-horizontal" role="form">
                    <fieldset>
                    <center><legend>Details Events</legend></center>
                <div class="box box-info">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="row">
                  <div class="form-group">
                  <div class=".col-sm-4 .col-sm-pull-4">
                    <div class="image text-center">
                        <img src="{{ url('img/logo.PNG') }}" style="max-width:200px">
                    </div>
                  </div>
                  </div>
                 <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Nama Event</label>
                  <div class="col-md-4">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="082285698889">
                  </div>
                </div>
                 <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Mulai</label>
                  <div class="col-md-4">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="082285698889">
                  </div>
                </div>
                <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Selesai</label>
                  <div class="col-md-4">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="082285698889">
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi Events</label>
                  <div class="col-sm-9">
                   <textarea class="form-control" rows="4" disabled placeholder="Jalan Gebang Lor No.32, Sukolilo-Surabaya. Rumah Kost Bapak H.Aji"></textarea>
                  </div>
                </div>
                </div>
                        </form>
                      </div>
                      </fieldset>
                     </form>
                    </div>
                    </div>
                    </div>
                  </div>
                 </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection