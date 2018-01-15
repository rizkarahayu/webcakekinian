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
        <form method="POST" action="{{ url('checkout') }}">
            {{ csrf_field() }}
            <div class="contact-form2">
                <div class="container">
                    <div class="form-group col-md-8">
                      <select class="" name="metode_payment_id" required>
                          <option value="" disabled="" selected>Pilih metode -></option>
                          @foreach($methods as $method)
                              <option value="{{ $method->id }}">{{ $method->metode }}</option>
                          @endforeach
                      </select>
                        <span><input type="submit" value="Request Kode Bayar" ></span>
                    </div>
                    {{--</form>--}}
                </div>
                <br>
                <div class="container">
                    <h4> <b>Detail Pengiriman</b></h4>
                    <hr>
                    {{--<form class="form-horizontal" action="{{ url('/checkout/data_pembayaran') }}" method="post">--}}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-md-5" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" name="nama_pembeli" placeholder="Masukkan nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" data-inputmask='"mask": "(+62)999-9999-9999"' data-mask2 placeholder="contoh: (+62)857-9999-9999" name="no_telp" value="{{ \Illuminate\Support\Facades\Auth::user()->no_telp }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control col-md-5" name="alamat" placeholder="Masukkan alamat" required> {{ \Illuminate\Support\Facades\Auth::user()->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea onfocus="this.value = '';" name="deskripsi_pemesanan" onblur="if (this.value == '') {this.value = 'tujuan';}" placeholder="Masukkan pesan opsional..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kota" class="col-md-2 control-label">Kabupaten/Kota</label>
                        <div class="col-md-5">
                            <select class="" name="kabupaten" id="kabupaten" required style="width: 100%;">
                                <option disabled selected>Pilih Kota -></option>
                                @if (count($kota) > 0)
                                    @for($i = 0; $i < count($kota); $i++)
                                        <option value="{{ $kota[$i] }}">{{ $kota[$i] }}</option>
                                    @endfor
                                @endif
                            </select>
                        </div>
                        <label for="kode_pos" class="col-md-2">Kode Pos</label>
                        <div class="col-md-3">
                            <input id="kode_pos" required type="text" class="form-control" name="kode_pos" placeholder="Kode Pos" onKeyPress="return numbersonly(this, event)" maxlength="5" value="">
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="form-group">
                        {{--<label for="kode_pos" class="col-md-2 control-label">Pesan (Opsional)</label>--}}
                        <div class="col-md-2">
                            <button type="submit" class="btn-lg btn-success" role="button">Buat Pesanan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="clearfix"> </div>
    </div>
@endsection