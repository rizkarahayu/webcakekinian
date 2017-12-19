@extends('layout.admin_template')

@section('title', 'Data Transaksi')
@section('page_title', 'Transaksi Penjualan')
@section('content')
    <div class="row">@section('title', 'Data Toko')
@section('page_title', 'Data Transaksi')
@section('content')
<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    {{--Title--}}
                    <h3 class="box-title">Data Transaksi</h3>
                </div>
                <div class="box-body">

                         <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Customer</th>
                  <th>Nama Toko</th>
                    <th>Total</th>
                    <th>Status Pembayaran</th>
                    <th>Kode Pembayaran</th>
                    <th>Status Pengiriman</th>
                    <th>Status Kedatangan</th>
                </tr>
                </thead>
                <tbody></tbody>
                    
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><input type="checkbox" name="my-checkbox" checked></td>
                  <td><button class="btn btn-primary">Kirim</button></td>
                  <td><input type="checkbox" name="my-checkbox" checked></td>
                  <td><input type="checkbox" name="my-checkbox" checked></td>
                </tr>
              </table>
                </div>
            </div>
        </div>
    </div>
@endsection
        
@section('custom_js')
        <script>$("[name='my-checkbox']").bootstrapSwitch();</script>
@endsection
        
