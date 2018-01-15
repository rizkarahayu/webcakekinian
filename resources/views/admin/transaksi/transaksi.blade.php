@extends('layout.admin_template')

@section('title', 'Data Transaksi')
@section('page_title', 'Transaksi Penjualan')
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
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Nama Customer</th>
                  <th style="text-align:center">Total</th>
                  <th style="text-align:center">Detail </th>
                  <th style="text-align:center" width="20%">Konfirmasi </th>
                  <th style="text-align:center" width="10%">Status </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($transaksi as $i => $trans)
                <tr>
                  <td>{{++$i}}</td>
                  <td>{{$trans->customer->users->name}}</td>
                  <td>{{$trans->total}}</td>
                  <td style="text-align:center">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="getDetail({{$trans->id}})">Pengiriman</button>
                      <a href="{{url('ck-admin/transaksi/detail/1')}}">
                          <button class='btn btn-info'>Transaksi</button>
                      </a>
                  </td>
                    <td>
                        @if($trans->status_pembayaran == 0)
                            <a href="{{ url('ck-admin/transaksi/'. $trans->id .'/confirm/bayar') }}" class="btn btn-success"><i class="fa fa-check"></i>Konfirmasi Bayar</a>
                        @endif

                        @if($trans->status_pengiriman == 0)
                            <a href="{{ url('ck-admin/transaksi/'. $trans->id .'/confirm/terkirim') }}" class="btn btn-success" ><i class="fa fa-check"></i>Konfirmasi Terkirim</a>
                        @endif
                    </td>
                  <td style="text-align:left">
                      @if($trans->status_pembayaran == 0)
                          <a class="label label-danger" style="cursor:text;"><i class="fa fa-close"></i> Belum bayar</a>
                      @else
                          <a class="label label-success" style="cursor:text;"><i class="fa fa-check"></i>Lunas</a>
                      @endif

                      @if($trans->status_pengiriman == 0)
                          <a class="label label-danger" style="cursor:text;"><i class="fa fa-close"></i> Belum Terkirim</a>
                      @else
                          <a class="label label-success" style="cursor:text;"><i class="fa fa-check"></i>Terkirim</a>
                      @endif

                      @if($trans->status_kedatangan == 0)
                          <label class="label label-danger" style="cursor:text;"><i class="fa fa-close"></i> Belum Sampai</label>
                      @else
                          <label class="label label-success" style="cursor:text;"><i class="fa fa-check"></i>Sampai</label>
                      @endif
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
        
@section('custom_js')
        <script>$("[name='my-checkbox']").bootstrapSwitch();</script>
        @include('admin.transaksi._js')
@endsection

@section('modal')
    @include('admin.transaksi._modal_detail')
@endsection


        
