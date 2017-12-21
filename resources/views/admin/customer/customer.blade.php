@extends('layout.admin_template')

@section('title', 'Data Customer')
@section('page_title', 'Data Customer')
@section('page_description', 'adalah data yang berisi tentang customer.')


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
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>  <a href="{{url('ck-admin/customer/edit')}}" class="btn btn-warning">
                      <i class="fa fa-pencil"></i>
                  </a>
                      <a class="btn btn-danger" onclick="">
                      <i class="fa fa-trash"></i>
                    </a>
                    </td>
                </tr>
                 </tbody>
              </table>
                </div>
            </div>
        </div>
    </div>
@endsection