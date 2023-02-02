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
                                <a class="home-link" href="{{url('/')}}" title="Ccenter Company" rel="home">
                                    <img id="logo-img" class="img-center" src="{{url('images/logolanding.png')}}" alt="Ccenter Company">
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
                                                <li><a href="{{url('/desarrollo')}}" title="Solicitar Desarollo">Solicitar Desarollo</a></li>
                                                <li><a href="{{url('/asesoria')}}" title="Solicitar Asesoría">Solicitar Asesoría</a></li>
                                                {{--<li ><a href="{{url('/acerca-de-roel-ccente-galicio')}}">Acerca del Autor</a></li>--}}
                                                {{--<li ><a href="{{url('/guia-de-inicio-de-programacion')}}">Guía de inicio en Programación</a></li>--}}
                                                {{--<li ><a href="{{url('/guia-de-inicio-de-desarrollo-web')}}">Guía de inicio en Desarrollo Web</a></li>--}}
                                                {{--<li ><a href="home-3.html">Acerca del Autor</a></li>--}}

                                            </ul>
                                        </li>
                                        <li class="mega-menu-item @if(url()->current() == '/servicios') active @endif">
                                            <a href="{{url('/servicios')}}" class="mega-menu-link">Servicios</a>

                                            <ul class="mega-submenu">
                                                <li><a href="{{url('/servicios/desarrollo-web')}}" title="Servicio de Desarrollo Web en Ccenter Company">Desarrollo Web</a></li>
                                                <li><a href="{{url('/servicios/desarrollo-de-sistemas')}}" title="Servicio de Desarrollo de Sistemas en Ccenter Company">Desarrollo de Sistemas</a></li>
                                                <li><a href="{{url('/servicios/posicionamiento-seo')}}" title="Servicio de Posicionamiento SEO en Ccenter Company">Posicionamiento SEO</a></li>
                                                <li><a href="{{url('/servicios/diseno-grafico')}}" title="Servicio de Diseño Grafico en Ccenter Company">Diseño Grafico</a></li>
                                                <li><a href="{{url('/servicios/marketing-digital')}}" title="Servicio de Diseño de post Fanpage Facebook en Ccenter Company">Diseño de post Fanpage Facebook</a></li>

                                            </ul>
                                        </li>
                                        <li class="mega-menu-item @if(url()->current() == '/proyectos') active @endif">
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
                                        <li class="mega-menu-item @if(url()->current() == '/blog') active @endif">
                                            <a href="{{url('/blog')}}" class="mega-menu-link" title="Artículos profesionales">Blog</a>

                                        </li>
                                        <li class="mega-menu-item @if(url()->current() == '/cursos/html5') active @endif">
                                            <a href="#" class="mega-menu-link" title="Tutoriales de frontend y backend">Tutoriales</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{url('/cursos/html5')}}" title="HTML5 en Ccenter Company">HTML5</a></li>
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
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/landing/web')}}" target="_blank">PROMOCIÓN WEB</a>
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