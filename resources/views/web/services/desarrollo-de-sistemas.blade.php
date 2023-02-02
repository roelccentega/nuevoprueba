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
                            <h2 class="title">Desarrollo de Sistemas</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Desarrollo de Sistemas</span>
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
                                <img class="img-fluid" src="{{asset('images/services/desarrollo-de-sistemas.jpg')}}" alt="">
                            </div>
                            <div class="ttm-service-description">
                                <h4>Desarrollo de Software</h4>

                                <p>Nuestra empresa está enfocada al desarrollo de software, sistemas 100% personalizados, somos especialistas en programación de plataformas y aplicaciones web autoadministrables, estables y escalables, aportando soluciones prácticas a sus problemas. Ofrecemos los servicios de implementación de software en diversas tecnologías, cumpliendo con los estándares internacionales de calidad y metodologías.</p>

                                <p>Contamos con la experiencia, calidad y un equipo de analistas, arquitectos de software, diseñadores y programadores On-Site / Off-Site a disposición de su empresa. Nuestro equipo esta certificado para la consultoría, análisis y desarrollo de software a la medida de sus necesidades.</p>

                                <p>Nuestro equipo de Ingenieros cuentan con amplio dominio en el desarrollo de soluciones administrativas, de control y de mejora de procesos, así como de aplicaciones y servicios totalmente accesibles vía online aumentando la productividad y accesibilidad de tu industria, empresa y/o negocio.</p>

                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
@endsection