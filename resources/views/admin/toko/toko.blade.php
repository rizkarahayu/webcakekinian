@extends('layout.admin_template')

@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'adalah data yang berisi tentang toko.')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-institution"></i> Data Master</a></li>
    <li class="active">Toko</li>
    
@endsection

@section('content')
    <div class="row">@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'adalah data yang berisi tentang toko.')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{url('ck-admin/toko/tambah')}}">
                  <button class='btn bg-purple flat'><span class='fa fa-plus-circle'></span> Tambah Data</button>
              </a>
                    
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Nama Kota</th>
                  <th>NPWP</th>
                  <th>Details</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                    @foreach($toko as $tokos)
                <tr>
                  <td>{{ $tokos->nama}}</td>
                  <td>{{ $tokos->siup}}</td>
                  <td>{{ $tokos->npwp}}</td>
                  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                  <td>  <a href="{{url('ck-admin/toko/edit')}}" class="btn btn-warning">
                      <i class="fa fa-pencil"></i>
                  </a>
                      <a class="btn btn-danger" onclick="">
                      <i class="fa fa-trash"></i>
                    </a></td>
                </tr>
                    @endforeach
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
                    <center><legend>Details Toko</legend></center>
                <div class="box box-info">
            <form class="form-horizontal">
              <div class="box-body">
                  <div class="form-group">
                  <div class="image text-center">
                        <img src="{{ url('img\admin\logo\banana_foster.jpg') }}" style="max-width:200px">
                    </div>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Id Toko</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="1">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Nama Toko</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Savana Cake">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>SIUP</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="97987">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>NPWP</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="64564">
                  </div>
                </div>
                                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama Kota</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Banyuwangi">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>

                  <div class="col-sm-10">
                   <textarea class="form-control" rows="4" disabled placeholder="Jalan Gebang Lor No.32, Sukolilo-Banyuwangi"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Bank</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="BRI">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Nomor Rekening </label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="27857151641">
                  </div>
                </div>

                  <a href="{{ url('/ck-admin/toko') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                               
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
@endsection