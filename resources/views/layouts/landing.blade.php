<!DOCTYPE html>
<html lang="es">


<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163414128-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-163414128-1');
    </script>
    <!--Metas-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Precio de locura S/ 480. Desarrollo de Páginas y Tiendas Virtuales')</title>
    <meta name="description" content="@yield('description','Agencia especializada
                                    en personas que quieran aumentar sus ventas y clientes. Nosotros lo logramos con el
                                    Mejor Sitio Web o Tienda Virtual.')" />
    <meta property="og:title" content="@yield('title','Precio de locura S/ 480. Desarrollo de Páginas y Tiendas Virtuales')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('url', url()->current() )" />
    <meta property="og:site_name" content="Ccente System" />
    <meta property="og:description" content="@yield('description','Agencia especializada
                                    en personas que quieran aumentar sus ventas y clientes. Nosotros lo logramos con el
                                    Mejor Sitio Web o Tienda Virtual')" />
    <meta property="og:image" content="@yield('image', 'https://www.ccentesystem.com/landing/promoweb200.jpg')" />
    <meta property="og:image:alt" content="Presencia en Internet, Expertos en Desarrollo" />
    <meta name="keywords" content="@yield('keywords','Promoción , tienda virtual, presencia en internet, páginas web')" />
    <meta property="article:publisher" content="https://www.facebook.com/companyccym" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@" />
    <meta name="twitter:creator" content="@" />
    <meta name="twitter:url" content="https://twitter.com/" />
    <meta name="twitter:title" content="Presencia en Internet, Expertos en Desarrollo" />
    <meta name="twitter:description" content="Somos Expertos en Diseño Web, Desarrollo de sistemas, Aplicaciones Web y Posicionamiento SEO. Creamos páginas modernas y optimizadas. Mejoramos su posicionamiento web en buscadores, ayudando a nuestros clientes que sus páginas lleguen al TOP 10 de Google." />
    <meta name="twitter:image" content="@yield('image', 'https://www.ccentesystem.com/landing/promoweb200.jpg')" />
    <link rel="canonical" href="https://www.companyccym.com" />
    <link rel="author" href="https://www.companyccym.com" />

    <!--External Stylesheets css-->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/bootstrap.min.css')}}">

    <!--elegant icon font -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/elegant-icons.css')}}">
    <!--Animate -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/animate.css')}}">

    <!-- slick-carousel-->
    <link rel="stylesheet" href="{{asset('landing/assets/css/slick.css')}}">

    <!-- Magnific Popup-->
    <link rel="stylesheet" href="{{asset('landing/assets/css/magnific-popup.css')}}">

    <!--Template Stylesheets css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('landing/assets/css/style.css?v=18')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('courses/assets/css/style.css?v=1')}}">
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
    <!-- Fonts styles -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">



    <script src="{{asset('landing/assets/js/modernizr.js')}}"></script>



</head>


<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

@yield('content')
<div class="back-to-tops reveal">
    <a href="#" target="_blank" title="WhatsApp" data-toggle="modal" data-target="#myModal">
        {{--data-toggle="modal" data-target="#myModal"--}}
        <i class="fa fa-whatsapp"></i>
    </a>
</div>


<div class="phone-mobile reveal">

    <a href="tel:+51998077074"  title="Llámanos">
        <i class="fa fa-phone"></i>
    </a>

</div>
@include('web.includes.form-whatsapp')
<!-- jQuery -->
<script src="{{asset('landing/assets/js/jquery-3.3.1.min.js')}}"></script>
@yield('script')
<!-- Bootstrap Plugins -->
<script src="{{asset('landing/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('landing/assets/js/jquery-latest.min.js')}}"></script>
<script src="{{asset('landing/assets/js/jquery.easing.js')}}"></script>
<script src="{{asset('landing/assets/js/wow.min.js')}}"></script>
<script src="{{asset('landing/assets/js/slick.min.js')}}"></script>
<script src="{{asset('landing/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('landing/assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('landing/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('landing/assets/js/venobox.min.js')}}"></script>
<!-- Main js -->
<script src="{{asset('landing/assets/js/main.js')}}"></script>



<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="110893207146438"
     theme_color="#0084ff"
     logged_in_greeting=" ¡Hola! como podemos ayudarte?"
     logged_out_greeting=" ¡Hola! como podemos ayudarte?">
</div>
</body>