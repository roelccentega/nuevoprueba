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
                            <h2 class="title">Artículos de Desarrollo</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span>Artículos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white overflow-hidden clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{asset('assets/images/blog/mails.jpg')}}" alt="blog-img">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <span class="entry-date">20 Aug 2020</span>
                                    </span>
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header"><header class="entry-header">
                                        <h2 class="entry-title"><a href="{{url('/blog/enviar-mails-correos-con-laravel')}}">Enviar correos electrónicos con Laravel y Gmail</a></h2>
                                    </header>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>Laravel, Gmail</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Roel Ccente G.</span>
                                        {{--<span class="ttm-meta-line comments-links"><i class="fa fa-comments"></i>2 Comments</span>--}}
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>Aprenderas a enviar correos electrónicos con Laravel usando Gmail como nuestro servidor smtp</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore">
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-left ttm-btn-color-dark" href="{{url('/blog/enviar-mails-correos-con-laravel')}}"><i class="fa fa-minus"></i>Leer más</a>
                                        </div>
                                        <div class="ttm-social-share-wrapper">
                                            <a href="#" class="ttm-social-share-icon_btn"><i class="fa fa-share-alt"></i></a>
                                            <div class="social-icons circle">
                                                <ul class="m-0">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->
                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{asset('assets/images/blog/laravel-digitalocean.png')}}" alt="blog-img">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <span class="entry-date">20 Aug 2020</span>
                                    </span>
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="{{url('/blog/realizar-deploy-app-laravel-a-digital-ocean')}}">Realizar Deploy APP Laravel a Digital Ocean</a></h2>
                                    </header>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>Laravel, Digital Ocean</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Roel Ccente G.</span>
                                        {{--<span class="ttm-meta-line comments-links"><i class="fa fa-comments"></i>0 Comments</span>--}}
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>Como instalar Laravel en Digital Ocean. En este tutorial aprenderas a crear una droplet configurar Apache y MySQL</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore">
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-left ttm-btn-color-dark" href="{{url('/blog/realizar-deploy-app-laravel-a-digital-ocean')}}"><i class="fa fa-minus"></i>Leer más</a>
                                        </div>
                                        <div class="ttm-social-share-wrapper">
                                            <a href="#" class="ttm-social-share-icon_btn"><i class="fa fa-share-alt"></i></a>
                                            <div class="social-icons circle">
                                                <ul class="m-0">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->
                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-video-wrapper -->
                            <div class="ttm-post-video-wrapper ttm-video-wrapper">
                                <div class="ttm-post-format-video">
                                    <img src="{{asset('company/images/blog/python-2.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <span class="entry-date">20 Aug 2020</span>
                                    </span>
                                </div>
                            </div><!-- post-video-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="{{url('/blog/crear-chatbot-para-messeger-en-python')}}">Cómo crear un bot para Messenger desde cero</a></h2>
                                    </header>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>Chatboot, Python</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Roel Ccente G.</span>
                                        {{--<span class="ttm-meta-line comments-links"><i class="fa fa-comments"></i>2 Comments</span>--}}
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>Te enseñare como crear de Chat Bot en Python de aprendizaje profundo, utilizando las herramientas que disponemos en messenger.</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore">
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-left ttm-btn-color-dark" href="{{url('/blog/crear-chatbot-para-messeger-en-python')}}"><i class="fa fa-minus"></i>Leer más</a>
                                        </div>
                                        <div class="ttm-social-share-wrapper">
                                            <a href="#" class="ttm-social-share-icon_btn"><i class="fa fa-share-alt"></i></a>
                                            <div class="social-icons circle">
                                                <ul class="m-0">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->
                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-video-wrapper -->
                            <div class="ttm-post-video-wrapper ttm-video-wrapper">
                                <div class="ttm-post-format-video">

                                    <img src="{{asset('assets/images/blog/laravel-paypal.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <span class="entry-date">20 Aug 2020</span>
                                    </span>
                                </div>
                            </div><!-- post-video-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="{{url('/blog/integre-pasarela-de-pago-paypal-laravel')}}">Pasarela de pago Paypal en Laravel</a></h2>
                                    </header>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>Paypal, Laravel</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Roel Ccente G.</span>
                                        {{--<span class="ttm-meta-line comments-links"><i class="fa fa-comments"></i>2 Comments</span>--}}
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>Aprenderas cómo implementar la pasarela de pago Paypal y Laravel en sus tiendas de comercio electrónico para liquidar pagos en línea de manera rápida y efectiva.</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore">
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-left ttm-btn-color-dark" href="{{url('/blog/integre-pasarela-de-pago-paypal-laravel')}}"><i class="fa fa-minus"></i>Leer más</a>
                                        </div>
                                        <div class="ttm-social-share-wrapper">
                                            <a href="#" class="ttm-social-share-icon_btn"><i class="fa fa-share-alt"></i></a>
                                            <div class="social-icons circle">
                                                <ul class="m-0">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->



                        <div class="pagination-block">
                            <span class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right widget_border">
                        <aside class="widget widget-search with-title">
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                                </label>
                                <button class="btn ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit" value="Search"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </form>
                        </aside>
                        <aside class="widget widget-categories with-title">
                            <h3 class="widget-title">Servicios</h3>
                            <ul>
                                <li><a href="{{url('/servicios/desarrollo-web')}}">Desarrollo Web</a></li>
                                <li><a href="{{url('/servicios/desarrollo-de-sistemas')}}">Desarrollo de Sistemas</a></li>
                                <li><a href="{{url('/servicios/posicionamiento-seo')}}">Posicionamiento SEO</a></li>
                                <li><a href="{{url('/servicios/diseno-grafico')}}">Diseño Grafico</a></li>
                                <li><a href="{{url('/creacion-diseno-y-administracion-facebook')}}">Diseño de post Fanpage Facebook</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Artículos Recientes</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="blog-single.html"><img src="company/images/blog/blog-01-150x150.jpg" alt="post-img"></a>
                                    <div class="post-detail">
                                        <span class="post-date"><i class="fa fa-calendar"></i>August 20, 2020</span>
                                        <a href="blog-single.html">Colour Contrast Know-How for Signage</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img src="company/images/blog/blog-02-150x150.jpg" alt="post-img"></a>
                                    <div class="post-detail">
                                        <span class="post-date"><i class="fa fa-calendar"></i>August 20, 2020</span>
                                        <a href="blog-single.html">Customer Experience & Signage Trends</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img src="company/images/blog/blog-03-150x150.jpg" alt="post-img"></a>
                                    <div class="post-detail">
                                        <span class="post-date"><i class="fa fa-calendar"></i>August 20, 2020</span>
                                        <a href="blog-single.html">High-Impact Seasonal Signage to Set Go</a>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                        {{--<aside class="widget tagcloud-widget">--}}
                            {{--<h3 class="widget-title">Tags</h3>--}}
                            {{--<div class="tagcloud">--}}
                                {{--<a href="#" class="tag-cloud-link">Agency</a>--}}
                                {{--<a href="#" class="tag-cloud-link">Banner</a>--}}
                                {{--<a href="#" class="tag-cloud-link">Business</a>--}}
                                {{--<a href="#" class="tag-cloud-link">Creative</a>--}}
                                {{--<a href="#" class="tag-cloud-link">Design</a>--}}
                                {{--<a href="#" class="tag-cloud-link">LifeStyle</a>--}}
                                {{--<a href="#" class="tag-cloud-link">Marketing</a>--}}
                                {{--<a href="#" class="tag-cloud-link">Startup</a>--}}
                            {{--</div>--}}
                        {{--</aside>--}}
                        <aside class="widget widget-contact ttm-bgcolor-darkgrey">
                            <div class="contact_img">
                                <img class="img-fluid" src="images/single-img-10.jpg" alt="single_09">
                            </div>
                            <div class="contact_shape_bg ttm-bgcolor-darkgrey text-center">
                                <h4>Cómo podemos ayudar</h4>


                                <p>Si necesita ayuda, no dude en contactarnos.</p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="#">¡Contáctenos!</a>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>

    </div><!--site-main end-->


@endsection