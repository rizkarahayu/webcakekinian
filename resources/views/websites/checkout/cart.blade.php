@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>Tas Belanjaku</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Batal</th>
						<th>Produk</th>
						<th>Jumlah</th>
						<th>Nama Produk</th>
						<th>Harga</th>
					</tr>
				</thead>
					@php $total = 0 @endphp
					@foreach($carts as $cart)
						@php $total += $cart->produk->harga * $cart->qty @endphp
						<tr class="rem{{ $cart->id }}">
							<td class="invert-closeb">
								<div class="rem">
									<div class="close1"> </div>
								</div>
								<script>$(document).ready(function(c) {
									$('.close1').on('click', function(c){
										$('.rem{{ $cart->id }}').fadeOut('slow', function(c){
											$('.rem{{ $cart->id }}').remove();
										});
										});
									});
							   </script>
							</td>
							<td class="invert-image"><a href="single.html"><img src="{{ url('img/produk/' . $cart->produk->gambar) }}" alt=" " class="img-responsive" /></a></td>
							<td class="invert">
								 <div class="quantity">
									<div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span>{{ $cart->qty }}</span></div>
										<div class="entry value-plus active">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class="invert">{{ $cart->produk->nama }}</td>
							<td class="invert">Rp. {{ number_format($cart->produk->harga) }}</td>
						</tr>
					@endforeach


                    <tr class="rem1">
                        <td style="border: 0;"></td>
                        <td style="border: 0;"></td>
                        <td style="border: 0;"></td>
                        <td style="background-color: #D83192;"><b>TOTAL</b></td>
						<td class="invert">Rp. {{ number_format($total) }}</td>
					</tr>
                    <tr class="rem1">
                        <td style="border: 0;"></td>
                        <td style="border: 0;"></td>
                        <td style="border: 0;"></td>
                        <td style="border: 0;"></td>
                        <td style="border: 0;">
							<a href="{{url('/checkout/payment')}}" class="btn btn-success" role="button">Payment <i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
						</td>
                    </tr>
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});
									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">	
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                    <a type="button" class="btn-lg btn-success" href="{{url('/')}}"><span class="fa fa-long-arrow-left" aria-hidden="true"></span> Kembali</a>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>	
<!-- //check out -->
@endsection