
<!-- header -->
<div class="header">
    <div class="container">
        <ul>
            <li><span class="fa fa-hourglass" aria-hidden="true"></span>Free and Fast Delivery</li>
            @guest
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a data-toggle="modal" data-target="#test" href="">Register</a></li>
            @else
                    <li><p>Selamat datang di Cake-kinian!</p></li>
            @endguest
                @guest
                <li>
                    <div class="dropdown">
                      <button class="dropbtn">Masuk</button>
                      <div class="dropdown-content">
                        <a href="{{ route('login') }}">Login</a>
                      </div>
                    </div>
                </li>
                @else
                <li>
                    <div class="dropdown">
                      <button class="dropbtn"><i class="fa fa-toggle-down"></i> Menu</button>
                      <div class="dropdown-content">
                          @if (\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                            <a href="{{ url('ck-admin') }}">Dashboard Admin</a>
                          @endif
                        <a href="#">Edit Profil</a>
                        <a href="{{ url('checkout/history') }}">Lihat History Transaksi</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                      </div>
                    </div>
                </li>
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
            <h1><a href="{{ url('/') }}"><img src="{{ url('img/logo_mini.PNG') }}"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <form>
                <div class="search">
                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                </div>
                <div class="section_room">
                    <select id="toko_id" name="toko_id" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null" disabled selected>Pilih toko -></option>
                        @foreach($toko as $tk)
                            <option value="{{ $tk->id }}">{{ $tk->nama }}</option>
                        @endforeach
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
                                                @foreach($toko1 as $toko)
                                                    <li><a href="{{url('/toko/' . $toko->id)}}">{{ $toko->nama }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                @foreach($toko2 as $toko)
                                                    <li><a href="{{url('/toko/' . $toko->id)}}">{{ $toko->nama }}</a></li>
                                                @endforeach
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
                <a href="{{url('/cart')}}">
                    <h3> <div class="total">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            {{--<span class="simpleCart_total"></span> --}}
                            {{--(<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)--}}
                            <span id="" class=""></span> Cart
                        </div>

                    </h3>
                </a>
                <p><a href="{{url('/cart')}}" class="simpleCart_empty"><span class="">Items</span></a></p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>