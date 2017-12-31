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
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{url('ck-admin/users/tambah')}}">
              <button class='btn bg-purple flat'><span class='fa fa-plus-circle'></span> Tambah User</button>
          </a>

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
                             <th>Username</th>
                             <th>Email</th>
                             <th>Detail</th>
                             <th>#</th>
                        </tr>
                    </thead>
                    <tbody>

                    @if (count($users) > 0)
                        @foreach($users as $i => $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="getDetailUser({{ $user->id }})">Details</button></td>
                                <td>
                                    <a href="{{url('ck-admin/users/edit/' . $user->id)}}" class="btn btn-warning">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" onclick="actionDelete(event, '{{ $user->id }}');">
                                        <i class="fa fa-trash"></i>
                                    </button>
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
    @include('admin.users._modal_detail')
@endsection

@section('custom_js')
    @include('admin.users._js')
@endsection