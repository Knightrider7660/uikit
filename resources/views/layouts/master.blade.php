<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/font-awesome/css/font-awesome.min.css"')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/linearicons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/iconmoon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/animat/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/fancybox/jquery.fancybox.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/nivo-lightbox/nivo-lightbox.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/themes/default/default.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/owl-carousel/owl.carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/owl-carousel/owl.theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/owl-carousel/owl.transitions.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/responsive.css')}}"/>
</head>
<body>

@include('shared.header')

<!--banner-->
<section id="banner" class="banner">
    <div class="container">
        @yield('banner')
    </div>
</section>
<!--banner-->

<!--about-->
<section id="abouts" class="abouts">
    <div class="container">
        @yield('about')
    </div>
</section>
<!--about-->

<!--features-->
<section id="features" class="features">
    <div class="container">
        @yield('features')
    </div>
</section>
<!--features-->

<!--pricing-->
<section id="works" class="works">
    <div class="container">
        @yield('pricing')
    </div>
</section>
<!--pricing-->

<!--video-->
<section id="video" class="video_area wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
    <div class="container">\
        @yield('video')
    </div>
</section>
<!--video-->

<!--clients-->
<section id="clients" class="clients wow fadeIn" data-wow-duration="3s">
    <div class="container">
        @yield('clients')
    </div>
</section>
<!--clients-->

<!--customize-->
<section id="customiz" class="customiz wow fadeIn" data-wow-duration="2s">
    <div class="container">
        @yield('customize')
    </div>
</section>
<!--customize-->

<!--faq-->
<section id="joinus" class="joinus wow zoomIn">
    <div class="container">
        @yield('faq')
    </div>
</section>
<!--faq-->



@include('shared.footer')
<script type="text/javascript" src="{{asset('public/js/jquery/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/bootstrap/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/nivo-lightbox/nivo-lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery-easing/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/wow/wow.min.js')}}"></script>
</body>
</html>