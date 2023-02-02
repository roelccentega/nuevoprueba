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
                            <h2 class="title">Desarrollo Web</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Desarrollo Web</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row sidebar ttm-sidebar-left ttm-bgcolor-white p-0 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                   @include('web.includes.sidebar-in-services')
                    <div class="col-lg-9 content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-featured-wrapper mb-40">
                                <img class="img-fluid" src="{{asset('images/services/desarrollo-web.jpg')}}" alt="">
                            </div>
                            <div class="ttm-service-description">
                                <h4>Desarrollo Web</h4>

                                <p>Al ser expertos en posicionamiento web, las páginas web que Ccente System desarrolla no sólo son atractivas para sus usuarios, sino también para Google.</p>

                                <p>Son muchos los factores que intervienen durante la definición y concepción de un sitio web, siendo decisiva la fase del diseño web, cuando una empresa decide tener o consolidar su presencia online y durante la cual toman forma muchas decisiones acerca de cómo será esta presencia y su implantación.</p>

                                <p>Si durante el diseño web no se tienen en cuenta los posibles factores SEO, podría derivar en un sitio web con limitaciones en su propia concepción que, cuando fuesen detectadas en el futuro (por ejemplo, con una auditoría SEO), harían necesarias remodelaciones o reestructuraciones no siempre fáciles o posibles de ejecutar</p>

                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
    @endsection