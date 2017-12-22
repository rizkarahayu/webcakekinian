@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>{{ $list['nama_produk'] }}</h3>
    </div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
					<ul>
						<li data-thumb="{{ url('img/website/images/logo_mini2.PNG') }}">
							<div class="thumb-image"> <img src="{{ url('img/website/images/fosterlampung/3.jpg') }}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<h3>{{$list['nama_produk']}}</h3>
					<p><span class="item_price">{{ $list['harga'] }}</span> <del>-{{ $list['harga'] }} </del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
                    <br>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Jumlah :</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">1 Qty</option>
								<option value="null">2 Qty</option> 
								<option value="null">3 Qty</option>					
								<option value="null">4 Qty</option>	
                                <option value="null">5 Qty</option>	
							</select>
						</div>
					</div>
                    <div>
                    </div>
                    <br>
					<div class="occasion-cart">
						<a href="#" class="item_add hvr-outline-out button2">Add to cart</a>
					</div>
					
		</div>
				<div class="clearfix"> </div>

				<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(1)</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Brief Description</h5>
								<p>{{ $list['deskripsi_produk']}}
									<span>{{ $list['deskripsi_produk']}}</span></p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="{{ url('img/website/images/logo_mini2.PNG') }}" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">User</a></li>
												<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span></a></li>
											</ul>
											<p>{{ $list['review'] }}</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									
									<div class="add-review">
										<h4>Tambahkan review</h4>
										<form>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<inendput type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
											
											<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Pesan...</textarea>
											<input type="submit" value="Kirim">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>
<!-- //single -->
@endsection