@extends('layout.admin_template')
@section('title', 'Laporan')
@section('page_title', 'Laporan Produk Terjual')

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Filter Produk</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row margin">
            <div class="col-sm-6">
              <label>Select Bulan</label>
            </div>
          </div>
          <div class="row margin">
            <div class="col-sm-6">
              <div class="form-group">
                <div class="col-sm-4">
                  <select class="form-control">
                    <option>Bulan Januari</option>
                    <option>Bulan Februari</option>
                    <option>Bulan Maret</option>
                    <option>Bulan April</option>
                    <option>Bulan Mei</option>
                    <option>Bulan Juni</option>
                    <option>Bulan Juli</option>
                    <option>Bulan Agustus</option>
                    <option>Bulan September</option>
                    <option>Bulan Oktober</option>
                    <option>Bulan November</option>
                    <option>Bulan Desember</option>

                  </select>
                </div>
                <div class="col-sm-3">
                  <select class="form-control">
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                  </select>
                </div>
                <button class="btn btn-primary">Tampilkan</button>
                <button class="btn btn-primary">Cetak</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Data Laporan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Tgl Transaksi</th>
              <th>No Transaksi</th>
              <th>Nama Customer</th>
              <th>Nama Toko</th>
              <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @if (count($transaksi) > 0)
              @foreach($transaksi as $i => $transaksis)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $transaksis->tanggal_transaksi}}</td>
                  <td>{{ $transaksis->id}}</td>
                  <td>{{ $transaksis->customer_id}}</td>
                  <td>{{ $transaksis->toko_id}}</td>
                  <td>{{ $transaksis->total}}</td>
                </tr>
              @endforeach
            @else
              <tr>
                <td>{{ \App\GeneralFunction::$EMPTY_DATA_MESSAGE }}</td>
              </tr>
            @endif
            </tbody>
            <th class="col-ms-6"><bold>Total Pendapatan</bold></th>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection




