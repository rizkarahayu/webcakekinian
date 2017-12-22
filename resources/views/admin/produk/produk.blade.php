@extends('layout.admin_template')

@section('title', 'Data Produk')
@section('page_title', 'Data Produk')
@section('page_description', 'adalah data yang berisi tentang produk.')


@section('content')
    <div class="row">
@section('title','halaman test')
@section('page_title','halaman test')
@section('page_description','Ini adalah halaman test')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{url('ck-admin/produk/tambah')}}">
                  <button class='btn bg-purple flat'><span class='fa fa-plus-circle'></span> Tambah Data</button>
              </a>
                    
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                   <th>Nama Produk</th>
                  <th>Nama Toko</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>  <a href="{{url('ck-admin/toko/edit')}}" class="btn btn-warning">
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