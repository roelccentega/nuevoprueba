@extends('layouts.web')
{{--@section('title', $slider->meta_title)--}}
{{--@section('description',$slider->meta_description)--}}
@section('image','/images/services/5e00037165586servicio1.jpg')
{{--@section('keywords', $slider->keywords)--}}
@section('header')
    <!--header start-->
    <header id="masthead" class="header ttm-header-style-03">
        <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
            <div class="site-header-menu-inner ttm-stickable-header">
                <div class="container-fluid">
                    <!--site-navigation -->
                    <div class="site-navigation d-flex flex-row align-items-center">
                        <!-- site-branding -->
                        <div class="site-branding2">
                            <a class="home-link" href="{{url('/')}}" title="Vemlo" rel="home">
                                <img id="logo-img" class="img-center" src="{{url('images/logoccenter6.png')}}" alt="logo-img">
                            </a>
                        </div><!-- site-branding end -->
                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                        </div>
                        <!-- menu -->
                        <nav class="main-menu menu-mobile" id="menu">
                            <ul class="menu">
                                <li class="mega-menu-item active">
                                    <a href="{{url('/')}}" class="mega-menu-link" title="Ir a la página de inicio">Inicio</a>

                                    <ul class="mega-submenu">
                                        <li><a href="{{url('/desarrollo')}}" title="Solicitar Desarollo">Solicitar Desarollo</a></li>
                                        <li><a href="{{url('/asesoria')}}" title="Solicitar Asesoría">Solicitar Asesoría</a></li>
                                        {{--<li ><a href="{{url('/acerca-de-roel-ccente-galicio')}}">Acerca del Autor</a></li>--}}
                                        {{--<li ><a href="{{url('/guia-de-inicio-de-programacion')}}">Guía de inicio en Programación</a></li>--}}
                                        {{--<li ><a href="{{url('/guia-de-inicio-de-desarrollo-web')}}">Guía de inicio en Desarrollo Web</a></li>--}}
                                        {{--<li ><a href="home-3.html">Acerca del Autor</a></li>--}}

                                    </ul>
                                </li>
                                <li class="mega-menu-item">
                                    <a href="{{url('/servicios')}}" class="mega-menu-link" title="Nuestros Servicios">Servicios</a>

                                    <ul class="mega-submenu">
                                        <li><a href="{{url('/servicios/desarrollo-web')}}" title="Servicio de Desarrollo Web en Ccenter Company">Desarrollo Web</a></li>
                                        <li><a href="{{url('/servicios/desarrollo-de-sistemas')}}" title="Servicio de Desarrollo de Sistemas en Ccenter Company">Desarrollo de Sistemas</a></li>
                                        <li><a href="{{url('/servicios/posicionamiento-seo')}}" title="Servicio de Posicionamiento SEO en Ccenter Company">Posicionamiento SEO</a></li>
                                        <li><a href="{{url('/servicios/diseno-grafico')}}" title="Servicio de Diseño Grafico en Ccenter Company">Diseño Grafico</a></li>
                                        <li><a href="{{url('/servicios/marketing-digital')}}" title="Servicio de Diseño de post Fanpage Facebook en Ccenter Company">Diseño de post Fanpage Facebook</a></li>

                                    </ul>
                                </li>
                                <li class="mega-menu-item">
                                    <a href="{{url('/proyectos')}}" class="mega-menu-link" title="Nuestros Proyectos">Proyectos</a>
                                    <ul class="mega-submenu">
                                        <li><a href="{{url('/proyectos/latir-peru')}}" title="Latir Perú">Latir Perú</a></li>
                                        <li><a href="{{url('/proyectos/nbj-constructora-y-inmobiliaria')}}" title="NBJ Constructora & Inmobiliaria">NBJ Constructora & Inmobiliaria</a></li>
                                        <li><a href="{{url('/proyectos/neurosalud')}}" title="Neurosalud proyecto realizado por Ccenter Company">Neurosalud</a></li>
                                        <li><a href="{{url('/proyectos/loyal-corporation')}}" title="Loyal Corporation proyecto realizado por Ccenter Company">Loyal Corporation</a></li>
                                        <li><a href="{{url('/proyectos/laboratorio-lilabs')}}" title="Laboratio Lilabs proyecto realizado por Ccenter Company">Laboratio Lilabs</a></li>
                                        {{--<li><a href="{{url('/proyectos/grupo-castro')}}">Grupo Castro</a></li>--}}
                                        <li><a href="{{url('/proyectos/corporacion-salome')}}" title="Corporación Salome proyecto realizado por Ccenter Company">Corporación Salome</a></li>
                                        <li><a href="{{url('/proyectos/importadora-quimica')}}" title="Importadora Química proyecto realizado por Ccenter Company">Importadora Química</a></li>
                                        <li><a href="{{url('/proyectos/satelital-telecomunicaciones')}}" title="Satelital Telecomunicaciones proyecto realizado por Ccenter Company">Satelital Telecomunicaciones</a></li>

                                    </ul>
                                </li>
                                <li class="mega-menu-itarticleem">
                                    <a href="{{url('/blog')}}" class="mega-menu-link" title="Artículos profesionales">Blog</a>

                                </li>
                                <li class="mega-menu-item">
                                    <a href="#" class="mega-menu-link" title="Tutoriales de frontend y backend">Tutoriales</a>
                                    <ul class="mega-submenu">
                                        <li><a href="{{url('/cursos/html5')}}" title="HTML5 en Ccenter Company">HTML5</a></li>
                                    </ul>
                                </li>
                                {{--<li class="mega-menu-item">--}}
                                {{--<a href="#" class="mega-menu-link">Tienda</a>--}}

                                {{--</li>--}}
                            </ul>
                        </nav>
                        {{--<div class="header_extra d-flex flex-row align-items-center justify-content-end">--}}

                        {{--<div class="header_cart">--}}
                        {{--<a href="#" class="button-cart">--}}
                        {{--<div class="cart_icon"><i class="fa fa-shopping-cart"></i></div>--}}
                        {{--<div class="cart_count">0</div>--}}
                        {{--</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
                            <div class="header_social">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                            <div class="header_btn">
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-white" style="background: #fff; color:#1b2d4f" href="{{url('/landing/web')}}">PROMOCIÓN WEB</a>
                            </div>
                            <div class="h_call d-flex align-items-center pl-1">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-rounded mb-0">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="pl-2 ttm-textcolor-white">+51 966 176 059</div>
                            </div>
                        </div>
                    </div><!-- site-navigation end-->
                </div>
            </div>
        </div>
        <!-- site-header-menu end-->
    </header><!--header end-->
@endsection
@section('content')

    <!-- START homemainclassicslider REVOLUTION SLIDER 6.1.8 -->
    <rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery">

        <rs-module id="rev_slider_4_1" style="display:none;" data-version="6.1.8">

            <rs-slides>
                <rs-slide data-key="rs-1" data-title="Slide" data-thumb="company/images/slides/slides-02.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:brightness;sl:d;">

                    <img src="company/images/slides/slides-02.jpg" title="slider-bg004" width="1920" height="830" class="rev-slidebg" data-no-retina>

                    <a
                            id="slider-4-slide-1-layer-1"
                            class="rs-layer"
                            href="{{url('/contacto')}}" target="_self" rel="nofollow"
                            data-type="text"
                            data-color="#fff"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:240px,240px,0,0;y:m;yo:150px,110px,102px,81px;"
                            data-text="w:normal;s:14;l:15,15,15,14;fw:700;"
                            data-dim="minh:0px,0px,none,none;"
                            data-padding="t:18,18,15,15;r:35,35,30,25;b:18,18,15,15;l:35,35,30,25;"
                            data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:5px,5px,5px,5px;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:910;sp:500;sR:910;"
                            data-frame_999="o:0;st:w;sR:7590;"
                            data-frame_hover="c:#100b14;bgc:#fff;boc:#fff;bor:5px,5px,5px,5px;bos:solid;bow:1px,1px,1px,1px;"
                            style="z-index:13;background-color:rgba(255,80,0,0);font-family:Open Sans;"
                    >CONTÁCTENOS
                    </a>

                    <rs-layer
                            id="slider-4-slide-1-layer-2"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:86px,86px,0,0;y:m;yo:-28px,-68px,-109px,-98px;"
                            data-text="w:normal;s:56,56,50,35;l:90,90,65,42;fw:700;a:left,left,center,center;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:310;sp:900;sR:310;"
                            data-frame_999="o:0;st:w;sR:7790;"
                            style="z-index:10;font-family:Open Sans;"
                    >Agencia <span class=tm-skincolor>Especializada en </span>
                    </rs-layer>

                    <rs-layer
                            id="slider-4-slide-1-layer-3"
                            data-type="text"
                            data-color="#e0e0e0"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:50px,50px,-733px,-603px;y:m;yo:-90px,-140px,3px,9px;"
                            data-text="w:normal;s:17,17,15,14;l:32,32,24,24;a:left,left,left,center;"
                            data-vbility="t,t,f,f"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:110;sp:500;sR:110;"
                            data-frame_999="o:0;st:w;sR:8390;"
                            style="z-index:8;font-family:Open Sans;text-transform:uppercase;"
                    >Ideas creativas para tu empresa! (+51) 979 880 443
                    </rs-layer>

                    <rs-layer
                            id="slider-4-slide-1-layer-4"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:82px,82px,0,0;y:m;yo:46px,6px,-41px,-50px;"
                            data-text="w:normal;s:56,56,50,35;l:90,90,65,42;fw:700;a:left,left,center,center;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:500;sp:900;sR:500;"
                            data-frame_999="o:0;st:w;sR:7600;"
                            style="z-index:11;font-family:Open Sans;"
                    >aumentar tus ventas y clientes
                    </rs-layer>

                    <rs-layer
                            id="slider-4-slide-1-layer-5"
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="xo:50px,50px,-71px,-43px;y:m;yo:13px,-28px,-3px,-1px;"
                            data-text="w:normal;s:20,20,11,6;l:0,0,14,8;"
                            data-dim="w:6px,6px,3px,1px;h:130px,130px,77px,47px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="x:-50,-50,-29,-17;"
                            data-frame_1="st:290;sp:500;sR:290;"
                            data-frame_999="o:0;st:w;sR:8210;"
                            style="z-index:9;background-color:#ffcf01;"
                    >
                    </rs-layer>

                    <a
                            id="slider-4-slide-1-layer-6"
                            class="rs-layer"
                            href="{{url('/servicios')}}" target="_self" rel="nofollow"
                            data-type="text"
                            data-color="#fff"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:50px,50px,0,0;y:m;yo:150px,110px,37px,19px;"
                            data-text="w:normal;s:14;l:15,15,15,14;fw:700;"
                            data-dim="minh:0px,0px,none,none;"
                            data-padding="t:18,18,15,15;r:35,35,30,25;b:18,18,15,15;l:35,35,30,25;"
                            data-border="bor:5px,5px,5px,5px;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:910;sp:500;sR:910;"
                            data-frame_999="o:0;st:w;sR:7590;"
                            data-frame_hover="c:#fff;bgc:linear-gradient(270deg, #fcb501 0%, #ffcf01 100%);bor:5px,5px,5px,5px;"
                            style="z-index:12;background:linear-gradient(90deg, #fcb501 0%, #ffcf01 100%);font-family:Open Sans;"
                    >SERVICIOS
                    </a>
                </rs-slide>

                <rs-slide data-key="rs-2" data-title="Slide" data-thumb="company/images/slides/slider-mainbg-005.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:brightness;sl:d;">

                    <img src="company/images/slides/slider-mainbg-005.jpg" title="slider-bg005" width="1920" height="830" class="rev-slidebg" data-no-retina>

                    <a
                            id="slider-4-slide-2-layer-1"
                            class="rs-layer"
                            href="{{url('/contacto')}}" target="_self" rel="nofollow"
                            data-type="text"
                            data-color="#fff"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:240px,240px,0,0;y:m;yo:150px,110px,102px,81px;"
                            data-text="w:normal;s:14;l:15,15,15,14;fw:700;"
                            data-dim="minh:0px,0px,none,none;"
                            data-padding="t:18,18,15,15;r:35,35,30,25;b:18,18,15,15;l:35,35,30,25;"
                            data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:5px,5px,5px,5px;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:910;sp:500;sR:910;"
                            data-frame_999="o:0;st:w;sR:7590;"
                            data-frame_hover="c:#100b14;bgc:#fff;boc:#fff;bor:5px,5px,5px,5px;bos:solid;bow:1px,1px,1px,1px;"
                            style="z-index:13;background-color:rgba(255,80,0,0);font-family:Open Sans;"
                    >CONTÁCTENOS
                    </a>

                    <rs-layer
                            id="slider-4-slide-2-layer-2"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:86px,86px,0,0;y:m;yo:-28px,-68px,-109px,-98px;"
                            data-text="w:normal;s:56,56,50,35;l:90,90,65,42;fw:700;a:left,left,center,center;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:310;sp:900;sR:310;"
                            data-frame_999="o:0;st:w;sR:7790;"
                            style="z-index:10;font-family:Open Sans;"
                    >Diseño y Desarrollo
                    </rs-layer>

                    <rs-layer
                            id="slider-4-slide-2-layer-3"
                            data-type="text"
                            data-color="#e0e0e0"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:50px,50px,-733px,-603px;y:m;yo:-90px,-140px,3px,9px;"
                            data-text="w:normal;s:17,17,15,14;l:32,32,24,24;a:left,left,left,center;"
                            data-vbility="t,t,f,f"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:110;sp:500;sR:110;"
                            data-frame_999="o:0;st:w;sR:8390;"
                            style="z-index:8;font-family:Open Sans;text-transform:uppercase;"
                    >Somos la formula del éxito!
                    </rs-layer>

                    <rs-layer
                            id="slider-4-slide-2-layer-4"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:82px,82px,0,0;y:m;yo:46px,6px,-41px,-50px;"
                            data-text="w:normal;s:56,56,50,35;l:90,90,65,42;fw:700;a:left,left,center,center;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:500;sp:900;sR:500;"
                            data-frame_999="o:0;st:w;sR:7600;"
                            style="z-index:11;font-family:Open Sans;"
                    >Llevamos tu negocio<span class=tm-skincolor> al siguiente nivel</span>
                    </rs-layer>

                    <rs-layer
                            id="slider-4-slide-2-layer-5"
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="xo:50px,50px,-71px,-43px;y:m;yo:13px,-28px,-3px,-1px;"
                            data-text="w:normal;s:20,20,11,6;l:0,0,14,8;"
                            data-dim="w:6px,6px,3px,1px;h:130px,130px,77px,47px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="x:-50,-50,-29,-17;"
                            data-frame_1="st:290;sp:500;sR:290;"
                            data-frame_999="o:0;st:w;sR:8210;"
                            style="z-index:9;background-color:#ffcf01;"
                    >
                    </rs-layer>

                    <a
                            id="slider-4-slide-2-layer-6"
                            class="rs-layer"
                            href="{{url('/servicios')}}" target="_self" rel="nofollow"
                            data-type="text"
                            data-color="#fff"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:50px,50px,0,0;y:m;yo:150px,110px,37px,19px;"
                            data-text="w:normal;s:14;l:15,15,15,14;fw:700;"
                            data-dim="minh:0px,0px,none,none;"
                            data-padding="t:18,18,15,15;r:35,35,30,25;b:18,18,15,15;l:35,35,30,25;"
                            data-border="bor:5px,5px,5px,5px;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:910;sp:500;sR:910;"
                            data-frame_999="o:0;st:w;sR:7590;"
                            data-frame_hover="c:#fff;bgc:linear-gradient(270deg, rgba(254,85,3,1) 0%, rgba(255,131,0,1) 100%);bor:5px,5px,5px,5px;"
                            style="z-index:12;background:linear-gradient(90deg, #fcb501 0%, #ffcf01 100%);font-family:Open Sans;"
                    >SERVICIOS
                    </a>
                </rs-slide>
            </rs-slides>

            <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
        </rs-module>

    </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->


    <!--site-main start-->
    <div class="site-main">


        <!--about-section-->
        <section class="ttm-row about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('company/images/about-1-digital-agency.jpg')}}" alt="single_04">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="pl-15 res-991-pl-0 res-991-pt-40">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>Ccenter Company</h5>
                                    <h2 class="title">Impulsamos tu negocio a Internet con un Diseño y Desarrollo Unico</h2>
                                </div>
                                <div class="heading-seperator"><span></span></div>
                            </div><!-- section title end -->
                            <p>¡EXPERTOS EN DESARROLLO! Las páginas web, tiendas virtuales y Sistemas que Ccenter Company desarrolla no sólo son atractivas para sus usuarios, sino también para Google.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top mb-40">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="themifyicon ti-bookmark-alt"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Tecnología</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Trabajamos con las mejores herramientas de tendencia en diseño y desarrollo.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top mb-40">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="themifyicon ti-medall"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Optimizada para buscadores</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Con un código fuente, limpio y trabajadas a nivel del SEO para que tus clientes te encuentren rápidamente
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/nosotros')}}">VER MÁS</a>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--about-section end-->


        <!--services-section end-->
        <section class="ttm-row services-section ttm-bgcolor-darkgrey clearfix">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-11 m-auto">
                        <div class="row row-equal-height">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <div class="pt-30 text-left res-575-pt-15">
                                    <!-- section title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h5>¿QUÉ HACEMOS?</h5>
                                            <h2 class="title">Nuestros Servicios</h2>
                                        </div>
                                        <div class="heading-seperator"><span></span></div>
                                    </div><!-- section title end -->
                                    <p>¿NO TIENES PÁGINA WEB? ¡Ya no hay excusa!… Implementa tu página web profesional e impulsa tu negocio</p>
                                    <br>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/servicios')}}">VER TODOS OS SERVICIOS</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-top-content style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="themifyicon ti-direction-alt"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Desarrollo de Páginas Web Profesional</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Al ser expertos en posicionamiento web, las páginas web que Ccenter Company desarrolla no sólo son atractivas para sus usuarios, sino también para Google.</p>
                                        </div>
                                        <div class="ttm-di_links">
                                            <a href="{{url('/servicios/desarrollo-web')}}" class="di_link"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-top-content style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="themifyicon ti-palette"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Creación y Diseño de Fanpage en Facebook</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Destaca tu marca con publicidad y post en redes sociales. Te ayudamos a posicionarte y obtener los mejores resultados. Contenido especializado en tu rubro, Asesoría en publicidad, Plan de contenidos</p>
                                        </div>
                                        <div class="ttm-di_links">
                                            <a href="{{url('/servicios/marketing-digital')}}" class="di_link"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-top-content style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="themifyicon ti-zip"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Desarrollo de Sistemas Web y Escritorio</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Especializados en desarrollo de software, sistemas 100% personalizados, aplicaciones web autoadministrables, estables y escalables, aportando soluciones prácticas a sus problemas. </p>
                                        </div>
                                        <div class="ttm-di_links">
                                            <a href="{{url('/servicios/desarrollo-de-sistemas')}}" class="di_link"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>
            </div>
        </section>
        <!--services-section end-->


        <!--portfolio-section-->
        <section class="ttm-row portfolio_2-section bg-img1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Nuestros Proyectos</h5>
                                <h2 class="title">Proyectos Profesionales</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style2">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos/latir-peru')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/latirperu.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="images/portfolio/portfolio-02-700x635.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="{{url('/proyectos/latir-peru')}}" class="ttm_link"><i class="fa fa-random"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Web</span>,
                                        <span>Salud</span>
                                        {{--<span>Residential</span>--}}
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/latir-peru')}}">Latir Perú</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style2">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos//proyectos/nbj-constructora-y-inmobiliaria')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/nbjconstructora.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="images/portfolio/portfolio-02-700x635.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="{{url('/proyectos/nbj-constructora-y-inmobiliaria')}}" class="ttm_link"><i class="fa fa-random"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Web</span>,
                                        <span>Construcción</span>
                                        {{--<span>Residential</span>--}}
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/nbj-constructora-y-inmobiliaria')}}">NBJ Constructora & Inmobiliaria</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>
                    {{--<div class="col-lg-4 col-md-4 col-sm-6">--}}
                        {{--<!-- featured-imagebox-portfolio -->--}}
                        {{--<div class="featured-imagebox featured-imagebox-portfolio style2">--}}
                            {{--<!-- ttm-box-view-overlay -->--}}
                            {{--<div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
                                {{--<!-- featured-thumbnail -->--}}
                                {{--<div class="featured-thumbnail">--}}
                                    {{--<a href="{{url('/proyectos/corporation-loyal')}}">--}}
                                        {{--<img class="img-fluid" src="{{asset('company/images/projects/loyalcorporation.png')}}" alt="image"></a>--}}
                                {{--</div><!-- featured-thumbnail end-->--}}
                                {{--<div class="ttm-media-link">--}}
                                    {{--<a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="images/portfolio/portfolio-02-700x635.jpg">--}}
                                        {{--<i class="fa fa-search"></i>--}}
                                    {{--</a>--}}
                                    {{--<a href="{{url('/proyectos/corporation-loyal')}}" class="ttm_link"><i class="fa fa-random"></i></a>--}}
                                {{--</div>--}}
                            {{--</div><!-- ttm-box-view-overlay end-->--}}
                            {{--<div class="featured-content featured-content-portfolio">--}}
                                    {{--<span class="category">--}}
                                        {{--<span>Web</span>--}}
                                        {{--<span>Residential</span>--}}
                                    {{--</span>--}}
                                {{--<div class="featured-title">--}}
                                    {{--<h5><a href="{{url('/proyectos/laboratorio-lilabs')}}">Corporation Loyal</a></h5>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div><!-- featured-imagebox-portfolio -->--}}
                    {{--</div>--}}
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style2">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos/neurosalud')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/proyecto-neurosalud.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Media Art Design" data-rel="prettyPhoto" href="images/portfolio/portfolio-03-700x635.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="{{url('/proyectos/neurosalud')}}" class="ttm_link"><i class="fa fa-random"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Web</span>,
                                        <span>Sistema CMS</span>
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/neurosalud')}}">Neurosalud</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>
                    {{--<div class="col-lg-4 col-md-4 col-sm-6">--}}
                        {{--<!-- featured-imagebox-portfolio -->--}}
                        {{--<div class="featured-imagebox featured-imagebox-portfolio style2">--}}
                            {{--<!-- ttm-box-view-overlay -->--}}
                            {{--<div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
                                {{--<!-- featured-thumbnail -->--}}
                                {{--<div class="featured-thumbnail">--}}
                                    {{--<a href="{{url('/proyectos/importadora-quimica')}}">--}}
                                        {{--<img class="img-fluid" src="{{asset('company/images/projects/importchemical.png')}}" alt="image"></a>--}}
                                {{--</div><!-- featured-thumbnail end-->--}}
                                {{--<div class="ttm-media-link">--}}
                                    {{--<a class="ttm_prettyphoto ttm_image" title="Company Branding" data-rel="prettyPhoto" href="company/images/portfolio/portfolio-04-700x635.jpg">--}}
                                        {{--<i class="fa fa-search"></i>--}}
                                    {{--</a>--}}
                                    {{--<a href="{{url('/proyectos/importadora-quimica')}}" class="ttm_link"><i class="fa fa-random"></i></a>--}}
                                {{--</div>--}}
                            {{--</div><!-- ttm-box-view-overlay end-->--}}
                            {{--<div class="featured-content featured-content-portfolio">--}}
                                    {{--<span class="category">--}}
                                        {{--<span>Web</span>,--}}
                                        {{--<span>Tienda</span>--}}
                                    {{--</span>--}}
                                {{--<div class="featured-title">--}}
                                    {{--<h5><a href="{{url('/proyectos/importadora-quimica')}}">Importadora Química</a></h5>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div><!-- featured-imagebox-portfolio -->--}}
                    {{--</div>--}}
                    <div class="col-lg-12 text-center">
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/proyectos')}}">VER TODOS LOS PROYECTOS</a>
                    </div>

                </div><!-- row end -->
            </div>
        </section>
        <!--portfolio-section end-->


        <!--broken-section-->
        <section class="ttm-row broken-section mt_280 res-991-mt-0 clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="mt_90 res-991-mt-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="ttm-bgcolor-white box-shadow z-index-1 position-relative spacing-7">
                                        <!-- section title -->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h5>Ccenter Company</h5>
                                                <h2 class="title">Sobre Nosotros</h2>
                                            </div>
                                            <div class="heading-seperator"><span></span></div>
                                        </div><!-- section title end -->
                                        <p>Somos Expertos en Diseño y Desarrollo de Webs y sistemas, APPs y Posicionamiento SEO. Creamos páginas modernas y optimizadas, mejorando su posicionamiento web en buscadores, ayudando a nuestros clientes que sus páginas lleguen al TOP 10 de Google. Estamos en una misión para hacer que su negocio sea rentable.</p>
                                        <div class="pt-15">
                                            <!-- ttm-progress-bar -->
                                            <div class="ttm-progress-bar" data-percent="92%">
                                                <div class="progressbar-title">Web</div>
                                                <div class="progress-bar-inner">
                                                    <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                                </div>
                                                <div class="progress-bar-percent" data-percentage="92">92%</div>
                                            </div><!-- ttm-progress-bar end -->
                                            <!-- ttm-progress-bar -->
                                            <div class="ttm-progress-bar clearfix" data-percent="80%">
                                                <div class="progressbar-title">Diseño</div>
                                                <div class="progress-bar-inner">
                                                    <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                                </div>
                                                <div class="progress-bar-percent" data-percentage="80">80%</div>
                                            </div><!-- ttm-progress-bar end -->
                                            <!-- ttm-progress-bar -->
                                            <div class="ttm-progress-bar clearfix" data-percent="88%">
                                                <div class="progressbar-title">Marketing</div>
                                                <div class="progress-bar-inner">
                                                    <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                                </div>
                                                <div class="progress-bar-percent" data-percentage="88">88%</div>
                                            </div><!-- ttm-progress-bar end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <!-- col-bg-img-five -->
                                    <div class="col-bg-img-five ttm-bg ttm-col-bgimage-yes ttm-right-span  ttm-bgcolor-skincolor pt-180 pb-180 z-index-0 res-991-pt-60">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                            <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                        </div>
                                        <div class="layer-content">
                                        </div>
                                    </div><!-- col-bg-img-five end -->
                                    <div class="row">
                                        <div class="col">
                                            <!-- ttm_single_image-wrapper -->
                                            <div class="ttm_single_image-wrapper text-center mt_210 pl-90 z-index-1 position-relative res-991-pl-15 res-991-pr-15">
                                                <img class="img-fluid" src="{{asset('images/nosotros10.jpg')}}" alt="single_05" width="500">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ttm-row testimonial-section bg-img3 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Testimonios</h5>
                                <h2 class="title">¡Lo Que Dicen Nuestros Clientes!!</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <!-- testimonials -->
                        <div class="testimonials-info">

                            <!-- testimonials -->
                            <div class="testimonials">
                                <div class="testimonial-content">
                                    <blockquote class="testimonial-text">Cursus turpis massa tincidunt dui. Nec feugiat in fermentum posuere. Ut porttitor diam. Magna eget est lorem ipsum dolor sit amet. Elementum sagittis vitae et leo duis ut. Lobortis elementum nibh tellus molestie nunc non blandit</blockquote>
                                    <div class="testimonial-caption">
                                        <h5>Alena Cartin</h5>
                                        <label>Main Director</label>
                                    </div>
                                </div>
                            </div><!-- testimonials end -->

                        </div>
                        <div class="testimonials-nav">

                            <div class="testimonial-author_info">
                                <div class="testimonial-avatar">
                                    <img class="img-fluid" src="company/images/testimonial/03.jpg" alt="testimonial-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial-section end-->


        <!-- blog-section -->
        <section class="ttm-row blog_2-section ttm-bgcolor-darkgrey clearfix">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-11 m-auto">
                        <div class="mt_15 mb_15 res-1199-mt-0">
                            <div class="row">
                                <div class="col-xl-9 order-xl-1 order-2">
                                    <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1400,"settings":{"slidesToShow": 3}} , {"breakpoint":1400,"settings":{"slidesToShow": 2}},                {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- featured-imagebox-post -->
                                            <div class="featured-imagebox featured-imagebox-post style1">
                                                <div class="ttm-post-thumbnail featured-thumbnail">
                                                    <img class="img-fluid" src="{{asset('company/images/blog/mails.jpg')}}" alt="image">
                                                </div>
                                                <div class="featured-content">
                                                    <div class="post-meta">
                                                            <span class="ttm-meta-line post-date">
                                                                <i class="fa fa-calendar"></i>
                                                                <a href="{{url('/blog/enviar-mails-correos-con-laravel')}}" rel="bookmark">
                                                                    <time class="entry-date published" datetime="2020-08-20T04:30:59+00:00">August 20, 2020</time>
                                                                </a>
                                                            </span>
                                                        <span class="ttm-meta-line cat-link"><i class="fa fa-folder"></i>Laravel</span>
                                                    </div>
                                                    <div class="featured-title">
                                                        <h5><a href="{{url('/blog/enviar-mails-correos-con-laravel')}}">Enviar correos electrónicos con Laravel y Gmail</a></h5>
                                                    </div>
                                                </div>
                                            </div><!-- featured-imagebox-post end-->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- featured-imagebox-post -->
                                            <div class="featured-imagebox featured-imagebox-post style1">
                                                <div class="ttm-post-thumbnail featured-thumbnail">
                                                    <img class="img-fluid" src="{{asset('company/images/blog/laravel-digitalocean.png')}}" alt="image">
                                                </div>
                                                <div class="featured-content">
                                                    <div class="post-meta">
                                                            <span class="ttm-meta-line post-date">
                                                                <i class="fa fa-calendar"></i>
                                                                <a href="{{url('/blog/realizar-deploy-app-laravel-a-digital-ocean')}}" rel="bookmark">
                                                                    <time class="entry-date published" datetime="2020-08-20T04:30:28+00:00">August 20, 2020</time>
                                                                </a>
                                                            </span>
                                                        <span class="ttm-meta-line cat-link"><i class="fa fa-folder"></i>Laravel, Digital Ocean</span>
                                                    </div>
                                                    <div class="featured-title">
                                                        <h5><a href="{{url('/blog/realizar-deploy-app-laravel-a-digital-ocean')}}">Realizar Deploy APP Laravel a DigitalOcean</a></h5>
                                                    </div>
                                                </div>
                                            </div><!-- featured-imagebox-post end-->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- featured-imagebox-post -->
                                            <div class="featured-imagebox featured-imagebox-post style1">
                                                <div class="ttm-post-thumbnail featured-thumbnail">
                                                    <img class="img-fluid" src="{{asset('company/images/blog/python-2.jpg')}}" alt="image">
                                                </div>
                                                <div class="featured-content">
                                                    <div class="post-meta">
                                                            <span class="ttm-meta-line post-date">
                                                                <i class="fa fa-calendar"></i>
                                                                <a href="{{url('/blog/crear-chatbot-para-messeger-en-python')}}" rel="bookmark">
                                                                    <time class="entry-date published" datetime="2020-08-20T04:29:33+00:00">August 20, 2020</time>
                                                                </a>
                                                            </span>
                                                        <span class="ttm-meta-line cat-link"><i class="fa fa-folder"></i> Chatboot, Python</span>
                                                    </div>
                                                    <div class="featured-title">
                                                        <h5><a href="{{url('/blog/crear-chatbot-para-messeger-en-python')}}">Cómo crear un bot para Messenger desde cero</a></h5>
                                                    </div>
                                                </div>
                                            </div><!-- featured-imagebox-post end-->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- featured-imagebox-post -->
                                            <div class="featured-imagebox featured-imagebox-post style1">
                                                <div class="ttm-post-thumbnail featured-thumbnail">
                                                    <img class="img-fluid" src="{{asset('company/images/blog/laravel-paypal.jpg')}}" alt="image">
                                                </div>
                                                <div class="featured-content">
                                                    <div class="post-meta">
                                                            <span class="ttm-meta-line post-date">
                                                                <i class="fa fa-calendar"></i>
                                                                <a href="{{url('/blog/integre-pasarela-de-pago-paypal-laravel')}}" rel="bookmark">
                                                                    <time class="entry-date published" datetime="2020-08-06T04:27:23+00:00">August 6, 2020</time>
                                                                </a>
                                                            </span>
                                                        <span class="ttm-meta-line cat-link"><i class="fa fa-folder"></i>Paypal, Laravel</span>
                                                    </div>
                                                    <div class="featured-title">
                                                        <h5><a href="{{url('/blog/integre-pasarela-de-pago-paypal-laravel')}}">Pasarela de pago Paypal en Laravel</a></h5>
                                                    </div>
                                                </div>
                                            </div><!-- featured-imagebox-post end-->
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-3 order-xl-2 order-1">
                                    <div class="pl-10 pt-15 res-1199-pl-0 res-1199-pt-0 res-1199-mb-20">
                                        <!-- section title -->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h5>Nuestro Blog y Noticias</h5>
                                                <h2 class="title">Los Mejores Blogs De Desarrollo</h2>
                                            </div>
                                            <div class="heading-seperator"><span></span></div>
                                        </div><!-- section title end -->
                                        <p class="mb-35">Artículos sobre desarrollo web, desarrollo de aplicaciones móviles, bases de datos, buenas prácticas de programación, y temas afines.</p>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/blog')}}">VER TODOS LOS ARTÍCULOS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-section end -->


        <!-- pricing_plan-section -->
        <section class="ttm-row pricing_plan-section bg-img1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Nuestro plan de precios</h5>
                                <h2 class="title">PLANES DE PRECIOS</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-md-4">
                        <!--ttm-pricing-plan-->
                        <div class="ttm-pricing-plan">
                            <div class="ttm-p_table-head">
                                <div class="ttm-p_table-icon">
                                    <i class="flaticon flaticon-signage-5"></i>
                                    <span class="icon-dot"></span>
                                </div>
                                <div class="ttm-p_table-title"><h3>PLAN BÁSICO</h3></div>
                                <div class="ttm-p_table-desc"><p><strong>Incluye:</strong> Hosting despega x 3 meses
                                        Desarrollo web basica, Responsive
                                        Hasta 5 áreas integrales
                                        Galeria de Imágenes.
                                        Enlace a Redes Sociales.
                                        Formulario de Contacto.
                                        Google My Bussines.
                                    </p></div>
                            </div>
                            <div class="ttm-p_table-amount">
                                <span class="cur_symbol">S/.</span>480<span class="pac_frequency">Pago único</span>
                            </div>
                            <div class="ttm-p_table-footer">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/contacto')}}"><i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div><!--ttm-pricing-plan-->
                    </div>
                    <div class="col-md-4">
                        <!--ttm-pricing-plan-->
                        <div class="ttm-pricing-plan">
                            <div class="ttm-p_table-head">
                                <div class="ttm-p_table-icon">
                                    <i class="flaticon flaticon-bar-1"></i>
                                    <span class="icon-dot"></span>
                                </div>
                                <div class="ttm-p_table-title"><h3>Premium Plan</h3></div>
                                <div class="ttm-p_table-desc"><p><strong>Incluye:</strong> Hosting cortesía 6 meses
                                        Slider Interactivo (3 a 4 imágenes)
                                        Desarrollo de web profesional responsive
                                        Páginas 5 a 15 informativas
                                        Galería de imágenes
                                        Enlace redes sociales y WhatsApp
                                        Formulario de contacto
                                        Google My Bussines
                                    </p></div>
                            </div>
                            <div class="ttm-p_table-amount">
                                <span class="cur_symbol">S/.</span>750<span class="pac_frequency">Pago único</span>
                            </div>
                            <div class="ttm-p_table-footer">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/contacto')}}"><i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div><!--ttm-pricing-plan-->
                    </div>
                    <div class="col-md-4">
                        <!--ttm-pricing-plan-->
                        <div class="ttm-pricing-plan">
                            <div class="ttm-p_table-head">
                                <div class="ttm-p_table-icon">
                                    <i class="flaticon flaticon-signage-9"></i>
                                    <span class="icon-dot"></span>
                                </div>
                                <div class="ttm-p_table-title"><h3>Advance Plan</h3></div>
                                <div class="ttm-p_table-desc"><p><strong>Incluye:</strong> Dominio .com x 1 año
                                        Hosting cortesía 1er año
                                        Slider Interactivo (3 a 4 imágenes)
                                        Desarrollo Web Profesional responsive
                                        Panel de administración para contenidos.
                                        Capacitación.
                                        Sitemap, para humanos y robots.
                                        Google My Bussines.
                                        Google Search Console.
                                    </p></div>
                            </div>
                            <div class="ttm-p_table-amount">
                                <span class="cur_symbol">S/.</span>1050<span class="pac_frequency">Pago único</span>
                            </div>
                            <div class="ttm-p_table-footer">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/contacto')}}"><i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div><!--ttm-pricing-plan-->
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing_plan-section end -->


    </div><!--site-main end-->



@endsection
