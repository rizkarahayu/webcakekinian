<!-- header -->
<div class="header">
    <div class="container">
        <ul>
            <li><span class="fa fa-hourglass" aria-hidden="true"></span>Free and Fast Delivery</li>
            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a data-toggle="modal" data-target="#test" href="">cakekinian@gmail.com</a></li>
            @guest
                <li>
                    <a href="{{ route('login') }}">Login</a> |
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endguest
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="index.html"><img src="{{ url('img/logo_mini.PNG') }}"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <form>
                <div class="search">
                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                </div>
                <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">Semua Toko</option>
                        <option value="AX">Banana Foster Lampung</option>
                        <option value="AX">Bandung Makuta</option>
                        <option value="AX">Bogor Rain Cake</option>
                        <option value="AX">Bosang Makassar</option>
                        <option value="AX">Mamahke Jogja</option>
                        <option value="AX">Lapis Minang Nantigo</option>
                        <option value="AX">Malang Struddle</option>
                        <option value="AX">Medan Napoleon</option>
                        <option value="AX">Queenpuff</option>
                        <option value="AX">Solo Pluffy</option>
                        <option value="AX">Surabaya Patata</option>
                        <option value="AX">Surabaya Snowcake</option>
                    </select>
                </div>
                <div class="sear-sub">
                    <input type="submit" value=" ">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-md-3 header-right footer-bottom">
            <ul>
                <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>

                </li>
                <li><a class="fb" href="#"></a></li>
                <li><a class="twi" href="#"></a></li>
                <li><a class="insta" href="#"></a></li>
                <li><a class="you" href="#"></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a class="menu__link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown menu__item">
                                <a href="{{url('/about')}}" class="menu__link">About Us</a></li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{url('/toko/fosterlampung')}}">Banana Foster Lampung</a></li>
                                                <li><a href="{{url('/toko/bandungmakuta')}}">Bandung Makuta</a></li>
                                                <li><a href="{{url('/toko/raincake')}}">Bogor Rain Cake</a></li>
                                                <li><a href="{{url('/toko/bosangmakassar')}}">Bosang Makassar</a></li>
                                                <li><a href="{{url('/toko/mamahke')}}">Mamahke Jogja</a></li>
                                                <li><a href="{{url('/toko/lapisminangnantigo')}}">Lapis Minang Nantigo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{url('/toko/malangstruddle')}}">Malang Struddle</a></li>
                                                <li><a href="{{url('/toko/medannapoleon')}}">Medan Napoleon</a></li>
                                                <li><a href="{{url('/toko/queenpuff')}}">Queenpuff</a></li>
                                                <li><a href="{{url('/toko/solopluffy')}}">Solo Pluffy</a></li>
                                                <li><a href="{{url('/toko/surabayapatata')}}">Surabaya Patata</a></li>
                                                <li><a href="{{url('/toko/snowcake')}}">Surabaya Snowcake</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                            <a href="womens.html"><img src="{{ url('img/website/images/logo.PNG') }}" alt=" "/></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="cart box_1">
                <a href="{{url('/checkout')}}">
                    <h3> <div class="total">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

                    </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>