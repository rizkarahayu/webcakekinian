<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Cake-kinian - @yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <meta name=“csrf-token” content="{{ csrf_token() }}" class="o"/>

    <!-- //for-mobile-apps -->
    {{--    <link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="{{ url('css/website/bootstrap.css') }}">
    <!-- pignose css -->
    <link href="{{ url('plugins/pignose/pignose.layerslider.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- //pignose css -->
    <link href="{{ url('css/website/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    
     <!-- //font-awesome css -->
    <link href="{{ url('plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />

    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

    <!-- jQuery 3 -->
    {{--<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>--}}
    <script src="{{ url('js/website/jquery-2.1.4.min.js') }}"></script>
    <!-- cart -->
    <script src="{{ url('js/website/simpleCart.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('js/website/bootstrap-3.1.1.min.js') }}"></script>
    <!-- //for bootstrap working -->
    <script src="{{ url('js/website/jquery.easing.min.js') }}"></script>

    @yield('custom_css')
</head>
<body>

<!-- Header -->
@include('includes.websites.header')

@yield('content')

<!-- Langkah -->
@include('includes.websites.langkah')

<!-- Footer -->
@include('includes.websites.footer')

@yield('modal')

@yield('custom_js')
</body>
</html>
