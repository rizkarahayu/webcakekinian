@extends('layout.admin_template')

@section('title', 'Data Transaksi')
@section('page_title', 'Transaksi Penjualan')
@section('content')
    <div class="row">@section('title', 'Data Transaksi')
@section('page_title', 'Data Transaksi')
@section('content')
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Transaksi</label>
                  <div class="col-sm-4">
                    <input type="" class="form-control" id="" placeholder="716883691">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-4">
                     <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                  </div>
                </div>
            </div>

            <form class="form-horizontal">
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Produk</th>
                  <th>Varian</th>
                  <th>Harga</th>
                  <th>QTY</th>
                  <th>Subtotal</th>
                </tr>
                </thead>
                <tbody></tbody>
                    
                <tr>
                  <td>Patata</td>
                  <td>Keju</td>
                  <td>Rp 65000,-</td>
                  <td>5</td>
                  <td>Rp 325000,-</td>
                </tr>
                <tr>
                  <td>Patata</td>
                  <td>Keju</td>
                  <td>Rp 65000,-</td>
                  <td>5</td>
                  <td>Rp 325000,-</td>
                </tr>
              </table>
                  <div class="form-group">
                  <label class="col-sm-2"></label>
                  <div class="col-sm-4">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Diskon</label>
                  <div class="col-sm-4">
                     <div class="input-group">
                  <input type="text" class="form-control">
                </div>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-2"></label>
                  <div class="col-sm-4">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Total</label>
                  <div class="col-sm-4">
                     <div class="input-group">
                  <input type="text" class="form-control">
                </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>

        <div class="col-md-6">
            <div class="box box-info">
            <div class="box-body">   
              <h4>Metode Payment</h4>
              <div class="row">
               <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                    <input type="text" class="form-control" value="Transfer">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                    <input type="text" class="form-control" value="Indomart">
                  </div>
                </div>
              </div>
              </div>
              <div class="box-body">   
              <h4>Deskripsi Pemesanan</h4>
              <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                  <textarea class="form-control" rows="4" placeholder="Enter ..."></textarea>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
          </div>
    
              <div class="box box-info">
           
            
          </div>
@endsection
        
@section('custom_js')
        <script>$("[name='my-checkbox']").bootstrapSwitch();</script>
@endsection
        