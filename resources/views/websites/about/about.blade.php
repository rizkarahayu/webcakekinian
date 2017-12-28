@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')

@section('content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>CONTACT</h3>
    </div>
</div>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<h4>Alamat Kantor</h4>
						<p>Jl. Raya ITS No. 104 Sukolilo<span>Surabaya, Jawa Timur</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<h4>Hubungi Kami</h4>
						<p>Telepon : (+62)312345678<span>Jam Kerja: Setiap hari, 08.00-19.00)</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p><a href="mailto:cakekinian@gmail.com">cakekinian@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map wow fadeInDown animated" data-wow-delay=".5s">
				<h3 class="tittle">Tampilkan Peta</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.73557531754!2d112.7949036!3d-7.2767636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe22c55d60ef09c7!2sPoliteknik+Elektronika+Negeri+Surabaya+(PENS)!5e0!3m2!1sid!2sid!4v1514124272925" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<h3 class="tittle">Form Kontak</h3>
			<form>
				<div class="contact-form2">
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Pesan...</textarea>
					<input type="submit" value="Submit" >
				</div>
			</form>
		</div>
	</div>
	
<!-- //contact -->

@endsection