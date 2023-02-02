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
                            <h2 class="title">Servicio de asesoría / Coaching</h2>
                        </div>
                        <div class="" style="text-align: center">

                            <span>Hola! Bienvenid@ a esta sección de asesoría.</span><br>
                            <span>Ahora que estás aquí, te explicaré en qué consiste este servicio y cómo puedo ayudarte.</span><br>
                            <span>Primero veamos en qué situación te encuentras, para ver si el servicio es conveniente para ambos. Casos en los que:</span>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Asesoría</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ttm-row services_2-section clearfix">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style6">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="flaticon flaticon-party"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>SÍ puedo ayudarte</h3>
                            </div>
                            <div class="featured-desc">
                                <ul class="right-consultancy">
                                    <li>Estás aprendiendo programación siguiendo uno de mis tutoriales y necesitas asesoría personalizada para atender tus dudas mientras aprendes.</li>
                                    <li>Has seguido uno de mis tutoriales y ahora que has finalizado, tienes dudas sobre cómo continuar y/o aplicar lo aprendido sobre un proyecto nuevo.</li>
                                    <li>Recientemente iniciaste tu camino en la programación, y tienes muchas dudas generales, sobre cómo organizarte y qué tecnologías aprender primero.</li>
                                    <li>Estás pensando en iniciar un proyecto de desarrollo de software, y te gustaría analizar la viabilidad del mismo. Es decir, estimar los recursos requeridos (costos, talento requerido, entregables, plazos de entrega, etcétera).</li>
                                    <li>Tienes dificultad para aprender un tema específico y te gustaría una explicación a detalle para eliminar tu bloqueo y puedas continuar.</li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style6">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="flaticon flaticon-signage-13"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>NO puedo ayudarte</h3>
                            </div>
                            <div class="featured-desc">
                                <ul class="bad-consultancy">
                                    <li>No tienes interés por aprender y sólo buscas una solución rápida o que alguien desarrolle un proyecto por ti.</li>
                                    <li>Tienes un error muy específico en un proyecto amplio, y en vez de recibir ideas de cómo continuar buscas una solución mágica e inmediata.</li>
                                    <li>Tienes un proyecto y quieres solicitar cambios en el mismo o nuevas funcionalidades.</li>
                                </ul>
                                <p>Estas situaciones no son adecuadas para brindarte una buena asesoría.</p>
                                <p>Si necesitas ayuda con el desarrollo de un proyecto de software (aplicación web o móvil), por favor visita la sección de desarrollo:</p>
                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-dark" href="{{url('/diagnostico')}}">Cotizar tu proyecto<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>

            </div>

        </div>
    </section>
    <section class="ttm-row services_2-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h5>Tipos de Asesoría</h5>
                            <h2 class="title">Puedo ayudarte de 2 formas. A continuación te explico en qué consisten estas opciones:</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style6">

                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Vía E-mail</h3>
                            </div>
                            <div class="featured-desc">

                                    <p>Recibiré y atenderé tus dudas por correo. Esta alternativa es perfecta si tienes dudas generales, o quieres que te aconseje qué temas estudiar para lograr construir una aplicación determinada.</p>
                                    <p>Te guiaré en tu aprendizaje, para que puedas conseguir tus objetivos en menor tiempo, y/o cada vez que no sepas cómo continuar.</p>
                                    <p>Responderé las dudas que tengas. Sin embargo, esto no implica que analice un proyecto tuyo a profundidad.</p>


                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-dark" href="{{url('/contacto')}}">Solicitar asesoría vía mail (3 preguntas)<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style6">

                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Reunión Online</h3>
                            </div>
                            <div class="featured-desc">

                                    <p>Si quieres charlar abiertamente sobre un tema de programación, o necesitas ayuda para implementar una característica en tu aplicación, esta alternativa es la más adecuada.</p>
                                    <p>Si se trata de una implementación, te ayudaré con el desarrollo mientras vamos revisando y entendiendo cada uno de los pasos.</p>
                                    <p>Aquí coordinamos una fecha y hora. Así nos reunimos, analizamos, y resolvemos tu duda. Para esto podemos usar Skype, AnyDesk o TeamViewer.</p>

                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-dark" href="{{url('/contacto')}}">Solicitar sesión de asesoría (3 preguntas)<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>

            </div>

        </div>
    </section>
    <section class="ttm-row about-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="pr-60 res-991-pr-0 res-991-mb-20">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h5>Company Cc&M</h5>
                                <h2 class="title">Preguntas frecuentes</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                        <div class="col-12 p-0">
                            <h4>¿No estás seguro si realmente te puedo ayudar?</h4>
                            <p>Si tienes una duda muy particular o relativamente compleja, <a href="http://wa.me/51972419891" target="_blank" style="color: #29c1aa;font-weight: 600">escríbeme un mensaje</a> para confirmarte si puedo ayudarte, o de caso contrario, recomendarte a algún colega especializado en el tema que estás aprendiendo.</p>
                            <h4>¿Y si el tiempo nos queda corto?</h4>
                            <p>Mi intención es ayudarte a <b>resolver </b>tus dudas de forma bien puntual, para que puedas continuar aprendiendo / desarrollando tu proyecto.</p>
                            <p>Puedes comentarme de forma general qué necesitas para estimar el tiempo que nos podría llevar.</p>
                            <h4>¿Necesitas ayuda con un proyecto?</h4>
                            <p>La asesoría está pensada para resolver dudas.</p>
                            <p>Si más que aprender quieres encargarme el desarrollo de un proyecto, por favor <a href="{{url('/desarrollo')}}" target="_blank" style="color: #29c1aa;font-weight: 600">ingresa aquí</a>.</p>
                            <h4>Si ya estás inscrito a un curso, ¿cuál es la diferencia con el servicio de asesoría?</h4>
                            <p>Siempre dedico un tiempo para responder todas las dudas que surgen en mis cursos, y así mismo los comentarios en el canal de Youtube :)</p>
                            <p>La diferencia está en el tiempo de respuesta, y también en los límites de la consulta.</p>
                            <p>En los cursos o videos de Youtube, las preguntas deben ser con relación al proyecto que estamos desarrollando, pero aquí no necesariamente es el caso.</p>
                        </div>

                    </div>
                </div>

            </div><!-- row end -->
        </div>
    </section>
    @endsection