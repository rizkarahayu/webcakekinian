@extends('layout.admin_template')

@section('title', 'Data Events')
@section('page_title', 'Data Events')
@section('page_description', 'adalah data yang berisi tentang events.')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-gift"></i> Data Master</a></li>
    <li class="active">Events</li>
    
@endsection

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
                  <th>Nama Event</th>
                  <th>Nama Toko</th>
                  <th>Detail</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @if (count($events) > 0)
                    @foreach($events as $i => $event)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $event->nama}}</td>
                  <td>{{ $event->toko->nama}}</td>
                  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                    <td>
                        <a href="{{url('ck-admin/events/edit/' . $event->id)}}" class="btn btn-warning">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <button class="btn btn-danger" onclick="actionDelete(event, '{{ $event->id }}');">
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
    @include('admin.events._modal_detail')
@endsection

@section('custom_js')
    @include('admin.events._js')
@endsection