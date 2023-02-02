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
                            <h2 class="title">Realizar Deploy APP Laravel
                                a DigitalOcean</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span><a title="Homepage" href="{{url('/blog')}}">Blog</a>
                                </span>/
                            <span>Deploy</span>
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
                        <article class="post ttm-blog-single clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{asset('assets/images/blog/laravel-digitalocean.png')}}" alt="">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>UI Design</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>John Doe</span>
                                        <span class="ttm-meta-line comments-links"><i class="fa fa-comments"></i>2 Comments</span>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <h2>Cómo implementar Laravel en el Ocean Digital</h2>
                                        <p>En este tutorial, los guiaré paso a paso sobre cómo implementar Laravel en el Ocean Digital
                                            para que pueda impulsar su proyecto local de laravel a la nube. Utilizaremos Digital Ocean
                                            como nuestro proveedor de alojamiento de cloud. Digital Ocean es la mejor opción en mi
                                            opinión porque es económico, extremadamente rápido y le permite tener un mínimo de 10 gotas
                                            (entornos de servidor). Puede configurarlos según sus necesidades, como para aplicaciones
                                            PHP, Ruby, Node o Python.</p>
                                        <br>
                                        <h4>¿Que es Digital Ocean, Droplet?</h4>
                                        <p>DigitalOcean es conocido por proporcionar servidores de muy alto rendimiento. Su velocidad de
                                            red es de 1 Gbps; Todos los discos duros son SSD y un increíble tiempo de arranque de solo 55
                                            segundos. Los nodos de DigitalOcean se colocan en la parte superior mediante pruebas de
                                            rendimiento independientes.</p>

                                        <p>DigitalOcean tiene una gran cantidad de documentación accesible para su administración, y dado
                                            que todavía es un host VPS moderadamente básico, generalmente no hay mucha necesidad de soporte.
                                            Por lo tanto, no ofrecen ayuda por teléfono y los tiempos de respuesta por correo electrónico
                                            pueden ser lentos, probablemente debido a la gran cantidad de clientes que están apoyando.</p>
                                        <p>Así mismo, en DigitalOcean el pago es por uso. Esto significa que si a mitad de mes deseas
                                            apagar el droplet creado, o cancelarlo, podrás hacerlo y pagar por lo que corresponde
                                        </p>
                                        <br>
                                        <h4>Registro en Digital Ocean + 50$ Gratis!!!</h4>
                                        <p>Registro en DigitalOcean. Ingresar tu nombre, correo y
                                            contraseña. También, brinda la opción de registrarse con tu cuenta de Google.</p>

                                        <p>Además, gracias a su sistema de referidos, podes obtener 50$ dolares gratis si te registras
                                            por la invitación del usuario de DigitalOcean, podrás utilizarlos para crear tus
                                            droplets. Si lo deseas, te puedes registrar con mi invitación haciendo clic aquí o en la
                                            imagen de abajo para obtener tus 50$ dolares que te servirán por 60 días. Es una buena
                                            opción para comenzar a probar sus servicios.</p>
                                        <blockquote>Si te registras en la plataforma por invitación de algún usuario, obtienes 50$
                                            gratuitos de bienvenida. En este caso, te invito a registrarte
                                            <a href="https://m.do.co/c/16e8c5d942fd" class="badge tag active" title="Registro en Digital Ocean + 50$ Gratis!!!">haciendo clic aquí</a>.
                                        </blockquote>
                                        <br>
                                        <h4>Crear tu primer droplet en Digital Ocean</h4>
                                        <p>Digital Ocean ofrece uno de los mejores servicios de VPS y a un precio justo.</p>

                                        <p>A diferencia de los hosting tradicionales (aquellos que tienen CPanel), en Digital Ocean
                                            puedes configurar tú mismo el stack que tu aplicación requiere. Además, el equipo de soporte
                                            responde de forma atenta y en poco tiempo.</p>

                                        <p>Un droplet es una máquina virtual, a la que tendrás acceso por SSH (vía consola).</p>

                                        <p>En Digital Ocean puedes crear tantos droplets como requieras. Incluso puedes tener varias
                                            aplicaciones sobre el mismo droplet (lo que resulta muy útil si deseas tener en línea tus
                                            primeros proyectos).</p>

                                        <p>Así mismo, en Digital Ocean el pago es por uso. Eso significa que si a mitad de mes deseas
                                            apagar el droplet que creaste, o cancelarlo, podrás hacerlo y pagar por lo que corresponde
                                            :)</p>

                                        <p>Empecemos entonces.</p>
                                        <br>
                                        <h4>Tu primer Droplet</h4>
                                        <p>Para iniciar, debes dar clic al botón verde superior.</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/boton-crear-droplet.png')}}" alt="Tu primer Droplet" title="Tu primer Droplet">
                                            </div>
                                        </div>
                                        <p>Al presionar este botón, cargará una página para configurar los parámetros del droplet a
                                            crear; y lo primero será definir una imagen.</p>

                                        <p>En nuestro caso usaremos el stack LAMP para no hacer toda la configuración desde 0.</p>

                                        <p>Para ello debes dirigirte a la pestaña Marketplace y seleccionar LAMP on 18.04, tal como lo
                                            muestra la imagen.</p>
                                        <br>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/image-droplet-marketplace.png')}}" alt="Tamaño de Droplet" title="Tamaño de Droplet">
                                            </div>
                                        </div>
                                        <p>Lo siguiente será definir el tamaño que tendrá nuestro droplet. Cada opción tiene
                                            características distintas y suponen un precio a pagar por mes.</p>

                                        <p>Incluso se detalla el precio por hora, porque si decidimos susponder nuestro droplet, solo se
                                            nos cobrará por el consumo correspondiente.</p>

                                        <p>En nuestro caso vamos a elegir el plan más básico. Podremos escalar fácilmente en un futuro,
                                            de ser necesario.</p>
                                        <br>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/droplet-size.png')}}" alt="Tu primer Droplet" title="Tu primer Droplet">
                                            </div>
                                        </div>
                                        <p>Posterior a ello no es necesario cambiar nada más; a menos que desees usar un datacenter en
                                            específico, o asignar un nombre en particular a tu droplet.</p>

                                        <p>Sin más, damos click al botón de crear, y se nos mostrará una barra de progreso que
                                            representa la creación de nuestro droplet.</p>
                                        <br>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/confirmar-y-crear-droplet.png')}}" alt="Confirmar y Crear Droplet"  title="Confirmar y Crear Droplet">
                                            </div>
                                        </div>
                                        <p>Cuando la creación haya finalizado <strong>recibirás un correo con los datos del
                                                droplet.</strong> Este correo contendrá una contraseña por defecto para que puedas
                                            conectarte a tu droplet vía SSH.</p>

                                        <p>Como yo me encuentro en Windows, usaré la herramienta PuTTy para hacer posible esta conexión. En
                                            Linux o Mac, la terminal de por sí ya soporta los comandos para conectarse vía SSH.</p>
                                        <br>
                                        <h4>Configuración del Droplet</h4>
                                        <p>Para esto tenemos que conectarnos a la máquina virtual, e instalar lo necesario para que
                                            nuestro proyecto de Laravel funcione sin inconvenientes.</p>
                                        <p>Lo primero que haremos será asegurarnos de que todo está correctamente actualizado:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span class="token function">apt-get</span> update
<span class="token function">sudo</span> <span class="token function">apt-get</span> dist-upgrade</code></pre>
                                        <p>De seguro tu droplet ya está preconfigurado, si escogiste la opción LAMP. Pero estos comandos
                                            nos dan la seguridad de tener todo al día.</p>

                                        <p>Una vez que hemos actualizado, activamos el módulo <code>mod_rewrite</code> de Apache con el
                                            siguiente comando:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> a2enmod rewrite</code></pre>
                                        <h3>Configurando MySQL para producción</h3>
                                        <p>Al crear un droplet, una contraseña para MySQL se genera por defecto y se guarda en <code>/root/.digitalocean_password.</code>
                                        </p>

                                        <p>Como vamos a necesitar esta contraseña para hacer la configuración de nuestra base de datos,
                                            accedemos a este archivo usando el comando <code>nano</code>, de esta forma:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">nano</span> /root/.digitalocean_password</code></pre>
                                        <p>Al acceder encontraremos algo como lo siguiente:</p>
                                        <pre class=" language-bash"><code class=" language-bash">root_mysql_pass<span
                                                        class="token operator">=</span><span class="token string">"e715055efa949813d3be27ed4909dd869f4c3a57237252bb"</span></code></pre>
                                        <p>Entonces copiamos lo que está entre las comillas dobles, e iniciamos nuestra configuración
                                            con el siguiente comando:</p>
                                        <pre class=" language-bash"><code class=" language-bash">mysql_secure_installation</code></pre>
                                        <p>Aquí se nos pedirá ingresar la contraseña (en versiones más recientes no lo solicita; en caso
                                            que sí, debemos pegar lo que copiamos antes).</p>

                                        <p>El comando iniciará la configuración, y te preguntará por varios detalles.</p>

                                        <p>Para responder con un sí debes escribir una "y". Cualquier otro caracter se corresponde con
                                            un no. Responde según convenga.</p>
                                        <p>En resumen, las preguntas serán las siguientes (y las respuestas que usaremos en este caso
                                            son también las siguientes):</p>
                                        <ul class="list-guide">
                                            <li>¿Desea instalar un plugin para validar la fortaleza de las contraseñas?: No</li>
                                            <li>¿Desea cambiar la contraseña para el usuario principal de la base de datos?: Sí</li>
                                            <li>Nueva contraseña: [Aquí debes ingresar la que consideres adecuada; es importante cambiar
                                                la contraseña por motivos de seguridad y tenerla guardada en algún lugar importante]
                                            </li>
                                            <li>Volver a ingresar la contraseña: [Repetimos la nueva contraseña que usaremos en
                                                adelante]
                                            </li>
                                            <li>¿Desea eliminar los usuarios anónimos? Sí</li>
                                            <li>Deshabilitar conexión remota a la base de datos: Sí</li>
                                            <li>¿Desea eliminar las tablas de prueba y sus accesos? Sí</li>
                                            <li>¿Desea recargar los privilegios de las tablas ahora? Sí</li>

                                        </ul>
                                        <br>
                                        <h4>Instalación de phpMyAdmin</h4>
                                        <p>Instalar phpMyAdmin es un paso opcional. Vamos a hacerlo como parte de este tutorial ya que
                                            la
                                            mayoría cuando empieza suele trabajar bastante con esta herramienta.</p>

                                        <p>Según lo necesites, recuerda que también puedes habilitar una conexión remota y usar otro
                                            cliente de MySQL (como Workbench, DataGrip, Sequel Pro, etcétera).</p>

                                        <p>Ejecuta el siguiente comando para iniciar con el proceso de instalación:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span
                                                        class="token function">apt-get</span> <span
                                                        class="token function">install</span> phpmyadmin</code></pre>
                                        <p>El instalador te hará varias preguntas; tenemos que:</p>
                                        <ul class="list-guide">
                                            <li>Seleccionar Apache2</li>
                                            <li>Escoger YES cuando nos pregunte <code>Configure database for phpmyadmin with
                                                    dbconfig-common?</code></li>
                                            <li>Ingresar nuestra nueva contraseña de MySQL (que configuramos hace instantes)</li>
                                            <li>Repetir nuevamente la contraseña</li>
                                        </ul>
                                        <p>Una vez instalado editamos el archivo de configuración de Apache:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span class="token function">nano</span> /etc/apache2/apache2.conf</code></pre>

                                        <p>Y añadimos esta línea al final de todo:</p>
                                        <pre class=" language-markup"><code
                                                    class=" language-markup">Include /etc/phpmyadmin/apache.conf</code></pre>
                                        <p>Con ello finalizamos la instalación, y debemos reiniciar Apache antes de continuar:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span class="token function">service</span> apache2 restart</code></pre>
                                        <p>La instalación que hemos hecho hasta ahora nos permitirá administrar nuestras base de datos
                                            fácilmente accediendo a /phpmyadmin desde la IP de nuestro droplet.</p>

                                        <p>Hasta aquí, la configuración resulta útil para cualquier proyecto de PHP. Ahora pasaremos a
                                            configurar puntos más específicos con relación a Laravel.</p>
                                        <br>
                                        <h4>Configuración específica para Laravel</h4>
                                        <p>Lo primero que haremos será instalar composer:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">curl</span> -sS https://getcomposer.org/installer <span
                                                        class="token operator">|</span> php
<span class="token function">sudo</span> <span
                                                        class="token function">mv</span> composer.phar /usr/local/bin/composer</code></pre>
                                        <p>Y luego GIT, para hacer deploy a través de un repositorio:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span
                                                        class="token function">apt-get</span> <span
                                                        class="token function">install</span> <span
                                                        class="token function">git</span></code></pre>
                                        <p>Genial. Ya tenemos todo listo para clonar nuestro proyecto Laravel (a partir de un
                                            repositorio
                                            remoto que se puede encontrar en Github, Bitbucket, Gitlab u otro).</p>

                                        <p>Para ello nos ubicamos en /var/www de la siguiente manera:</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('/assets/images/blog/cd-var-www.png')}}" width="500" alt="Ccente System en Github " title="Ccente System en Github "
                                                     class="gallery2">
                                            </div>
                                        </div>
                                        <p>¡Y clonamos nuestro repositorio!</p>

                                        <p>En mi caso usaré:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span class="token function">git</span> clone https://github.com/Roelcc10/web-seo.git</code></pre>
                                        <p>Como mi proyecto se llama gestion-incidencias voy a verificar que esta carpeta se haya creado
                                            correctamente ingresando con cd y luego consultando su contenido con ls como lo muestra la
                                            imagen:</p>
                                        <p>Nuestra carpeta se ha creado. Pero recuerda: un proyecto Laravel tiene dependencias sobre
                                            otros paquetes. Estas dependencias se especifican en el archivo <code>composer.json.</code>
                                        </p>

                                        <p>Entonces para instalar lo necesario ejecutamos el siguiente comando:</p>
                                        <pre class=" language-bash"><code class=" language-bash">composer <span class="token function">install</span></code></pre>
                                        <p>La descarga de las dependencias probablemente tarde un par de minutos, dependiendo del
                                            proyecto.</p>

                                        <p>Nota: Si no puedes instalar las dependencias por no contar con las extensiones de php
                                            requeridas por Laravel, y usas php7.2, puedes instalarlas usando:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span
                                                        class="token function">apt-get</span> <span
                                                        class="token function">install</span> php7.2-curl php7.2-gd php7.2-json php7.2-mbstring php7.2-intl php7.2-mysql php7.2-xml php7.2-zip</code></pre>
                                        <p>Una vez que haya finalizado esta descarga, debemos dar permisos a la carpeta
                                            <code>storage</code>. Para ello ejecutamos:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span class="token function">chown</span> -R www-data: storage
<span class="token function">sudo</span> <span class="token function">chmod</span> -R 755 storage</code></pre>

                                        <br>
                                        <h4>Apuntar a la carpeta /public</h4>
                                        <p>Así es. Estamos muy cerca del final. Lo que nos falta es que nuestro host reconozca a la
                                            carpeta <code>public </code>como la ruta base de nuestro proyecto.</p>

                                        <p>Para ello tenemos que editar un archivo de configuración de Apache con el siguiente
                                            comando:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">nano</span> /etc/apache2/sites-enabled/000-default.conf</code></pre>
                                        <p>Aquí tenemos que reemplazar estas lineas:</p>
                                        <pre class=" language-bash"><code class=" language-bash">DocumentRoot /var/www/html

<span class="token operator">&lt;</span>Directory /var/www/html/<span class="token operator">&gt;</span></code></pre>
                                        <p>Por estas 2, respectivamente:</p>
                                        <pre class=" language-bash"><code class=" language-bash">DocumentRoot /var/www/gestion-incidencias/public

<span class="token operator">&lt;</span>Directory /var/www/gestion-incidencias/public/<span
                                                        class="token operator">&gt;</span></code></pre>
                                        <p>Y agregar estas 2 líneas dentro de la etiqueta <code>Directory</code>:</p>
                                        <pre class=" language-bash"><code class=" language-bash">RewriteEngine On
RewriteBase /var/www/gestion-incidencias/public</code></pre>
                                        <p>Guardamos los cambios en el archivo, y reiniciamos Apache una última vez:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">sudo</span> <span class="token function">service</span> apache2 restart</code></pre>
                                        <p>Creando nuestro archivo de configuración .env</p>
                                        <br>
                                        <p>Nuestro servidor ya está configurado, pero recordemos que todo proyecto Laravel se basa en un
                                            archivo <code>.env</code> para guardar allí las credenciales que usa nuestro sistema.</p>

                                        <p>Este archivo <code>.env</code> forma parte de nuestro <code>.gitignore</code> por lo que
                                            (como se espera) no fue clonado y tenemos que crearlo.</p>

                                        <p>Para crear este archivo escribimos:</p>
                                        <pre class=" language-bash"><code class=" language-bash"><span
                                                        class="token function">nano</span> .env</code></pre>
                                        <p>Y para definir su contenido simplemente vamos a copiar nuestro archivo <code>.env</code> que
                                            usamos de forma local (como guía).</p>

                                        <p>Ten en cuenta que podemos tener una configuración distinta para producción y desarrollo. En
                                            ese caso nuestros archivos <code>.env</code> serán distintos.</p>

                                        <p>Un ejemplo simple para que se entienda esto es lo siguiente: de forma local no uso contraseña
                                            para conectarme a MySQL, pero en producción de hecho que existe una contraseña, que hace
                                            poco definimos.</p>
                                        <br>
                                        <h4>Migraciones, seeders y demás</h4>

                                        <p>En mi archivo <code>.env</code> la variable <code>DB_DATABASE</code> tiene como valor <code>incidencias</code>.
                                            Eso significa que ese es el nombre de la base de datos que usa mi proyecto.</p>

                                        <p>Lo que haré entonces será crear esta base de datos.</p>

                                        <p>Tú debes hacer lo mismo: Crear la base de datos que tu proyecto requiere (se puede hacer
                                            desde phpMyAdmin, o desde la consola misma).</p>

                                        <p>Esta base de datos estará totalmente vacía, pero las migraciones harán magia:</p>
                                        <pre class=" language-bash"><code class=" language-bash">php artisan migrate</code></pre>
                                        <p>Si tus seeders solo contienen datos de prueba que usas de forma local, no será necesario
                                            ejecutarlos aquí.</p>

                                        <p>En caso que los datos sean importantes para el funcionamiento en producción, puedes usar:</p>
                                        <pre class=" language-bash"><code class=" language-bash">php artisan db:seed</code></pre>
                                        <p>O en su defecto, usar el siguiente comando (equivalente a los 2 anteriores):</p>
                                        <pre class=" language-bash"><code class=" language-bash">php artisan migrate --seed</code></pre>
                                        <p>Y eso es todo.</p>
                                        {{--                        ===========FALTA CUANDO NO SE PUEDE INICIAR SESION EN MYSQL{{}}--}}


                                    </div>
                                </div>
                                <div class="social-media-block">
                                    <div class="d-sm-flex justify-content-between">
                                        <div class="ttm-social-share-wrapper mt-15">
                                            <h6 class="font-weight-normal m-0 mr-2">Compartir: </h6>
                                            <ul class="social-icons circle">
                                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="mt-15">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-grey mr-2" href="{{url('/nosotros')}}">Nosotros</a>
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-grey" href="{{url('/servicios')}}">Servicios</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttm-blog-classic-box-comment clearfix">
                                    <div id="comments" class="comments-area">

                                        <div class="comment-respond">
                                            <div id="disqus_thread">
                                                <p class="text-center">Cargando comentarios ...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </article><!-- post end -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right widget_border">
                        @include('web.includes.aside-article')
                    </div>
                </div><!-- row end -->
            </div>
        </div>

    </div><!--site-main end-->

@endsection
@section('script')
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
//        /*
        var disqus_config = function () {
            this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = '{{url()->current()}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        //        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ccente-system.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection