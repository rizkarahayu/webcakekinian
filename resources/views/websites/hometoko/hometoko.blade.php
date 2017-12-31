@extends('layout.website_template')

@section('title', 'Produk')
@section('page_title', 'Produk')

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