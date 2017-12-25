@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Payment</h3>
	</div>
</div>
<!-- //banner -->
        <div class="payment">
            <h4> <b>Pilih Metode Bayar</b></h4>
			<form>
				<div class="contact-form2">
					<div class="container">
                        <form>
                            <div class="checkbox">
                              <label><input type="checkbox" value="" required="">Indomart</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="" required="">ATM</label>
                            </div>
                            <span><input type="submit" value="Request Kode Bayar" ></span>
                        </form>
                    </div>
                    </br>
            <h4> <b>Pilih Metode Pengiriman</b></h4></br>
            <form>
				<div class="contact-form2">
                    <div class="container">
                      <form>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Express</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Reguler</label>
                        </div>
                      </form>
                    </div>
                    </br>
                <h4> <b>Alamat Tujuan</b></h4></br>
                    <input type="text" value="Masukkan Alamat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'alamat';}" required="">
                    </br></br>
                <h4> <b>Pesan (Opsional)</b></h4>
					<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'tujuan';}" required="">Masukkan pesan opsional</textarea>
				</div>
			</form>
		</div>
        <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Keranjang Belanja</h4>
					<ul>
						<li>Hand Bag <i>-</i> <span>$45.99</span></li>
						<li>Watches <i>-</i> <span>$45.99</span></li>
						<li>Sandals <i>-</i> <span>$45.99</span></li>
						<li>Wedges <i>-</i> <span>$45.99</span></li>
						<li>Total <i>-</i> <span>$183.96</span></li>
                        <li><div class="checkout-right-basket"><a href="{{url('/checkout/payment')}}"><b>Buat Pesanan</b></a></div></li>
                        <li></br></li>
                        <li></br></li>
					</ul>
    </div>
				<div class="clearfix"> </div>
			</div>
	</div>
@endsection