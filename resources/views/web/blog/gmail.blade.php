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
                            <h2 class="title">Enviar correos electronicos
                                con Laravel y Gmail</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span><a title="Homepage" href="{{url('/blog')}}">Blog</a>
                                </span>/
                            <span>Gmail</span>
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
                                    <img class="img-fluid" src="{{asset('assets/images/blog/mails.jpg')}}" alt="">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>Gmail, Laravel</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Roel Ccente G.</span>

                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <h3>Configuración en Gmail</h3>

                                        <p>Puedes utilizar tu correo corporativo si lo tienes enlazado a Gmail. Y si aún no lo tienes, no te preocupes, puedes configurar con tu personal o cualquier otro correo de Gmail.</p>
                                        <p>Para poder realizar la integración de Gmail a nuestra aplicación en Laravel. </p>
                                        <p>Nos dirigimos la configuración de nuestra cuenta en Gmail.</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/configuracion-gmail.png')}}" alt="Configuración Gmail" title="Configuración Gmail">
                                            </div>
                                        </div>
                                        <p>Dar clic a "Administra tu cuenta de google"</p>
                                        <p>Una vez estando dentro nos dirigimos al apartado Seguridad</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/seguridad-gmail.png')}}" alt="Seguridad Gmail" title="Seguridad Gmail">
                                            </div>
                                        </div>
                                        <p>Buscar "Acceso de aplicaciones poco seguras" </p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/activar-acceso.png')}}" alt="Activar Acceso" title="Activar Acceso">
                                            </div>
                                        </div>
                                        <p>y dar clic en "Activar acceso(No se recomienda)", y estando dentro permitimos el acceso de aplicaciones poco segura.</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/permitir-acceso.png')}}" alt="Permitir Acceso" title="Permitir Acceso">
                                            </div>
                                        </div>
                                        <p>Una vez permitido el acceso, necesitamos generar un clave para nuestra aplicación Laravel.</p>
                                        <p>Para realizar ello debes <a href="htps://www.google.com/landing/2step/" class="badge tag active">entrar aquí, y activar la verificación de 2 pasos</a></p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/verificacion-dos-pasos.png')}}" alt="Verificación de dos pasos" title="Verificación de dos pasos">
                                            </div>
                                        </div>
                                        <p>Ingresa tu número telefónio te llegara el código de confirmación para activar la <b>verificación de dos pasos</b></p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/confirmar-codigo.png')}}" alt="Confirmar código" title="Confirmar código">
                                            </div>
                                        </div>
                                        <p>Una vez confirmado el código de verificación, visualizar el mensaje de éxito.</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/verificacion-exito.png')}}" alt="Verificacioón Correcta" title="Verificacioón Correcta">
                                            </div>
                                        </div>
                                        <p>Felicitaciones!!! Ahora, <a href="https://security.google.com/settings/security/apppasswords" title="podrás autorizar a tu aplicación el uso de correo" class="badge tag active">podrás autorizar a tu aplicación el uso de correo</a></p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/contraseñas-aplicacion.png')}}" alt="Contraseñas de Aplicación" title="Contraseñas de Aplicación">
                                            </div>
                                        </div>
                                        <p>Selecionar applicación, y escoger "Nombre personalizado" y podra añadir el nombre de aplicación Laravel</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/selecciona-aplicacion.png')}}" alt="Selección de Aplicación" title="Selección de Aplicación">
                                            </div>
                                        </div>
                                        <p>Guardar la clave generada, que la usaremos enseguida.</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/clave-aplicacion.png')}}" alt="Clave Aplicación" title="Clave Aplicación">
                                            </div>
                                        </div>
                                        <p>Urra! tu cuenta de Gmail está configurada para el envio de correos</p>
                                        <p>Ahora tenemos que indicar a Laravel qué datos se usara para enviar mails a través de esta cuenta de Gmail.</p>

                                        <br>
                                        <h3>Configurando Laravel</h3>
                                        <p>En nuestra caperta <code>config </code>de nuestro proyecto existe un archivo <code>mail.php</code>. Donde se encuentra las variables
                                            asociadas al envío de mails.</p>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('assets/images/blog/config.png')}}" alt="Config mails" title="Config mails">
                                            </div>
                                        </div>
                                        <p>Dentro del archivo encontramos:</p>
                                        <pre class=" language-php"><code class=" language-php"><span class="token single-quoted-string string">'driver'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_DRIVER'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'smtp'</span><span class="token punctuation">)</span><span class="token punctuation">,</span></code></pre>
                                        <p>Esta línea indica a Laravel:</p>
                                        <p>El <code>driver</code> que debes usar se encuentra definido en el archivo <code>.env</code> con el nombre de <code>MAil_DRIVER</code>. Sin embargo, si no la encuentras, usa <code>smtp</code></p>

                                        <p>De la misma forma se puede leer las siguientes lineas.</p>
                                        <pre class=" language-php"><code class=" language-php"><span class="token single-quoted-string string">'host'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_HOST'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'smtp.mailgun.org'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
<span class="token single-quoted-string string">'port'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_PORT'</span><span class="token punctuation">,</span> <span class="token number">587</span><span class="token punctuation">)</span><span class="token punctuation">,</span>

<span class="token single-quoted-string string">'from'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token punctuation">[</span>
    <span class="token single-quoted-string string">'address'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_FROM_ADDRESS'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'hello@example.com'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
    <span class="token single-quoted-string string">'name'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_FROM_NAME'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'Example'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
<span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token single-quoted-string string">'encryption'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_ENCRYPTION'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'tls'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>

<span class="token single-quoted-string string">'username'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_USERNAME'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
<span class="token single-quoted-string string">'password'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">env</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'MAIL_PASSWORD'</span><span class="token punctuation">)</span><span class="token punctuation">,</span></code></pre>

                                        <p>Por lo tanto, estos datos los vamos a poner dentro de nuestro archivo <code>.env</code>.</p>

                                        <p>¿Por qué en el archivo <code>.env</code> y no directamente en mail.php?</p>

                                        <p>Nos conviene definir estos valores en <code>.env</code> porque así podemos tener configuraciones distintas: por ejemplo, usar nuestro correo corporativo de Gmail en producción, pero usar el log de forma local para hacer pruebas.</p>

                                        <p>Además, las credenciales siempre deben definirse en el archivo <code>.env</code>, ya que este archivo no forma parte del código fuente (al usar GIT este archivo es ignorado, por lo que cada persona que tenga acceso al código, podrá usar la configuración que más le convenga).</p>

                                        <p>Ya para finalizar tenemos estos datos en nuestro <code>.env</code>:</p>
                                        <pre class=" language-markup"><code class=" language-markup">MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=micorreo@gmail.com
MAIL_PASSWORD=miclave
MAIL_ENCRYPTION=tls</code></pre>
                                        <p>Estos, permitirán a nuestra app Laravel enviar mails a través del correo Gmail.</p>

                                        <p>Solo debes reemplazar <code>MAIL_USERNAME</code> y <code>MAIL_PASSWORD</code> según el correo que estás usando.</p>

                                        <p>Opcionalmente también puedes definir estos 2 valores:</p>
                                        <pre class=" language-markup"><code class=" language-markup">MAIL_FROM_ADDRESS=micorreo@gmail.com
MAIL_FROM_NAME=Roel</code></pre>
                                        <p>Pero, no es obligatorio, ya que también puedes definir estos 2 últimos datos al momento de hacer el envío desde tu aplicación Laravel.</p>
                                        <br>
                                        <h3>Envío de mails</h3>

                                        <p>Una vez que tenemos configurado el envío de correos, podemos enviar tantos mails como se requiera.</p>

                                        <p>Veamos un ejemplo.</p>

                                        <p>Ahora mismo estoy desarrollando un Website.</p>



                                        <p>Como parte del proceso se envían correos electrónicos al correo configurado de recepción.</p>

                                        <p>Entonces empecemos por definir una clase <code>Mailable</code>:</p>
                                        <pre class=" language-markup"><code class=" language-markup">php artisan make:mail GeneralContactForm</code></pre>
                                        <p>Este comando va generar la clase <code>GeneralContactForm</code> en <code>app\Mail</code> con el siguiente contenido:</p>
                                        <pre class=" language-php"><code class=" language-php"><span class="token tag">class</span> GeneralContactForm<span class="token tag"> extends</span> Mailable
<span class="token punctuation">{</span>
    <span class="token function">use</span> <span class="token package">Queueable</span><span class="token punctuation">,</span> SerializesModels<span class="token punctuation">;</span>

    <span class="token function">public function</span> __construct<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token comment">//</span>
    <span class="token punctuation">}</span>

    <span class="token function">public function</span> build <span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token function">return</span> <span class="token table">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span>view<span class="token punctuation">(</span><span class="token single-quoted-string string">'view.name'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></code></pre>
                                        <ul class="list-guide">
                                            <li>Usaremos esta clase desde el controlador que enviará los mails.</li>
                                            <li>Como nos interesa pasarle datos a la vista del correo, vamos a añadir un atributo $distressCall (en realidad puedes usar cualquier otro nombre de variable, o incluso más variables, dependiendo de los datos que necesites usar en el mail).</li>
                                            <li>Ahora vamos a crear una carpeta <code>mails</code> en <code>resources/views</code> y a definir una vista llamada <code>contact.blade.php</code>.</li>

                                        </ul>
                                        <p>Por tanto nuestro código ahora se verá así:</p>
                                        <pre class=" language-php"><code class=" language-php"><span class="token tag">class</span> GeneralContactForm <span class="token tag">extends</span> Mailable
<span class="token punctuation">{</span>
    <span class="token tag">use</span> <span class="token package">Queueable</span><span class="token punctuation">,</span> SerializesModels<span class="token punctuation">;</span>

    <span class="token tag">public</span> <span class="token table">$data</span><span class="token punctuation">;</span>

    <span class="token tag">public function</span> __construct(<span class="token table">$data</span>)
    <span class="token punctuation">{</span>
        <span class="token table">$this</span><span class="token operator">-</span><span class="token operator">></span><span class="token table">data</span> <span class="token operator">=</span> <span class="token table">$data</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>

    <span class="token function">public function</span> build<span class="token punctuation">(</span><span class="token punctuation">)</span>
        <span class="token function">return</span> <span class="token table">$this</span>
            -><span class="token string">subject</span>('<span class="token single">Formulario de Contacto</span>')
            -><span class="token string">replyTo</span>(<span class="token table">$this</span>-><span class="token table">data</span>['<span class="token single">email</span>'])
            -><span class="token string">view</span>('<span class="token single">emails.contact</span>');
    <span class="token punctuation">}</span></code></pre>

                                        <p>Tú puedes, de la misma forma, pasar cualquier objeto según lo requieras. Y finalmente, podrás acceder a los datos desde la vista.</p>

                                        <p>En el ejemplo que estamos viendo, <code>contact.blade.php</code> se verá de la siguiente forma:</p>

                                        <pre class="language-bash"><code class="language-bash"><span><</span>!doctype HTML<span>></span><span><</span>
<span class="token tag">html</span> <span class="token attr-name">lang</span>="<span class=" token attr-value">es</span>"<span>></span>
<span><</span><span class="token tag">head</span><span>></span>
    <span><</span><span class="token tag">meta</span> <span class="token attr-name">charset</span>="<span class="token attr-value">UTF-8</span>"<span>></span>
    <span><</span><span class="token tag">meta</span> <span class="token attr-name">name</span>="<span class="token attr-value">viewport</span>" <span class="token attr-name">content</span>="<span class="token attr-value">width=device-width, user-scalable=no, initial-scale=1.0</span>" <span>></span>
    <span><</span><span class="token tag">title</span><span>></span>Formulario de Contacto<span><</span><span class="token tag">/title</span><span>></span>
<span><</span><span class="token tag">/head</span><span>></span>
<span><</span><span class="token tag">body</span><span>></span>
    <span><</span><span class="token tag">p</span><span>></span>Estos son los datos del mensaje:<span><</span><span class="token tag">/p</span><span>></span>
    <span><</span><span class="token tag">ul</span><span>></span>
        <span><</span><span class="token tag">li</span><span>></span>Nombre: <span>{</span>{ <span class="token table">$name </span>}} <span><</span><span class="token tag">/li</span><span>></span>
        <span><</span><span class="token tag">li</span><span>></span>Teléfono: <span>{</span>{ <span class="token table">$phone </span>}} <span><</span><span class="token tag">/li</span><span>></span>
        <span><</span><span class="token tag">li</span><span>></span>Mensaje: <span>{</span>{ <span class="token table">$content </span>}} <span><</span><span class="token tag">/li</span><span>></span>
    <span><</span><span class="token tag">/ul</span><span>></span>
<span><</span><span class="token tag">/body</span><span>></span>
<span><</span><span class="token tag">/html</span><span>></span></code></pre>
                                        <br>
                                        <h3>Controlador</h3>
                                        <p>Ahora cree un nuevo controlador para escribir y administrar todas las cosas PHP. Simplemente pegue el comando que se muestra a continuación para crear un controlador donde generemos la vista.</p>
                                        <pre class="language-bash"><code class="language-bash">php artisan make:controller WelcomeController</code></pre>

                                        <pre class="language-bash"><code class="language-bash"><span class="token function">public function</span> contact()
    {

        <span class="token function">return</span> view('<span class="token single">web.general.contact</span>');
    }
<span class="token function">public function</span> postContact(Request <span class="token table">$request</span>)
    {
        <span class="token table">$request</span>-><span class="token single">validate</span>([
            '<span class="token single">name</span>' => '<span class="token single">required</span>',
        ]);
        <span class="token table">$emails</span> = ['<span class="token single">roelcc10@gmail.com</span>'];
        <span class="token table">$mail</span> = <span class="token function">new</span> GeneralContactForm(<span class="token table">$request</span>-><span class="token string">all</span>());
        Mail::<span class="token string">to</span>(<span class="token table">$emails</span>)-><span class="token string">send</span>(<span class="token table">$mail</span>);
        <span class="token function">return</span> redirect('<span class="token single">/contacto</span>')-><span class="token string">with</span>('<span class="token single">status</span>','<span class="token single">¡Enhorabuena! Tu mensaje ha sido enviado con éxito.</span>');
    }
</code></pre>
                                    </div>
                                </div>
                                <div class="row layout-title">
                                    <div class="col-12 align-self-center">
                                        <h3>Vista del Formulario</h3>
                                        <p>Puede agregar cualquier formulario aquí con la forma que desee.</p>

                                        <pre class="language-bash"><code class="language-bash"><span><</span><span class="token tag">form</span> <span class="token string">class</span>="<span class="token single">form-ml</span>" <span class="token string">method</span>="<span class="token single">post</span>" <span class="token string">action</span>="<span class="token single">/contacto</span>">
<span>@</span>csrf
<span><</span><span class="token tag">input</span> <span class="token string">type</span>="<span class="token single">hidden</span>"<span class="token string">name</span>="<span class="token single">url</span>" <span class="token string">value</span>="<span class="token single">{{ request()->fullUrl() }}</span>">
<span><</span><span class="token tag">div </span><span class="token string">class</span>="<span class="token single">form-group</span>">
    <span><</span><span class="token tag">input </span><span class="token string">type</span>="<span class="token single">text</span>" <span class="token string">name</span>="<span class="token single">name</span>"  <span class="token string">placeholder</span>="<span class="token single">Nombre</span>" <span class="token string">class</span>="<span class="token single">form-control</span>">
<span><</span><span class="token tag">/div</span>>
<span><</span><span class="token tag">div</span> <span class="token string">class</span>="<span class="token single">form-group</span>">
    <<span class="token tag">input</span> <span class="token string">type</span>="<span class="token single">email</span>" <span class="token string">name</span>="<span class="token single">email</span>" <span class="token string">placeholder</span>="<span class="token single">Correo</span>" <span class="token string">class</span>="<span class="token single">form-control</span>">
<<span class="token tag">/div</span>>
<<span class="token tag">div </span><span class="token string">class</span>="<span class="token single">form-group</span>">
    <<span class="token tag">input</span> <span class="token string">type</span>="<span class="token single">text</span>" <span class="token string">name</span>="<span class="token single">phone</span>" <span class="token string">placeholder</span>="<span class="token single">Teléfono</span>" <span class="token string">class</span>="<span class="token single">form-control</span>">
<<span class="token tag">/div</span>>
<<span class="token tag">div </span><span class="token string">class</span>="<span class="token single">form-group</span>">
    <<span class="token tag">select </span><span class="token string">name</span>="<span class="token single">topic</span>" <span class="token string">class</span>="<span class="token single">form-control</span>">
    <<span class="token tag">option</span> <span class="token string">value</span>=""> Seleccione asunto <<span class="token tag">/option</span>>
        <<span class="token tag">option </span><span class="token string">value</span>="<span class="token single">Consultas / Presupuestos</span>"> Consultas / Presupuestos <<span class="token tag">/option</span>>
        <<span class="token tag">option </span><span class="token string">value</span>="<span class="token single">Empleos</span>"> Empleos <<span class="token tag">/option</span>>
        <<span class="token tag">option </span><span class="token string">value</span>="<span class="token single">Otros</span>"> Otros <<span class="token tag">/option</span>>
    <<span class="token tag">/select</span>>
<<span class="token tag">/div</span>>
<<span class="token tag">div </span><span>class</span>="<span class="token single">form-group</span>">
    <<span class="token tag">textarea </span><span class="token string">class</span>="<span class="token single">form-control</span>" <span class="token string">name</span>="<span class="token single">content</span>"  <span class="token string">cols</span>="<span class="token single">30</span>" <span class="token string">rows</span>="<span class="token single">10</span>" <span class="token string">placeholder</span>="<span class="token single">Mensaje</span>"><<span class="token tag">/textarea</span>>
<<span class="token tag">/div</span>>
<<span class="token tag">div </span><span class="token string">class</span>="<span class="token single">form-group text-center</span>">
    <<span class="token tag">button </span><span class="token string">type</span>="<span class="token single">submit</span>" <span class="token string">class</span>="<span class="token single">btn btn-info</span>">
        <<span class="token tag">i </span><span class="token string">class</span>="<span class="token single">glyphicon glyphicon-send</span>"><<span class="token tag">/i</span>>
        Enviar formulario
    <<span class="token tag">/button</span>>
<<span class="token tag">/div</span>>
<<span class="token tag">/form</span>></code></pre>
                                        <br>
                                        <h3>Rutas</h3>
                                        <p>Después de crear la vista con éxito, ahora abra el archivo <code>routes/web.php</code> y actualice las rutas para el formulario de pago.</p>

                                        <pre class="language-bash"><code class="language-bash">Route::<span class="token string">get</span>('<span class="token single">/contacto</span>','<span class="token single">WelcomeController@contact</span>');
Route::<span class="token string">post</span>('<span class="token single">/contacto</span>','<span class="token single">WelcomeController@postContact</span>');
</code></pre>
                                    </div>
                                </div>


                                <div class="row layout-title">
                                    <div class="col-12 align-self-center">
                                        <h3>Conclusión</h3>
                                        <p>Un resumen de lo que hicimos es:</p>
                                        <ul>
                                            <li>Primero hemos configurado una cuenta de Gmail para que permita enviar correos desde otras aplicaciones.</li>
                                            <li>Segundo, hemos indicando a Laravel qué driver usar y cuáles son las credenciales.</li>
                                            <li>Finalmente, hemos realizado el envío haciendo uso de una clase Mailable y una vista (también vimos cómo pasarle datos).</li>

                                        </ul>

                                        <p>Si tienes alguna duda puedes escribirme.</p>
                                        <p>Por último: si puedes ayudarme a compartir este artículo, estaría genial. Gracias.</p>
                                        <p><b>Post-data:</b> Si has seguido todos los pasos y obtienes un error con los datos de la cuenta de Gmail, es posible que las variables del archivo <code>.env</code> no se hayan actualizado.</p>

                                        <pre class="language-bash"><code class="language-bash">php artisan cofig:cache</code></pre>
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