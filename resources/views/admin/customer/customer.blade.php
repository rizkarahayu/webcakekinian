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
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                           <th>No.</th>
                           <th>Username</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Detail</th>
                            <th>Status Aktif</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $i => $customer)
                                <tr>
                                      <td>{{++$i}}</td>
                                      <td>{{$customer->user->username}}</td>
                                      <td>{{$customer->tgl_lahir}}</td>
                                      <td>{{$customer->jklm}}</td>
                                      <td>{{$customer->no_rek}}</td>
                                      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                                      <td>
                                          @if ($customer->user->status_active == 1)
                                              <label class="label label-success"><span class="fa fa-check"></span> Aktif</label>
                                          @else
                                              <label class="label label-danger"><span class="fa fa-lock"></span> Blocked</label>
                                          @endif
                                      </td>
                                        <td>

                                            @if ($customer->user->status_active == 1)
                                                <a data-dismiss="modal" class="btn btn-danger"><span class="glyphicon glyphicon-lock"></span> Block</a>
                                            @else
                                                <a data-dismiss="modal" class="btn btn-success"><span class="fa fa-check"></span> Unblock</a>
                                            @endif
                                        </td>
                                </tr>
                            @endforeach
                         </tbody>
                      </table>
                </div>
            </div>
        </div>
</div>

@endsection

@section('modal')
    @include('admin.customer._modal_detail')
@endsection


