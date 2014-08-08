<!--A Design by XpertDigitalAgency
Author: Kelvin Mbwilo
Author URL: http://xpertdigitalagency.com
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Zanzibar Wonders Resort</title>

    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    {{HTML::script("jquery-1.9.1.min.js")}}
    {{HTML::script("bootstrap/js/bootstrap.js")}}
    {{HTML::script("Slider/source/jquery.slides.js")}}
    <style>
        /* Prevents slides from flashing */
        #slides,.slidesjs-navigation{
            display:none;
        }
    </style>
    <script>
        $(function(){
            $("#slides").slidesjs({
                width: 940,
                height: 400,
                navigation: false,
                play: {
                    active: false,
                    auto: true,
                    interval: 5000,
                    swap: true
                }
            });
        });
    </script>
</head>
<body>

<div class="header-bg">
    <div class="container">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <h1>
                    <img src="{{ asset('logo2.png') }}" class="img-circle pull-left">
                    <a href="{{ url('/') }}">Zanzibar Wonders</a></h1>
            </div>
        </div>
        <div class="header-bot">
            <div class="menu">
                <ul>
                    <li class="home"><a href="{{ url('/') }}">Home</a></li>
                    <li class=""><a href="{{ url('about') }}"">About Us</a></li>
                    <li class=""><a href="blog.html">Tours</a></li>
                    <li class=""><a href="{{ url('gallery') }}">Gallery</a></li>
                    <li class=""><a href="{{ url('contacts') }}">Contact</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="wrap">
            <div id="slides">
                <img src="{{ asset('images/home.png') }}" style="height: 400px;width: 940px">
                <img src="{{ asset('slide_04.png') }}" style="height: 400px;width: 940px">
                <img src="{{ asset('slide_02.png') }}" style="height: 400px;width: 940px">
                <img src="{{ asset('slide_06.png') }}" style="height: 400px;width: 940px">
                <a href="#" class="slidesjs-previous slidesjs-navigation"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#" class="slidesjs-next slidesjs-navigation"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
<!--			<span class="banner-img">-->
<!--				<img src="{{ asset('images/home1.png') }}" alt="" style="width: 100%;height: 400px"/>-->
<!--			</span>-->
        </div>
    </div>
        </div>
</div>
    <div class="container">
<div class="main">
    @yield('contents')

</div>
</div>
</body>
</html>



