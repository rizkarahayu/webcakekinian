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

                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                           <th>No.</th>
                           <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Detail</th>
                            <th>Status Aktif</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (count($customers) > 0)
                                @foreach($customers as $i => $customer)
                                    <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $customer->users->name }}</td>
                                          <td>{{ $customer->users->email }}</td>
                                          <td>{{ $customer->users->alamat }}</td>
                                          <td>{{ $customer->users->no_telp }}</td>
                                          <td><button type="button" class="btn btn-info" onclick="getDetailCustomer({{ $customer->id }})" data-toggle="modal" data-target="#myModal">Details</button></td>
                                          <td>
                                              @if ($customer->users->status_active == 1)
                                                  <label class="label label-success"><span class="fa fa-check"></span> Aktif</label>
                                              @else
                                                  <label class="label label-danger"><span class="fa fa-lock"></span> Blocked</label>
                                              @endif
                                          </td>
                                            <td>

                                                @if ($customer->users->status_active == 1)
                                                    <a onclick="actionChangeStatus(event, 'block', '{{ $customer->id }}');" class="btn btn-danger"><span class="glyphicon glyphicon-lock"></span> Block</a>
                                                @else
                                                    <a onclick="actionChangeStatus(event, 'unblock', '{{ $customer->id }}');" class="btn btn-success"><span class="fa fa-unlock-alt"></span> Unblock</a>
                                                @endif
                                            </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>{{ \App\GeneralFunction::$EMPTY_DATA_MESSAGE }}</td>
                                </tr>
                            @endif

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

@section('custom_js')
    @include('admin.customer._js')
@endsection


