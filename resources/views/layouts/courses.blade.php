<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="author" content="Company Cc&M">
    <title>@yield('title','Cursos Company Cc&M')</title>
    <meta name="description"
          content="@yield('description','Manejo y control digital basados en la eficiencia informática para empresas y marcas que quieran tener presencia en Internet mediante Outsourcing Digital.')"/>
    <meta property="og:title" content="@yield('title','Cursos Company Cc&M')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="@yield('url', url()->current() )"/>
    <meta property="og:site_name" content="Ccente System"/>
    <meta property="og:description"
          content="@yield('description','Manejo y control digital basados en la eficiencia informática para empresas y marcas que quieran tener presencia en Internet mediante Outsourcing Digital.')"/>
    <meta property="og:image" content="@yield('image', 'https://www.ccentesystem.com/assets/images/welcome.jpg')"/>
    <meta property="og:image:alt" content="Presencia en Internet, Expertos en Desarrollo"/>
    <meta name="keywords"
          content="@yield('keywords','outsourcing digital, manejo digital, presencia en internet, autoridad en internet')"/>
    <meta property="article:publisher" content="https://www.facebook.com/companyccym"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@companyccym"/>
    <meta name="twitter:creator" content="@companyccym"/>
    <meta name="twitter:url" content="https://twitter.com/companyccym"/>
    <meta name="twitter:title" content="Presencia en Internet, Expertos en Desarrollo"/>
    <meta name="twitter:description"
          content="Somos Expertos en Diseño Web, Desarrollo de sistemas, Aplicaciones Web y Posicionamiento SEO. Creamos páginas modernas y optimizadas. Mejoramos su posicionamiento web en buscadores, ayudando a nuestros clientes que sus páginas lleguen al TOP 10 de Google."/>
    <meta name="twitter:image" content="@yield('image', 'https://www.companyccym.com/assets/images/welcome.jpg')"/>
    <link rel="canonical" href="https://www.ccentercompany.com"/>
    <link rel="author" href="https://www.ccentercompany.com"/>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/vendors/css/ui/prism.min.css')}}">
    <!-- END: Vendor CSS-->
    {{--<link rel="stylesheet" href="https://www.ccentesystem.com/assets/css/animation.min.css">--}}
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/css/bootstrap.min.css?v=1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/css/bootstrap-extended.min.css?v=2')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/css/components.min.css?v=5')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/css/themes/semi-dark-layout.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('courses/app-assets/css/core/menu/menu-types/vertical-menu.min.css?v=1')}}">

    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>
        .tab a {
            display: block;

            outline: none;

            cursor: pointer;
            transition: 0.3s;
        }
    </style>

</head>

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

@yield('header-courses')
@yield('content')
@include('web.includes.footer-courses')


<!-- BEGIN: Vendor JS-->
<script src="{{asset('courses/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('courses/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js')}}"></script>
<script src="{{asset('courses/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js')}}"></script>
<script src="{{asset('courses/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('courses/app-assets/vendors/js/ui/prism.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('courses/app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('courses/app-assets/js/core/app.min.js')}}"></script>
<script src="{{asset('courses/app-assets/js/scripts/components.min.js')}}"></script>
<script src="{{asset('courses/app-assets/js/scripts/footer.min.js')}}"></script>
<script src="{{asset('courses/app-assets/js/scripts/customizer.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('courses/app-assets/js/scripts/forms/form-tooltip-valid.min.js')}}"></script>
<!-- END: Page JS-->
<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
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
<!-- END: Body-->
</html>
