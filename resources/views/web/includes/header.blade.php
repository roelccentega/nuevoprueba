@if(url()->current() == 'http://localhost:8080/companyccym/public/')
<!--header start-->
<header id="masthead" class="header ttm-header-style-03">
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container-fluid">
                <!--site-navigation -->
                <div class="site-navigation d-flex flex-row align-items-center">
                    <!-- site-branding -->
                    <div class="site-branding">
                        <a class="home-link" href="{{url('/')}}" title="Vemlo" rel="home">
                            <img id="logo-img" class="img-center" src="{{url('company/images/logo-ccentercompany.png')}}" alt="logo-img">
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
                                <a href="#" class="mega-menu-link">Inicio</a>

                                <ul class="mega-submenu">
                                    <li><a href="{{url('/desarrollo')}}">Solicitar Desarollo</a></li>
                                    <li><a href="{{url('/asesoria')}}">Solicitar Asesoría</a></li>
                                    <li ><a href="{{url('/acerca-de-roel-ccente-galicio')}}">Acerca del Autor</a></li>
                                    <li ><a href="{{url('/guia-de-inicio-de-programacion')}}">Guía de inicio en Programación</a></li>
                                    <li ><a href="{{url('/guia-de-inicio-de-desarrollo-web')}}">Guía de inicio en Desarrollo Web</a></li>
                                    {{--<li ><a href="home-3.html">Acerca del Autor</a></li>--}}

                                </ul>
                            </li>
                            <li class="mega-menu-item">
                                <a href="{{url('/servicios')}}" class="mega-menu-link">Servicios</a>

                                <ul class="mega-submenu">
                                    <li><a href="{{url('/servicios/desarrollo-web')}}">Desarrollo Web</a></li>
                                    <li><a href="{{url('/servicios/desarrollo-de-sistemas')}}">Desarrollo de Sistemas</a></li>
                                    <li><a href="{{url('/servicios/posicionamiento-seo')}}">Posicionamiento SEO</a></li>
                                    <li><a href="{{url('/servicios/diseno-grafico')}}">Diseño Grafico</a></li>
                                    <li><a href="{{url('/servicios/marketing-digital')}}">Diseño de post Fanpage Facebook</a></li>

                                </ul>
                            </li>
                            <li class="mega-menu-item">
                                <a href="{{url('/proyectos')}}" class="mega-menu-link">Proyectos</a>
                                <ul class="mega-submenu">
                                    <li><a href="{{url('/proyectos/latir-peru')}}">Latir Perú</a></li>
                                    <li><a href="{{url('/proyectos/nbj-constructora-y-inmobiliaria')}}">NBJ Constructora & Inmobiliaria</a></li>
                                    <li><a href="{{url('/proyectos/neurosalud')}}">Neurosalud</a></li>
                                    <li><a href="{{url('/proyectos/loyal-corporation')}}">Loyal Corporation</a></li>
                                    <li><a href="{{url('/proyectos/laboratorio-lilabs')}}">Laboratio Lilabs</a></li>
                                    <li><a href="{{url('/proyectos/grupo-castro')}}">Grupo Castro</a></li>
                                    <li><a href="{{url('/proyectos/corporacion-salome')}}">Corporación Salome</a></li>
                                    <li><a href="{{url('/proyectos/importadora-quimica')}}">Importadora Química</a></li>
                                    <li><a href="{{url('/proyectos/satelital-telecomunicaciones')}}">Satelital Telecomunicaciones</a></li>

                                </ul>
                            </li>
                            <li class="mega-menu-item">
                                <a href="#" class="mega-menu-link">Blog</a>

                            </li>
                            <li class="mega-menu-item">
                                <a href="#" class="mega-menu-link">Tutoriales</a>
                                <ul class="mega-submenu">
                                    <li><a href="{{url('/cursos/html5')}}">HTML5</a></li>


                                </ul>

                            </li>
                            <li class="mega-menu-item">
                                <a href="#" class="mega-menu-link">Tienda</a>

                            </li>
                        </ul>
                    </nav>
                    <div class="header_extra d-flex flex-row align-items-center justify-content-end">

                        <div class="header_cart">
                            <a href="#" class="button-cart">
                                <div class="cart_icon"><i class="fa fa-shopping-cart"></i></div>
                                <div class="cart_count">0</div>
                            </a>
                        </div>
                    </div>
                    <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
                        <div class="header_social">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="header_btn">
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-white" href="#">Enviar mensaje</a>
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

    @else
    <!--header start-->
    <header id="masthead" class="header ttm-header-style-01">
        <!-- site-header-menu -->
        <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
            <div class="site-header-menu-inner ttm-stickable-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--site-navigation -->
                            <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                                <!-- site-branding -->
                                <div class="site-branding ">
                                    <a class="home-link" href="{{url('/')}}" title="Company Cc&M" rel="home">
                                        <img id="logo-img" class="img-center" src="{{url('images/logo-ccentercompany.png')}}" alt="Company Cc&M">
                                    </a>
                                </div><!-- site-branding end -->
                                <div class="d-flex flex-row">
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">
                                            <li class="mega-menu-item @if(url()->current() == '/') active @endif">
                                                <a href="{{url('/')}}" class="mega-menu-link">Inicio</a>

                                                <ul class="mega-submenu">
                                                    <li><a href="{{url('/desarrollo')}}">Solicitar Desarollo</a></li>
                                                    <li><a href="{{url('/asesoria')}}">Solicitar Asesoría</a></li>
                                                    <li ><a href="{{url('/acerca-de-roel-ccente-galicio')}}">Acerca del Autor</a></li>
                                                    <li ><a href="{{url('/guia-de-inicio-de-programacion')}}">Guía de inicio en Programación</a></li>
                                                    <li ><a href="{{url('/guia-de-inicio-de-desarrollo-web')}}">Guía de inicio en Desarrollo Web</a></li>
                                                    {{--<li ><a href="home-3.html">Acerca del Autor</a></li>--}}

                                                </ul>
                                            </li>
                                            <li class="mega-menu-item @if(url()->current() == '/servicios') active @endif">
                                                <a href="{{url('/servicios')}}" class="mega-menu-link">Servicios</a>

                                                <ul class="mega-submenu">
                                                    <li><a href="{{url('/servicios/desarrollo-web')}}">Desarrollo Web</a></li>
                                                    <li><a href="{{url('/servicios/desarrollo-de-sistemas')}}">Desarrollo de Sistemas</a></li>
                                                    <li><a href="{{url('/servicios/posicionamiento-seo')}}">Posicionamiento SEO</a></li>
                                                    <li><a href="{{url('/servicios/diseno-grafico')}}">Diseño Grafico</a></li>
                                                    <li><a href="{{url('/servicios/marketing-digital')}}">Diseño de post Fanpage Facebook</a></li>

                                                </ul>
                                            </li>
                                            <li class="mega-menu-item @if(url()->current() == '/proyectos') active @endif">
                                                <a href="{{url('/proyectos')}}" class="mega-menu-link">Proyectos</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="{{url('/proyectos/neurosalud')}}">Neurosalud</a></li>
                                                    <li><a href="{{url('/proyectos/loyal-corporation')}}">Loyal Corporation</a></li>
                                                    <li><a href="{{url('/proyectos/laboratorio-lilabs')}}">Laboratio Lilabs</a></li>
                                                    <li><a href="{{url('/proyectos/grupo-castro')}}">Grupo Castro</a></li>
                                                    <li><a href="{{url('/proyectos/corporacion-salome')}}">Corporación Salome</a></li>
                                                    <li><a href="{{url('/proyectos/importadora-quimica')}}">Importadora Química</a></li>
                                                    <li><a href="{{url('/proyectos/satelital-telecomunicaciones')}}">Satelital Telecomunicaciones</a></li>

                                                </ul>
                                            </li>
                                            {{--<li class="mega-menu-item @if(url()->current() == '/blog') active @endif">--}}
                                                {{--<a href="{{url('/blog')}}" class="mega-menu-link">Blog</a>--}}

                                            {{--</li>--}}
                                            <li class="mega-menu-item @if(url()->current() == '/cursos') active @endif">
                                                <a href="{{url('/cursos')}}" class="mega-menu-link">Tutoriales</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="{{url('/cursos/html5')}}">HTML5</a></li>


                                                </ul>

                                            </li>
                                            {{--<li class="mega-menu-item @if(url()->current() == '/tienda') active @endif">--}}
                                                {{--<a href="{{url('/tienda')}}" class="mega-menu-link">Tienda</a>--}}

                                            {{--</li>--}}

                                        </ul>
                                    </nav>
                                    <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                        {{--<div class="header_search">--}}
                                            {{--<a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>--}}
                                            {{--<div class="header_search_content">--}}
                                                {{--<form id="searchbox" method="get" action="#">--}}
                                                    {{--<input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">--}}
                                                    {{--<button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>--}}
                                                {{--</form>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="header_cart">
                                            <a href="#" class="button-cart">
                                                <div class="cart_icon"><i class="fa fa-shopping-cart"></i></div>
                                                <div class="cart_count">0</div>
                                            </a>
                                        </div>
                                        <div class="header_btn">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="#">Enviar Mensaje</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-header-menu end-->
    </header><!--header end-->
@endif