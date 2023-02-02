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
                            <h2 class="title">Corporation Loyal</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Corporation Loyal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">


        <section class="ttm-row project-single-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-pf-single-content-wrapper ttm-pf-view-left-image">
                            <div class="ttm-pf-single-content-wrapper-innerbox">
                                <div class="row">
                                    <div class="col-md-12 col-lg-7 col-xl-8">
                                        <!-- ttm_pf_image-wrapper -->
                                        <div class="ttm_pf_image-wrapper">
                                            <img class="img-fluid" src="{{asset('company/images/projects/loyalcorporation2.png')}}" alt="portfolio-img">
                                        </div><!-- ttm_pf_image-wrapper end -->
                                    </div>
                                    <div class="col-md-12 col-lg-5 col-xl-4">
                                        <div class="ttm-pf-single-detail-box">
                                            <ul class="ttm-pf-detailbox-list">
                                                <li>
                                                    <span><i class="fa fa-tachometer ttm-textcolor-skincolor"></i>Proyecto</span>
                                                    <span class="ttm-pf-right-details">Refinery Industrial</span>
                                                </li>
                                                <li>
                                                    <span><i class="ti ti-panel ttm-textcolor-skincolor"></i>Categoría</span>
                                                    <span class="ttm-pf-right-details">Banners, Commercial</span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-user ttm-textcolor-skincolor"></i>Cliente</span>
                                                    <span class="ttm-pf-right-details">Alex Sam Martin</span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-calendar ttm-textcolor-skincolor"></i>Tiempo</span>
                                                    <span class="ttm-pf-right-details">2 Month</span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-tags ttm-textcolor-skincolor"></i>Estado</span>
                                                    <span class="ttm-pf-right-details">Good</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ttm-pf-single-content-area mt-40">
                                            <div class="pb-15">
                                                <h3>Loyal</h3>
                                                <p>El encargo era construír una presencia en Internet para la empresa <a
                                                            href="">Loyal Corporation</a> y poder tener contacto digital con los posibles clientes interesados en los servicios de Aire acondicionado y mantenimiento que ofrece la empresa.</p>

                                                <p>La empresa ya contaba con un dominio .com.pe, es un dominio con un alcance regional muy bueno para tener una mejor presencia en el país donde opera actualmente la empresa.</p>

                                                <p>Como medios sociales solo contaban con 1 perfiles creado en Facebook, nuestra propuesta era estar presentes en los medios sociales mas usados por el público en general y captar a este público digitalmente.</p>
                                            </div>
                                            <h3>Web Site Corporativo</h3>
                                            <p>Nuestra propuesta fue crear un website que tenga las urls corporativas mas importantes para poder informar al buscador la estructura de la empresa.</p>
                                            <p>Para ello creamos las siguiente urls que albergan la información necesaria para indexar el contenido de Corporación Salome en Internet:</p>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div><!--site-main end-->
@endsection