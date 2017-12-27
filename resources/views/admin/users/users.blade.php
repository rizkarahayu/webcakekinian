@extends('layout.admin_template')

@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'adalah data yang berisi tentang user.')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-user-circle"></i> Data Master</a></li>
    <li class="active">Users</li>
    
@endsection

@section('content')
    <div class="row">
@section('title', 'Data User')
@section('page_title', 'Data User')
@section('page_description', 'adalah data yang berisi tentang user.')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{url('ck-admin/users/tambah')}}">
                  <button class='btn bg-purple flat'><span class='fa fa-plus-circle'></span> Tambah User</button>
              </a>
                    
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>Nama</th>
                 <th>Username</th>
                 <th>Email</th>
                 <th>Detail</th>
                 <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                        <td>  <a href="{{url('ck-admin/users/edit')}}" class="btn btn-warning">
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
                    <center><legend>Details User</legend></center>
                <div class="box box-info">
            <form class="form-horizontal">
              <div class="box-body">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Id User</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="1">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-card"> &nbsp;</i>Nama User</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="nadila">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o"> &nbsp;</i>Username</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="nadila">
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
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Email</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="nadilawh0@gmail.com">
                  </div>
                </div>
                                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-road"> &nbsp;</i>Role Id </label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="1">
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
@endsection