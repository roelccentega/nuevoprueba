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
                            <h2 class="title">Nuestros Proyectos</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Proyectos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">


        <!--portfolio-section-->
        <section class="ttm-row portfolio_3-section clearfix">
            <div class="container">
                <div class="row mt_15 mb_15">
                    <div class="col-lg-4 col-md-4 col-sm-6 project_item banners commercial">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{asset('company/images/projects/proyecto-neurosalud.png')}}" alt="image">
                                </div>
                                <!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a href="{{url('/proyectos/neurosalud')}}" class="ttm_link" tabindex="0"><i class="ti ti-arrow-right"></i></a>
                                </div>
                                <div class="featured-content featured-content-portfolio">
                                        <span class="category">
                                            <span>Web</span>,
                                            <span>Sistema</span>,
                                            <span>SEO</span>
                                        </span>
                                    <div class="featured-title">
                                        <h5><a href="{{url('/proyectos/neurosalud')}}">Neurosalud</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 project_item banners residential">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos/loyal-corporation')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/loyalcorporation.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a href="{{url('/proyectos/loyal-corporation')}}" class="ttm_link"><i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Web</span>
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/loyal-corporation')}}">Loyal Corporation</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 project_item printing residential">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos/laboratorio-lilabs')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/lilabs-laboratorio.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a href="{{url('/proyectos/laboratorio-lilabs')}}" class="ttm_link"><i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Web</span>,
                                        <span>Sistema</span>
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/laboratorio-lilabs')}}">Laboratorio Lilabs</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>
                    {{--<div class="col-lg-4 col-md-4 col-sm-6 project_item banners residential">--}}
                        {{--<!-- featured-imagebox-portfolio -->--}}
                        {{--<div class="featured-imagebox featured-imagebox-portfolio style1">--}}
                            {{--<!-- ttm-box-view-overlay -->--}}
                            {{--<div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">--}}
                                {{--<!-- featured-thumbnail -->--}}
                                {{--<div class="featured-thumbnail">--}}
                                    {{--<a href="{{url('/proyectos/grupo-castro')}}"> <img class="img-fluid" src="company/images/portfolio/portfolio-04-700x635.jpg" alt="image"></a>--}}
                                {{--</div><!-- featured-thumbnail end-->--}}
                                {{--<div class="ttm-media-link">--}}
                                    {{--<a href="{{url('/proyectos/grupo-castro')}}" class="ttm_link"><i class="ti ti-arrow-right"></i></a>--}}
                                {{--</div>--}}
                            {{--</div><!-- ttm-box-view-overlay end-->--}}
                            {{--<div class="featured-content featured-content-portfolio">--}}
                                    {{--<span class="category">--}}
                                        {{--<span>Sistema</span>--}}
                                        {{--<span>Residential</span>--}}
                                    {{--</span>--}}
                                {{--<div class="featured-title">--}}
                                    {{--<h5><a href="{{url('/proyectos/grupo-castro')}}">Grupo Castro</a></h5>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div><!-- featured-imagebox-portfolio -->--}}
                    {{--</div>--}}
                    <div class="col-lg-4 col-md-4 col-sm-6 project_item commercial printing">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos/corporacion-salome')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/proyecto-corporacion-salome.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a href="{{url('/proyectos/corporacion-salome')}}" class="ttm_link"><i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Web</span>,
                                        <span>SEO</span>
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/corporacion-salome')}}">Corporación Salome</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 project_item commercial printing">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos/importadora-quimica')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/importchemical.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a href="{{url('/proyectos/importadora-quimica')}}" class="ttm_link"><i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Web</span>,
                                        <span>SEO</span>
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/importadora-quimica')}}">Importadora Química</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 project_item commercial printing">
                        <!-- featured-imagebox-portfolio -->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{url('/proyectos/satelital-telecomunicaciones')}}">
                                        <img class="img-fluid" src="{{asset('company/images/projects/satelital.png')}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a href="{{url('/proyectos/satelital-telecomunicaciones')}}" class="ttm_link"><i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="featured-content featured-content-portfolio">
                                    <span class="category">
                                        <span>Sistema</span>
                                        {{--<span>SEO</span>--}}
                                    </span>
                                <div class="featured-title">
                                    <h5><a href="{{url('/proyectos/satelital-telecomunicaciones')}}">Satelital Telecomunicaciones</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-portfolio -->
                    </div>

                </div>
            </div>
        </section>
        <!--portfolio-section end-->


    </div><!--site-main end-->
    @endsection