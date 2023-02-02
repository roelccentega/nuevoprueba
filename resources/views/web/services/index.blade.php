@extends('layouts.web')
@section('header')
    @include('web.includes.header-all-views')
@endsection
@section('content')


    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Nuestros Servicios</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Servicios</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">


        <!--services-section-->
        <section class="ttm-row services-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/servicios/desarrollo-web')}}">
                                        <img class="img-fluid" src="{{asset('images/services/desarrollo-web.jpg')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="{{url('/servicios/desarrollo-web')}}">Desarrollo Web</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Con un diseño limpio que pone el énfasis en los productos o servicios de su Empresa / Negocio.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/servicios/desarrollo-web')}}">VER MÁS</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/servicios/desarrollo-de-sistemas')}}">
                                        <img class="img-fluid" src="{{asset('images/services/desarrollo-de-sistemas.jpg')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="{{url('/servicios/desarrollo-de-sistemas')}}">Desarrollo de Sistemas</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Enfocados al desarrollo de software, sistemas 100% personalizados, somos especialistas en programación.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/servicios/desarrollo-de-sistemas')}}">VER MÁS</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/servicios/posicionamiento-seo')}}">
                                        <img class="img-fluid" src="{{asset('images/services/seo.jpg')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="{{url('/servicios/posicionamiento-seo')}}">Posicionamiento SEO</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>La razón más importante por la que es necesario el SEO es porque hace más útil tu página web tanto para los usuarios como para los motores de búsqueda.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/servicios/posicionamiento-seo')}}">VER MÁS</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->


                                <div class="featured-thumbnail">
                                    <a href="{{url('/servicios/diseno-grafico')}}">
                                        <img class="img-fluid" src="{{asset('images/services/diseno-grafico.jpg')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="{{url('/servicios/diseno-grafico')}}">Diseño Grafico</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Estamos preparados para desarrollar proyectos multimedia, diseño gráfico, diseño de páginas web, diseño de logotipos y arquitectura corporativa.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/servicios/diseno-grafico')}}">VER MÁS</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->

                                <div class="featured-thumbnail">
                                    <a href="{{url('/servicios/marketing-digital')}}">
                                        <img class="img-fluid" src="{{asset('images/services/social-media.jpg')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="{{url('/servicios/marketing-digital')}}">MArketing Digital Facebook</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Tu estrategia de marketing a través de Facebook tiene que ser única. Hay una enorme cantidad de clientes potenciales esperándote en Facebook.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/servicios/marketing-digital')}}">VER MÁS</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->

                                <div class="featured-thumbnail">
                                    <a href="{{url('/servicios/e-commerce')}}">
                                        <img class="img-fluid" src="{{asset('images/services/ecommerce.jpg')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5><a href="{{url('/servicios/e-commerce')}}">E- Commerce</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Servicios eCommerce, creamos la estrategia para llevar tu comercio tradicional al éxito online, despega tu negocio.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/servicios/e-commerce')}}">VER MÁS</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>

                </div>
            </div>
        </section>
        <!--services_2-section end-->


    </div><!--site-main end-->
@endsection