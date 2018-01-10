@extends('layout.website_template')

@section('title', 'Home')

@section('custom_css')
    <style>

    </style>
@endsection

@section('content')
    <!-- banner -->
    <div class="banner-grid">
        <div id="visual">
            <div class="slide-visual">
                <!-- Slide Image Area (1000 x 424) -->
                <ul class="slide-group">
                    <li><img class="img-responsive" src="{{ url('img/website/images/ba1.jpg') }}" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{ url('img/website/images/ba2.jpg') }}" alt="Dummy Image" /></li>
                </ul>

                <!-- Slide Description Image Area (316 x 328) -->
                <div class="script-wrap">
                    <ul class="script-group">
                        <li><div class="inner-script"><img class="img-responsive" src="{{ url('img/website/images/baa1.jpg') }}" alt="Dummy Image" /></div></li>
                        <li><div class="inner-script"><img class="img-responsive" src="{{ url('img/website/images/baa2.jpg') }}" alt="Dummy Image" /></div></li>
                    </ul>
                    <div class="slide-controller">
                        <a href="#" class="btn-prev"><img src="{{ url('img/website/images/btn_prev.png') }}" alt="Prev Slide" /></a>
                        <a href="#" class="btn-play"><img src="{{ url('img/website/images/btn_play.png') }}" alt="Start Slide" /></a>
                        <a href="#" class="btn-pause"><img src="{{ url('img/website/images/btn_pause.png') }}" alt="Pause Slide" /></a>
                        <a href="#" class="btn-next"><img src="{{ url('img/website/images/btn_next.png') }}" alt="Next Slide" /></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <!-- //banner -->
    <!-- content -->

    <!-- product-nav -->

    <div class="product-easy">
        <div class="container">
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>PILIH CAKE FAVORITMU</span></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            @foreach($toko as $tk)
                                <div class="col-md-3 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item">
                                            <img src="{{ url('img/users/' . $tk->users->gambar) }}" alt="" class="pro-image-front">
                                            <img src="{{ url('img/users/' . $tk->users->gambar) }}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ url('/toko/' .$tk->id) }}" class="link-product-add-cart">Kunjungi Toko</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                        </div>
                                        <div class="item-info-product ">
                                            <h4><a href="{{ url('/toko/' .$tk->id) }}">{{ $tk->nama }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/w1.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/w1.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Wedges</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/w2.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/w2.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Sandals</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/mw1.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/mw1.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Casual Shoes</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/mw3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/mw3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Sport Shoes</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/ep2.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/ep2.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Watches</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/ep3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/ep3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Watches</a></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/g1.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/g1.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Dresses</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/g2.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/g2.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}"> Shirts</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/g3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/g3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Shirts</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/mw2.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/mw2.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">T shirts</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/a1.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/a1.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Air Tshirt Black Domyos</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/w3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/w3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('/toko/patata')}}" class="link-product-add-cart">Kunjungi Toko</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{url('/toko/patata')}}">Hand Bags</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //product-nav -->
@endsection

@section('modal')
    <!-- login -->
    <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-bottom">
                                <h3>Daftar Sekarang</h3>
                                <form method="POST" action="{{ route('register') }}">
                                     <div class="sign-up">
                                        <h4>Nama :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama';}" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Username :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                    </div>
                                </form>
                            </div>
                            <div class="login-right">
                                <form>
                                    <div class="sign-up">
                                        <h4>Tanggal Lahir :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tanggal Lahir';}" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>Alamat :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Alamat';}" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>No. Telp :</h4>
                                        <input type="text" value="Type Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '(+62)123456789';}" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>Nama Bank :</h4>
                                        <input type="text" value="Type Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama Bank';}" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>No. Rekening :</h4>
                                        <input type="text" value="Type Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'No Rekening';}" required="">
                                    </div>
                                    <div class="single-bottom">
                                        <input type="checkbox"  id="brand" value="">
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <div class="sign-in">
                                        <input type="submit" value="REGISTER NOW" >
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>Dengan mendaftar, Anda setuju dengan <a href="#">Terms and Conditions</a> and <a href="#">Kebijakan Privasi</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
@endsection

@section('custom_js')
    <script type="text/javascript" src="{{ url('plugins/pignose/pignose.layerslider.js') }}"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function() {
            $('#visual').pignoseLayerSlider({
                play    : '.btn-play',
                pause   : '.btn-pause',
                next    : '.btn-next',
                prev    : '.btn-prev'
            });
        });
        //]]>
    </script>

    <script src="{{ url('js/website/easyResponsiveTabs.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });

    </script>
    <script>
         $(document).ready(function () {
             $.ajax({
                method: 'GET',
                url: 'http://103.66.199.105:10028/',
                success: function(res){
                    console.log(res);
                }
            });
        });
    </script>
@endsection