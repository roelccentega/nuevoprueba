@extends('layouts.landing')
@section('content')
    <!-- Page Content -->
    <div class="warpper clearfix">
        <!-- Header -->
        <header class="navbar-header">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <style>
                        .navbar-brand img{
                            width: 220px;
                        }
                    </style>
                    <a class="navbar-brand" href="/" title="Ir a la página de inicio">
                        <img src="{{url('images/logolanding.png')}}" alt="Company Cc&M" title="Company Cc&M">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon  icon_menu"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a  class="nav-link section-scroll" href="/asesoria" title="Solicitar Asesoría">Solicitar Asesoría</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link section-scroll" href="/desarrollo" title="Solicitar Desarrollo">Solicitar Desarrollo</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link section-scroll" href="/acerca-de-roel-ccente-galicio" title="Acerca del Autor">Acerca del Autor</a>
                                </li>
                                <li>
                                    <a href="#precio" class="nav-link btn btn-orange">Precio</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal" target="_blank" class="nav-link btn btn-blue" >WhatsApp   <i class="fa fa-whatsapp"></i></a>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>


        </header>
        <!--Header-->

        <!--Begin Hero Section-->

        <section id="home" class="hero">


            <!--container-->

            <div class="container">

                <div class="row">

                    <div class="col-md-7 col-12 col-sm-7">

                        <div class="hero-text contact-form">

                            <h3>Solicita tu paquete de promoción</h3>
                            <form action=""  id="form">

                                <div class="form-group">
                                    <label for="name">¿Cómo te llamas? (*)</label>
                                    <input type="text" class="form-control " id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="project">Cuéntanos sobre tu proyecto</label>
                                    <textarea type="text" class="form-control " id="project" name="project"></textarea>
                                    <span>Tu nueva idea de negocio, tu empresa actual o el proyecto que quieres implementar</span>
                                </div>

                                <div class="form-group">
                                    <label for="topic">¿Qué servicio va más acorde a tu negocio? (*)</label>
                                    <select name="services" id="topic" class="form-control">
                                        <option>Página Web Profesional</option>
                                        <option>Tienda Virtual</option>
                                        <option>Desarrollo de Sistema</option>
                                        <option>Posicionamiento SEO</option>
                                        <option>Diseño Grafico</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Teléfono</label>
                                            <input type="text" class="form-control phone" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Correo Electrónico</label>
                                            <input type="text" class="form-control " id="email" name="email">
                                        </div>
                                    </div>

                                </div>
                                <div id="respuesta"></div>

                                <div class="btn-per">
                                    <button id="submit" class="formulario__submit">Enviar a WhatsApp <i class="fa fa-whatsapp"></i></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--container-->
        </section>
        <section class="padd-80">
            <div class="row">
                <div class="container">
                    <div class="newsletter-bloc">
                        <div class="newsletter-bloc-inner">
                            <div class="row">
                                <div class="col-md-7 col-xs-12 col-sm-7">
                                    <h3>Desarrollo de Páginas Web Profesionales desde S/. 480.00</h3>
                                    <p>Impulsamos tu negocio a Internet con un Diseño y Desarrollo Unico. </p>
                                </div>
                                <div class="col-md-4 col-xs-12 col-sm-4 text-right ">
                                    <div class="btn-pdf">
                                        <a href="{{asset('/landing/promocion-web-ccentesystem.pdf')}}" target="_blank" title="Paquete de promoción Web profesional"> Ver nuestra Promoción <i class="fa fa-file-pdf-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-p" class="text-bloc padd-180">
            <!--container-->
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 col-lg-6">
                        <img src="assets/images/box-images.png" class="img-responsive" alt="Transforma Tu Negocio a la era Digital" title="Transforma Tu Negocio a la era Digital"/>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <h2 class="title-head">Transforma Tu Negocio a la era Digital</h2>
                        <p>Somos Expertos en Diseño y Desarrollo de Webs y sistemas, APPs y Posicionamiento SEO. Creamos
                            páginas modernas y optimizadas, mejorando su posicionamiento web en buscadores, ayudando a
                            nuestros clientes que sus páginas lleguen al TOP 10 de Google. Estamos en una misión para
                            hacer que su negocio sea rentable.</p>
                        <a href="tel:+51998077074" class="btn btn-blue" title="Llamar Ahora"><i class="fa fa-phone"></i>
                            Llamar Ahora</a>
                    </div>
                </div>
            </div>
            <!--container-->
        </section>
        <section id="pricing" class="padd-80">
            <div class="container">
                <div class="row">
                    <div class=" col-md-6 offset-md-3">
                        <div class="text-center">
                            <h2 class="title-h2" id="precio">Plan de Promoción</h2>
                            <p class="font-p mg-tp-30 mg-bt-30">
                                <b>Los Precios no incluyen IGV</b> | El Pago es 50% al Iniciar y 50% Al finalizar el proyecto
                                <br>
                                Las Imágenes / Videos / Textos son proporcionados por el cliente o podemos utilizar bancos de impagenes gratuitas
                                <br>
                                Entrega entre 05 – 07 Días | Soporte Técnico los 365 días | Satisfacción 100% Garantizada
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-4 col-lg-6">
                        <div class="prining-table">
                            <div class="pricing-table-inner fadeInLeft">
                                <ul >
                                    <li class="title-p">
                                        <h4>Página Web</h4>
                                    </li>
                                    <li class="price color-2"><span>S/. 480.00</span></li>
                                    <li class="mark-d"><span>Pago único</span></li>
                                    <li class="table-content">
                                        <ul class="list-pers">
                                            <li>☑ Diseño y Desarrollo.</li>
                                            <li>☑ Hosting (gratis medio año).</li>
                                            <li>☑ Dominio.com (gratis un año).</li>
                                            <li>☑ Creación y asesoría en medios sociales.</li>
                                            <li>☑ Totalmente Responsive.</li>
                                            <li>☑ Certificado SSL(gratis por un año).</li>
                                            <li>☑ Registros en: Google My Bussines, Google Analytics, Google Search Console.</li>
                                            <li>☑ Soporte 24/7.</li>
                                        </ul>
                                    </li>
                                    <li class="button-p">
                                        <a href="{{asset('/landing/promocion-web-ccentercompany.pdf')}}" target="_blank" class="btn btn-color-2" title="Paquete de promoción Web profesional ">Ver el plan completo <i class="fa fa-file-pdf-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-lg-6">
                        <div class="prining-table">
                            <div class="pricing-table-inner fadeInLeft">
                                <ul>
                                    <li class="title-p">
                                        <h4>Tienda Virtual</h4>
                                    </li>
                                    <li class="price color-1"> <span>s/. 999.00</span></li>
                                    <li class="mark-d"> <span>Pago único</span></li>
                                    <li class="table-content">
                                        <ul>
                                            <li>☑ Tienda Virtual con Control de Ventas y Pedidos.</li>
                                            <li>☑ Pasarela de Pagos.</li>
                                            <li>☑ Carrito de compras</li>
                                            <li>☑ Dominio.com (gratis por un año).</li>
                                            <li>☑ Hosting Incluído (gratis por medio año)</li>
                                            <li>☑ Versión ligera para Mobile</li>
                                            <li>☑ Certificado SSL(gratis por un año).</li>
                                            <li>☑ Registros en: Google My Bussines, Google Analytics, Google Search Console.</li>
                                            <li>☑ Soporte 24/7.</li>
                                        </ul>
                                    </li>
                                    <li class="button-p">
                                        <a href="{{asset('/landing/tienda-virtual.pdf')}}" target="_blank" class="btn btn-blue" title="Paquete de promoción Tienda Virtual">Ver Plan Completo <i class="fa fa-file-pdf-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services-feature" class="bg-color">
            <div class="row">
                <div class="col-md-6 col-lg-6 padd-0">
                    <div class="img-carousel">
                        <div class="slick-img" data-index="0">
                            <img src="assets/images/services/2.jpg" alt="Página Web Profesional" title="Página Web Profesional">
                        </div>
                        <div class="slick-img" data-index="1">
                            <img src="assets/images/services/1.jpg" alt="Tienda Virtuales" title="Tienda Virtuales">
                        </div>
                        <div class="slick-img" data-index="2">
                            <img src="assets/images/services/3.jpg" alt="Desarrollo de Sistema" title="Desarrollo de Sistema">
                        </div>
                        <div class="slick-img" data-index="3">
                            <img src="assets/images/services/4.jpg" alt="Posicionamiento SEO" title="Posicionamiento SEO">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 padd-0">
                    <div class="text-carousel">
                        <div class="content-text-slick" data-index="0">
                            <h4>Página Web Profesional</h4>
                            <p>Al ser expertos en posicionamiento web, las páginas web que Company Cc&M desarrolla no
                                sólo
                                son atractivas para sus usuarios, sino también para Google.</p>
                            <p>Son muchos los factores que intervienen durante la definición y concepción de un sitio
                                web,
                                siendo decisiva la fase del diseño web, cuando una empresa decide tener o consolidar su
                                presencia online y durante la cual toman forma muchas decisiones acerca de cómo será
                                esta
                                presencia y su implantación.</p>
                        </div>
                        <div class="content-text-slick" data-index="1">
                            <h4>Tienda Virtuales</h4>
                            <p>Te ofrecemos una tienda virtual diseñado para que tu negocio venda por internet e incluye
                                carrito de compras, panel de administración, productos ilimitados y más beneficios para
                                que tu negocio se destaque.</p>
                        </div>
                        <div class="content-text-slick" data-index="2">
                            <h4>Desarrollo de Sistema</h4>
                            <p>Nuestra empresa está enfocada al desarrollo de software, sistemas 100% personalizados, somos
                                especialistas en programación de plataformas y aplicaciones web autoadministrables, estables
                                y escalables, aportando soluciones prácticas a sus problemas. Ofrecemos los servicios de
                                implementación de software en diversas tecnologías, cumpliendo con los estándares
                                internacionales de calidad y metodologías.</p>
                        </div>
                        <div class="content-text-slick" data-index="3">
                            <h4>Posicionamiento SEO</h4>
                            <p>El posicionamiento en buscadores u optimización de motores de búsqueda es el proceso de mejorar la visibilidad de un sitio web en los resultados orgánicos de los diferentes buscadores. También es frecuente nombrarlo por su título inglés, SEO (Search Engine Optimization)</p>
                            <p>Aunque existen miles de factores en los que un motor de búsqueda se basa para posicionar una página u otra se podría decir que hay dos factores básicos: la autoridad y la relevancia.</p>
                        </div>
                    </div>
                    <div class="caroussel-page">
                        <div class="caroussel-page-inner">
                            <a href="#" id="0"><img src="assets/images/paper-plane.svg" alt=""> </a>
                            <a href="#" id="1"><img src="assets/images/startup.svg" alt=""></a>
                            <a href="#" id="2"><img src="assets/images/promotion.svg" alt=""></a>
                            <a href="#" id="2"><img src="assets/images/like.svg" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-features" class="padd-80">
            <!--container-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="title-head">Equipo Experto</h2>
                       <p>¡EXPERTOS EN DESARROLLO! Las páginas web, Tiendas Virtuales y Sistemas que Ccenter Company desarrolla no sólo son atractivas para sus usuarios, sino también para Google.</p>
                        <div class="progrees-bar-content">
                            <div class="progrees-bar-text clearfix">
                                <span class=" float-left">Diseño de sitios web</span>
                                <span class=" float-right"> 98% </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width:98%"></div>
                            </div>
                        </div>
                        <div class="progrees-bar-content">
                            <div class="progrees-bar-text clearfix">
                                <span class=" float-left">Marketing de contenidos</span>
                                <span class=" float-right"> 96% </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width:96%"></div>
                            </div>
                        </div>
                        <div class="progrees-bar-content">
                            <div class="progrees-bar-text clearfix">
                                <span class=" float-left">Análisis</span>
                                <span class=" float-right"> 98% </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width:98%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <h2 class="title-head">SEO</h2>
                        <p class="font-p mg-tp-30 mg-bt-30">

                            <p>La razón más importante por la que es necesario el SEO es porque hace más útil tu página web tanto para los usuarios como para los motores de búsqueda.</p>

                            <p><b>Link Building</b><br>

                                El linkbuilding está muy relacionado con el concepto de PageRank. El PageRank es una calificación del 0 al 10 que Google le otorga a todo sitio web.</p>
                            <p><b>Informe Técnico</b><br>

                                Datos importantes sobre analítica y conversión, con un mayor detalle el tráfico orgánico generado, pero también hay una serie de métricas externas a la web.</p>
                            <p><b>White hat SEO</b><br>

                                Cumplimos las acciones éticamente correctas y que cumplen las directrices de los motores de búsqueda para posicionar una página web.</p>
                    </div>
                </div>
            </div>
            <!--container-->
        </section>
    </div>
    <!--End page cotnent-->
    <!--Footer-->
    <footer class="footer">
        <div class="footer-warpper ">
            <div class="footer-top">
                <div class="container ">
                    <div class="footer-bottom-content clearfix ">
                        <div class="row ">
                            <div class="col-lg-3 col-md-3">
                                <div class="logo-footer ">
                                    <img src="{{url('images/logolanding.png')}}" alt="Company Cc&M" title="Company Cc&M">
                                </div>
                                <div class="text-footer ">
                                    <p>
                                        Somos una empresa peruana que brinda servicios de: Diseño de Páginas Web en Peru, Diseño y Desarrollo de Sistemas y Web Administrables. en Lima - Peru
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <ul class="list-menu ">
                                    <li class="nav-item">
                                        <a href="/desarrollo" class="nav-link white-color" title="Solicitar Desarrollo">Solicitar Desarrollo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/asesoria" class="nav-link white-color" title="Solicitar Asesoría">Solicitar Asesoría</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/acerca-de-roel-ccente-galicio" class="nav-link white-color" title="Acerca del Autor">Acerca del Autor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/servicios" class="nav-link white-color" title="Servicios">Servicios</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <ul class="list-menu ">
                                    <li class="nav-item">
                                        <a href="/blog" class="nav-link white-color" title="Artículos profesionales">Tutoriales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/guia-de-inicio-de-programacion" class="nav-link white-color" title="Guía de Inicio de Programación">Guía de Inicio de Programación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/guia-de-inicio-de-desarrollo-web" class="nav-link white-color" title="Guía de Inicio de Desarrollo Web">Guía de Inicio de Desarrollo Web</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <h5>Contacto </h5>
                                <ul class="list-contact ">
                                    <li>965059553</li>
                                    <li> ventas@ccentercompany.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ">
                <!-- COPYRIGHT TEXT -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="copyright ">
                                <p>2023 © creado por <a href="https://www.ccentercompany.com" title="Company Cc&M">Ccenter Company</a>.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <ul class="list-social list-inline">
                                <li>
                                    <a href="https://www.facebook.com/companyccym/" target="_blank" title="Company Cc&M en Facebook">
                                        <i class="social_facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ccentesystem/" target="_blank" title="Company Cc&M en Instagram">
                                        <i class="social_instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/CcenteSystem" target="_blank" title="Company Cc&M en Twitter">
                                        <i class="social_twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/ccente-system" target="_blank" title="Company Cc&M en Linkedin">
                                        <i class="social_linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- COPYRIGHT TEXT -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('script')
    <script src="{{asset('landing/assets/js/form-whatsapp.js?v=3')}}"></script>
    <script src="{{asset('landing/assets/js/form-whatsapp2.js?v=2')}}"></script>
@endsection