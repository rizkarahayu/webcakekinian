@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')

@section('content')

    <div class="page-head">
        <div class="container">
            <h3>Payment</h3>
        </div>
    </div>
    <!-- //banner -->
    <div class="payment">
        <h4> <b>Pilih Metode Bayar</b></h4>
        <hr>
        <form>
            <div class="contact-form2">
                <div class="container">
                    <form>
                        <div class="form-group col-md-5">
                          <select class="form-control">
                            <option>Indomart</option>
                            <option>Transfer</option>
                          </select>
                        </div>
                        <span><input type="submit" value="Request Kode Bayar" ></span>
                    </form>
                </div>
                        </br>
                        <h4> <b>Detail Pengiriman</b></h4>
                        <hr>
                        <form class="form-horizontal" action="{{ url('/checkout/data_pembayaran') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control col-md-5" value="" name="nama" placeholder="Masukkan nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control col-md-5" value="" name="email" placeholder="Masukkan email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control col-md-5" name="alamat" placeholder="Masukkan alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('kota_id') ? ' has-error' : '' }}">
                                <label for="kota" class="col-md-2 control-label">Kabupaten/Kota</label>
                                <div class="col-md-5">
                                    <select class="form-control" id="provinsi" name="provinsi">
                                        <option value="">-- Pilih Provinsi --</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" id="kota_id" name="kota">
                                        <option value="">-- Pilih Kota --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('kode_pos') ? ' has-error' : '' }}">
                                <label for="kode_pos" class="col-md-2 control-label">Kode Pos</label>
                                <div class="col-md-2">
                                    <input id="kode_pos" type="text" class="form-control" name="kode_pos" placeholder="Masukkan Kode Pos" onKeyPress="return numbersonly(this, event)" maxlength="5" value="@if(!empty($pelanggan)){{ $pelanggan->kode_pos }}@endif">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                                <label for="hp_sales" class="col-md-2 control-label">Nomor Handphone</label>
                                <div class="col-md-4">
                                    <div class="input-group" style="margin-bottom:0px">
                                        <div class="input-group-addon">
                                            <i class="fa fa-mobile" style="width:12px"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask='"mask": "(+62)999-9999-9999"' data-mask2 placeholder="contoh: (+62)857-9999-9999" name="hp" value="@if(!empty($pelanggan)){{ $pelanggan->hp_sales }}@endif">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('metode_pengiriman') ? ' has-error' : '' }}">
                                <label for="hp_sales" class="col-md-2 control-label">Metode Pengiriman</label>
                                <div class="col-md-5">
                                    <select class="form-control" name="metode_pengiriman">
                                        <option value="">-- Pilih metode pengiriman --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hp_sales" class="col-md-2 control-label"></label>
                                <div class="col-md-4">
                                    {{--<button class="btn btn-primary"><span class="fa fa-check"></span> Konfirmasi</button>--}}
                                </div>
                            </div>
                            <!-- /.box-footer -->
                        </form>


                        <h4> <b>Pesan (Opsional)</b></h4>
                        <hr>
                        <textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'tujuan';}" required="">Masukkan pesan opsional...</textarea>
                        <td style="border: 0;"><a href="{{url('/checkout/payment')}}" class="btn-lg btn-success" role="button">Buat Pesanan</a></td>
                    </div>
                </form>
            </div>
        </form>
        <div class="clearfix"> </div>
    </div>
@endsection