@extends('layout.admin_template')

@section('title', 'Data Customer')
@section('page_title', 'Data Customer')
@section('page_description', 'adalah data yang berisi tentang customer.')


@section('breadcrumb')
    <li><a href="#"><i class="fa fa-user-plus"></i> Data Master</a></li>
    <li class="active">Customers</li>
    
@endsection

@section('content')
    <div class="row">
@section('title','Data Customer')
@section('page_title','Data Customer')
@section('page_description','adalah data yang berisi tentang customer.')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                   <th>Username</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Detail</th>
                    <th>Block</th>
                    <th>Unblock</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                <tr>
                  <td>{{$customer->user->username}}</td>
                  <td>{{$customer->tgl_lahir}}</td>
                  <td>{{$customer->jklm}}</td>
                  <td>{{$customer->no_rek}}</td>
                  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                  <td> <a data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-lock"></span></a>
                  <td> <a data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-user"></span></a>
              
                  
                    </td>
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
                    <center><legend>Details Customer</legend></center>
                <div class="box box-info">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Id Customer</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="1">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="nadilawh">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Nadila Wirdatul Hidayah">
                  </div>
                </div>
                                     <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-mars"></i><i class="fa fa-venus"> &nbsp;</i>Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Perempuan">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>

                  <div class="col-sm-10">
                   <textarea class="form-control" rows="4" disabled placeholder="Jalan Gebang Lor No.32, Sukolilo-Surabaya. Rumah Kost Bapak H.Aji"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-tty"> &nbsp;</i>No Telepon</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="082285698889">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="nadilawh@gmail.com">
                  </div>
                </div>
                                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-calendar"> &nbsp;</i>Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="22 Maret 1998">
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Bank</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Mandiri">
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-credit-card"> &nbsp;</i>Nomor Rekening</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="140-393-89282">
                  </div>
                </div>

                  <a href="{{ url('/ck-admin/customer') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
              
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