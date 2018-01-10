@extends('layout.website_template')

@section('title', 'Toko')
@section('page_title', 'Toko')

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>{{ $data['nama_toko'] }}</h3>
	</div>
</div>
<!-- //banner -->
<!-- mens -->
<div class="men-wear">
	<div class="container">
		<div class="col-md-4 products-left">
			<div class="community-poll">
				<h4>Lakukan polling!</h4>
				<div class="swit form">	
					<form>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Pelayanan dan pengiriman yang lebih ramah</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Harga lebih murah</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Pelayanan lebih cepat</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lebih banyak varian</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Garansi uang kembali</label> </div></div>	
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>		
					<input type="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Varian Produk</h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Sort By</h6>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Default</option>
						<option value="null">Name(A - Z)</option> 
						<option value="null">Name(Z - A)</option>
						<option value="null">Price(High - Low)</option>
						<option value="null">Price(Low - High)</option>				
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="{{ url('img/website/images/logo/logo1.jpg') }}" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h4>Super Delicious {{ $data['nama_toko'] }}</h4>
					<p>{{ $data['deskripsi_toko'] }}</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="single-pro">
			@foreach($produks as $produk)
				<div class="col-md-3 product-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="{{ url('img/produk/' . $produk->gambar) }}" alt="" class="pro-image-front">
							<img src="{{ url('img/produk/' . $produk->gambar) }}" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{url('/produk/' . $produk->id)}}" class="link-product-add-cart">Lihat Detail</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
						</div>
						<div class="item-info-product ">
							<h4><a href="single.html">{{ $produk->nama }}</a></h4>
							<div class="info-product-price">
								<span class="item_price">Rp. {{ number_format($produk->harga) }}</span>
								<del>Rp. {{ number_format(rand($produk->harga + 10000, $produk->harga + 50000)) }}</del>
							</div>
							<form action="{{ url('cart/' . $produk->id . '/add') }}" method="post" >
								{{ csrf_field() }}
								{{--<a class="item_add single-item hvr-outline-out button2">--}}
									<button type="submit">Add to cart</button>
								{{--</a>--}}
							</form>
						</div>
					</div>
				</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
@endsection