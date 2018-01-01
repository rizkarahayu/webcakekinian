@extends('layout.admin_template')

@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'adalah data yang berisi tentang toko.')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-institution"></i> Data Master</a></li>
    <li class="active">Toko</li>
    
@endsection

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
                              <th>No</th>
                              <th>Nama</th>
                              <th>Nama Kota</th>
                              <th>NPWP</th>
                              <th>Details</th>
                              <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($toko as $i => $toko)
                                <tr>
                                  <td>{{ ++$i }}</td>
                                  <td>{{ $toko->nama }}</td>
                                  <td>{{ $toko->kota }}</td>
                                  <td>{{ $toko->npwp }}</td>
                                  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                                  <td>
                                      <a href="{{url('ck-admin/toko/edit/' . $toko->id)}}" class="btn btn-warning">
                                         <i class="fa fa-pencil"></i>
                                      </a>

                                      <button class="btn btn-danger" onclick="actionDelete(event, '{{ $toko->id }}');">
                                          <i class="fa fa-trash"></i>
                                      </button>
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
    @include('admin.toko._modal_detail')
@endsection

@section('custom_js')
    @include('admin.toko._js')
@endsection