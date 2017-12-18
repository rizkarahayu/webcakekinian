@extends('layout.admin_template')

@section('title', 'Data Transaksi')
@section('page_title', 'Transaksi Penjualan')
@section('content')
    <div class="row">@section('title', 'Data Toko')
@section('page_title', 'Data Transaksi')
@section('page_description', 'Data Transaksi')
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
                  <th style="text-align:center">Nama Customer</th>
                  <th style="text-align:center">Nama Toko</th>
                  <th style="text-align:center">Total</th>
                  <th style="text-align:center">Detail Pengiriman</th>
                  <th style="text-align:center">Status Bayar</th>
                  <th style="text-align:center">Kode Bayar</th>
                  <th style="text-align:center">Status Pengiriman</th>
                  <th style="text-align:center">Status Kedatangan</th>
                </tr>
                </thead>
                <tbody></tbody>
                    
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td style="text-align:center"><button width=50px class="btn btn-primary">Detail</button></td>
                  <td style="text-align:center"><input width=50px  type="checkbox" name="my-checkbox" checked></td>
                  <td style="text-align:center"><button width=50px class="btn btn-primary">Kirim</button></td>
                  <td style="text-align:center"><input width=50px type="checkbox" name="my-checkbox" checked></td>
                  <td style="text-align:center"><input width=50px type="checkbox" name="my-checkbox" checked></td>
                </tr>
              </table>
                    <br/>
                    <br/>
                    <div class="row" style="display:none">
                    <div class="col-md-6 col-md-offset-3">
                    <div class="box box-info">
                    <form class="form-horizontal" border="2">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>

                              <div class="col-sm-10">
                                <input type="" class="form-control" id="" placeholder="Nama Produk">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Harga </label>

                              <div class="col-sm-10">
                                <input type="" class="form-control" id="" placeholder="Rp. ">
                              </div>
                            </div>
                              <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">QTY </label>
                            <div class="btn-group"></div>
                            </div>
                            <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Subtotal</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" id="" placeholder="Rp. ">
                            </div>
                            </div>
                          </div>
                    </form>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        
@section('custom_js')
        <script>$("[name='my-checkbox']").bootstrapSwitch();</script>
@endsection
        
