<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Vemlo - Signage Services HTML Template" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Company Cc&M | Outsourcing Digital</title>

    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/font-awesome.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/themify-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/shortcodes.css?v=2')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/main.css?v=15')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/megamenu.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('company/css/responsive.css')}}"/>
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('company/revolution/css/rs6.css')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

<!--page start-->
<div class="page">


   {{--@include('web.includes.header')--}}
@yield('header')

@yield('content')

    @include('web.includes.footer')

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->

<script src="{{asset('company/js/jquery.min.js')}}"></script>
<script src="{{asset('company/js/tether.min.js')}}"></script>
<script src="{{asset('company/js/bootstrap.min.js')}}"></script>
<script src="{{asset('company/js/jquery.easing.js')}}"></script>
<script src="{{asset('company/js/jquery-waypoints.js')}}"></script>
<script src="{{asset('company/js/jquery-validate.js')}}"></script>
<script src="{{asset('company/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('company/js/slick.min.js')}}"></script>
<script src="{{asset('company/js/numinate.min.js')}}"></script>
<script src="{{asset('company/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('company/js/jquery-isotope.js')}}"></script>
<script src="{{asset('company/js/main.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{asset('company/revolution/js/slider.js')}}"></script>
<script  src="{{asset('company/revolution/js/revolution.tools.min.js')}}"></script>
<script  src="{{asset('company/revolution/js/rs6.min.js')}}"></script>

<!-- Javascript end-->
@yield('script')
<!-- <script id="et-iframe" data-version="0.5" data-widgetId="60490032c026592bdb722668" src="https://client.consolto.com/iframeApp/iframeApp.js"  ></script> -->
</body>


</html>