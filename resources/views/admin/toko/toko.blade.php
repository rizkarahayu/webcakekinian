@extends('layout.admin_template')

@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'adalah data yang berisi tentang toko.')


@section('content')
    <div class="row">@section('title', 'Data Toko')
@section('page_title', 'Data Toko')
@section('page_description', 'adalah data yang berisi tentang toko.')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a data-toggle='modal' data-target='#add-game-setting'>
                  <button class='btn bg-purple flat'><span class='fa fa-plus-circle'></span> Tambah Data</button>
              </a>
                    
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Nama</th>
                  <th>SIUP</th>
                  <th>NPWP</th>
                  <th>Nomor Rekening</th>
                
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>  <a href="." class="btn btn-warning">
                      <i class="fa fa-pencil"></i>
                  </a>
                      <a class="btn btn-danger" onclick="">
                      <i class="fa fa-trash"></i>
                    </a></td>
                </tr>
                 </tbody>
              </table>
                </div>
            </div>
        </div>
    </div>
@endsection