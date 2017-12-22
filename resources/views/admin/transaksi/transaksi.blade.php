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
                  <th style="text-align:center">Detail Transaksi</th>
                  <th style="text-align:center">Status Pengiriman</th>
                  <th style="text-align:center">Status Kedatangan</th>
                </tr>
                </thead>
                <tbody></tbody>
                <tr>
                  <td>&nbsp; &nbsp;Beni</td>
                  <td>Patata</td>
                  <td>Rp 65000</td>
                  <td style="text-align:center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Details</button></td>
                  <td style="text-align:center">
                      @php $status_bayar = 1; @endphp
                      @if($status_bayar == 0)
                    <label class="btn btn-danger" style="cursor:text;"><i class="fa fa-close"></i> Belum bayar</label>
                      @else
                    <label class="btn btn-success" style="cursor:text;"><i class="fa fa-check"></i>bayar</label>
                      @endif
                  </td>
                  <td style="text-align:center"><a href="{{url('ck-admin/transaksi/detail/1')}}">
                  <button class='btn btn-info'>Detail Transaksi</button>
                   </a></td>
                  <td style="text-align:center"><input width=50px type="checkbox" name="my-checkbox" checked></td>
                  <td style="text-align:center">
                      @php $status_datang = 0; @endphp
                      @if($status_datang == 0)
                    <label class="btn btn-danger" style="cursor:text;"><i class="fa fa-close"></i> Belum Sampai</label>
                      @else
                    <label class="btn btn-success" style="cursor:text;"><i class="fa fa-check"></i>Sampai</label>
                      @endif
                  </td>
                </tr>
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
                    <center><legend>Details Pengiriman</legend></center>
                <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Alamat Pengiriman</h3>
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" ><i class="fa fa-id-card"> &nbsp;</i>Nama Pembeli</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" disabled placeholder="Beni">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-tty"> &nbsp;</i>No Telepon</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" disabled placeholder="082285698889">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i>Alamat</label>

                  <div class="col-sm-10">
                   <textarea class="form-control" rows="4" disabled placeholder="Jalan Gebang Lor No.32, Sukolilo-Surabaya. Rumah Kost Bapak H.Aji"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-home"> &nbsp;</i> Kecamatan</label>
                  <div class="col-sm-4">
                    <input type="" class="form-control" id="" disabled placeholder="Sukolilo">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i> Kabupaten</label>
                  <div class="col-sm-4">
                    <input type="" class="form-control" id="" disabled placeholder="Surabaya">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-institution"> &nbsp;</i>Provinsi</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" disabled id="inputPassword3" placeholder="Jawa Timur">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-envelope-open"> &nbsp;</i>Kode Pos</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" disabled id="inputPassword3" placeholder="61111">
                  </div>
                </div>  
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
    </div>
@endsection
        
@section('custom_js')
        <script>$("[name='my-checkbox']").bootstrapSwitch();</script>
@endsection
        
