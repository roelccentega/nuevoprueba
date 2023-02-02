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
                            <h2 class="title">Empresa de desarrollo de
                                web y sistemas</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Desarrollo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
    <section class="ttm-row about-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xs-12">
                    <div class="pt-15 res-991-pt-0 pr-30 res-991-pr-0 res-991-pb-40">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h5>Desarrollo</h5>
                                <h2 class="title">Desarrollo de aplicaciones a medida</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                        <p>Nuestro equipo de Ingenieros cuentan con amplio dominio en el desarrollo de soluciones administrativas, de control y de mejora de procesos, así como de aplicaciones y servicios totalmente accesibles vía online aumentando la productividad y accesibilidad de tu industria, empresa y/o negocio.</p>
                        <div class="row pt-10 align-items-center">
                            <div class="col-lg-5 col-md-3 col-sm-4">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper pt-15 res-575-pb-30">
                                    <img class="img-fluid" src="{{url('images/desarrollo2.jpg')}}" alt="single_06">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-sm-8">
                                <h5>Metodología</h5>
                                <p class="mb-0">La efectiva selección y aplicación de una metodología de desarrollo de software es crítica para disminuir el riesgo de un emprendimiento de software. Empleamos diversas metodologías ágiles (SCRUM), reconocidas como las más eficientes y efectivas para garantizar el éxito de un proyecto de ingeniería de software, sin importar su tamaño</p>
                                <br>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('/diagnostico')}}"><i class="fa fa-search"></i> Solicita Diagnóstico Gratuito</a>-
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper">
                        <img class="img-fluid" src="{{asset('images/desarrollo1.jpg')}}" alt="Metodología">
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>

    @endsection