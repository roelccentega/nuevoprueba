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
                            <h2 class="title">Posicionamiento SEO</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Posicionamiento SEO</span>
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
                                <img class="img-fluid" src="{{asset('images/services/seo.jpg')}}" alt="">
                            </div>
                            <div class="ttm-service-description">
                                <h4>Posicionamiento SEO</h4>

                                <p>El posicionamiento en buscadores u optimización de motores de búsqueda es el proceso de mejorar la visibilidad de un sitio web en los resultados orgánicos de los diferentes buscadores. También es frecuente nombrarlo por su título inglés, SEO (Search Engine Optimization)</p>

                                <p>Aunque existen miles de factores en los que un motor de búsqueda se basa para posicionar una página u otra se podría decir que hay dos factores básicos: la autoridad y la relevancia.</p>
                                <ul>
                                    <li>La autoridad es básicamente la popularidad de una web. Cuanto más popular sea más valiosa es la información que contiene. Este factor es el que un motor de búsqueda tiene más en cuenta dado que se basa en la propia experiencia del usuario. Cuanto más se comparta un contenido es que a más usuarios les ha parecido útil.</li>
                                    <li>La relevancia es la relación que tiene una página frente a una búsqueda dada. Esto no es simplemente que una página contenga un montón de veces el término buscado (en los comienzos era así) si no que un motor de búsqueda se basa en cientos de factores on-site para determinar esto.</li>
                                </ul>
                                <p><strong>La razón más importante por la que es necesario el SEO es porque hace más útil tu página web tanto para los usuarios como para los motores de búsqueda.</strong></p>
                                <h5>Link Building</h5>

                                <p>El linkbuilding está muy relacionado con el concepto de PageRank. El PageRank es una calificación del 0 al 10 que Google le otorga a todo sitio web.</p>
                                <h5>Informe Técnico</h5>

                                <p>Datos importantes sobre analítica y conversión, con un mayor detalle el tráfico orgánico generado, pero también hay una serie de métricas externas a la web.</p>
                                <h5>White hat SEO</h5>

                                <p>Cumplimos las acciones éticamente correctas y que cumplen las directrices de los motores de búsqueda para posicionar una página web.</p>


                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
@endsection