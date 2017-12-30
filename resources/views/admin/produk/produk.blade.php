@extends('layout.admin_template')

@section('title', 'Data Produk')
@section('page_title', 'Data Produk')
@section('page_description', 'adalah data yang berisi tentang produk.')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-shopping-bag"></i> Data Master</a></li>
    <li class="active">Produk</li>
    
@endsection

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
                   <th>Nama Produk</th>
                    <th>Nama Toko</th>
                  <th>Harga</th>
                  <th>Details</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produk as $produks)
                <tr>
                  <td>{{ $produks->nama}}</td>
                  <td>{{ $produks->toko->nama}}</td>
                  <td>{{ $produks->harga}}</td>
                  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                  <td>  <a href="{{url('ck-admin/produk/edit/' . $produks->id)}}" class="btn btn-warning">
                          <i class="fa fa-pencil"></i>
                  </a>
                      <a href="{{url('ck-admin/produk/delete/' . $produks->id)}}" class="btn btn-danger" onclick="">
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
                    <center><legend>Details Produk</legend></center>
                <div class="box box-info">
            <form class="form-horizontal">
              <div class="box-body">
                  <div class="form-group">
                  <div class="image text-center" >
                        &nbsp;<img src="{{ url('img\admin\banana\1.jpg') }}" class="img-circle" style="max-width:280px">
                    </div>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-id-badge"> &nbsp;</i>Id Produk</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="1">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-birthday-cake"> &nbsp;</i>Nama Produk</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Red Velvet Savana Cake">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Nama Toko</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Savana Cake">
                  </div>
                </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-hourglass-2"> &nbsp;</i>Stok</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="232">
                  </div>
                </div>
                                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-money"> &nbsp;</i>Harga</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="Rp. 65.000">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-newspaper-o"> &nbsp;</i>Deskripsi</label>

                  <div class="col-sm-10">
                   <textarea class="form-control" rows="4" disabled placeholder="Red Velvet adalah varian rasa yang paling digemari."></textarea>
                  </div>
                </div>

                  <a href="{{ url('/ck-admin/produk') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
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