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

    <!-- content-bottom -->

    <div class="content-bottom">
        <div class="col-md-7 content-lgrid">
            <div class="col-sm-6 content-img-left text-center">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ url('img/website/images/p1.jpg') }}" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>Lemon Cheese Cake</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">Rp65.000</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 content-img-right">
                <h3>Special Offers dan Diskon 50% Discount On <span>BANDUNG MAKUTA</span></h3>
            </div>

            <div class="col-sm-6 content-img-right">
                <h3>Buy 3 get free merchandise <span> Surabaya</span> <span>Patata</span></h3>
            </div>
            <div class="col-sm-6 content-img-left text-center">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>Red Velvet</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">Rp68.000</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 content-rgrid text-center">
            <div class="content-grid-effect slow-zoom vertical">
                <div class="img-box"><img src="{{ url('img/website/images/p2.jpg')}}" alt="image" class="img-responsive zoom-img"></div>
                <div class="info-box">
                    <div class="info-content simpleCart_shelfItem">
                        <h4>Mamahke Red Velvet</h4>
                        <span class="separator"></span>
                        <p><span class="item_price">Rp68.000</span></p>
                        <span class="separator"></span>
                        <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //content-bottom -->
    <!-- product-nav -->

    <div class="product-easy">
        <div class="container">
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/a1.png')}}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/a1.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/a3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/a3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">1+1 Offer</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Next Blue Blazer</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$99.99</span>
                                            <del>$109.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/a3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/a3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$119.99</span>
                                            <del>$120.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/a3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/a3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Maroon Puma Tshirt</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$79.99</span>
                                            <del>$120.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Combo Pack</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Multicoloured TShirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dresses</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Wedding Blazers</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/g1.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/g1.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dresses</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/g2.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/g2.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"> Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/g3.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/g3.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ url('img/website/images/mw2.png') }}" alt="" class="pro-image-front">
                                        <img src="{{ url('img/website/images/mw2.png') }}" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">T shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Wedges</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Sandals</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Casual Shoes</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Sport Shoes</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Watches</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Watches</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dresses</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"> Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">T shirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black Domyos</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Hand Bags</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
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
                                <h3>Sign up for free</h3>
                                <form>
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                    </div>
                                    <div class="sign-up">
                                        <input type="submit" value="REGISTER NOW" >
                                    </div>

                                </form>
                            </div>
                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                <form>
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="single-bottom">
                                        <input type="checkbox"  id="brand" value="">
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <div class="sign-in">
                                        <!--<input type="submit" value="SIGNIN" >-->
                                        <a href="{{ url('/ck-admin') }}" class="log-button">SIGN IN</a>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
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
@endsection