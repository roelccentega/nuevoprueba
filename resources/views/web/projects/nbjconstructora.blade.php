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
                            <h2 class="title">NBJ Constructora & Inmobiliaria</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>NBJ Constructora & Inmobiliaria</span>
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
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <!-- ttm_pf_image-wrapper -->
                                        <div class="ttm_pf_image-wrapper">
                                            <a href="{{url('/proyectos/nbj-constructora-y-inmobiliaria')}}" target="_blank">
                                                <img class="img-fluid" src="{{asset('company/images/projects/nbjconstructora.png')}}" alt="portfolio-img">
                                            </a>

                                        </div><!-- ttm_pf_image-wrapper end -->
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="ttm-pf-single-content-area mt-40">
                                            <div class="pb-15">
                                                <h3>NBJ Constructora & Inmobiliaria</h3>
                                                <p>El encargo era construír una presencia en Internet para la empresa <a
                                                            href="http://nbjconstructores.com/" target="_blank">NBJ Constructora & Inmobiliaria</a> y poder tener contacto digital con los posibles clientes interesados en los servicios de Aire acondicionado y mantenimiento que ofrece la empresa.</p>

                                                <p>La empresa ya contaba con un dominio .com.pe, es un dominio con un alcance regional muy bueno para tener una mejor presencia en el país donde opera actualmente la empresa.</p>

                                                <p>Como medios sociales solo contaban con 1 perfiles creado en Facebook, nuestra propuesta era estar presentes en los medios sociales mas usados por el público en general y captar a este público digitalmente.</p>
                                            </div>
                                            <h3>Web Site Corporativo</h3>
                                            <p>Nuestra propuesta fue crear un website que tenga las urls corporativas mas importantes para poder informar al buscador la estructura de la empresa.</p>

                                            <p>Para ello creamos las siguiente urls que albergan la información necesaria para indexar el contenido de Corporación Salome en Internet:</p>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right"></i>
                                                            <span class="ttm-list-li-content font-weight-normal">Inicio</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right"></i>
                                                            <span class="ttm-list-li-content font-weight-normal">Nosotros</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right"></i>
                                                            <span class="ttm-list-li-content font-weight-normal">Servicios</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right"></i>
                                                            <span class="ttm-list-li-content font-weight-normal">Contacto</span>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>
                                            <div class="mt-30 mb-30">

                                                <p>Cada una de estas secciones albergará los contenidos independientes por sección, por el ejemplo, la url /servicios listaría cada uno de ellos de la siguiente manera:</p>
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
    </div><!--site-main end-->
@endsection