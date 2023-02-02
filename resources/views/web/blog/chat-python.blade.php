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
                            <h2 class="title">Cómo crear un bot para Messenger desde cero</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span><a title="Homepage" href="{{url('/blog')}}">Blog</a>
                                </span>/
                            <span>Chat Bot</span>
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

                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>Python</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Roel Ccente G.</span>

                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>En la actualidad existen muchas herramientas para crear chatbots, sin la
                                            necesidad de
                                            programarlos.</p>

                                        <p>Algunas herramientas son buenas y otras no lo son tanto. Esto se determina
                                            principalmente por
                                            la facilidad de uso, y los distintos escenarios que cubren.</p>

                                        <p>¿Pero qué pasa si queremos <b>desarrollar nuestro propio chatbot desde
                                                cero</b>, sin depender
                                            de herramientas de terceros?</p>

                                        <p>¿Es acaso eso posible? ¿Realmente podemos construir un chatbot que nos
                                            resulte útil?</p>

                                        <p>La respuesta es sí. Es posible, y hoy veremos cómo hacerlo.</p>
                                        <p>En resumen:</p>
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                            <li><i class="fa fa-check"></i>
                                                <div class="font-weight-normal ttm-list-li-content"> Vamos a crear un
                                                    bot para Facebook Messenger
                                                </div>
                                            </li>
                                            <li><i class="fa fa-check"></i>
                                                <div class="font-weight-normal ttm-list-li-content">Este bot lo vamos a
                                                    desarrollar usando Python
                                                </div>
                                            </li>
                                            <li><i class="fa fa-check"></i>
                                                <div class="font-weight-normal ttm-list-li-content">Y lo vamos a tener
                                                    alojado de forma gratuita gracias al servicio Google App Engine
                                                </div>
                                            </li>
                                        </ul>

                                        <br>
                                        <h4>¿Por qué desarrollar nuestro propio chatbot en vez de usar una
                                            herramienta?</h4>

                                        <p>Existen aplicaciones, que cuentan con una interfaz gráfica de usuario, y que
                                            nos permiten
                                            crear nuestros propios bots. ¿Por qué hemos de desarrollar uno desde
                                            cero?</p>

                                        <p>Tenemos 3 razones principales:</p>
                                        <ul class="list-guide">
                                            <li><b>Es gratis. </b>La capa gratuita de App Engine es muy generosa, por lo
                                                que es muy poco
                                                probable que excedamos el límite. Esto ocurriría sólo si tenemos varios
                                                miles de
                                                usuarios comunicándose con nuestro bot continuamente. De ser el caso,
                                                nuestro éxito
                                                superaría con creces nuestra inversión en hosting.
                                            </li>
                                            <li><b>Para aprender.</b> ¿Realmente no sientes curiosidad por ver cómo se
                                                desarrolla un
                                                chatbot desde cero?
                                            </li>
                                            <li><b>Ir más lejos. </b>Las herramientas para crear chatbots pueden ser muy
                                                interesantes,
                                                pero realmente estamos limitados a lo que ofrecen. Desarrollar nuestro
                                                propio chatbot,
                                                nos permitirá ser originales, y desarrollar lo que deseemos. Inclusive,
                                                hasta podríamos
                                                desarrollar nuestra propia plataforma para creación de chatbots.
                                            </li>
                                        </ul>
                                        <br>
                                        <h4>Escogiendo un canal para nuestro chatbot</h4>

                                        <p>Podemos construir un bot para distintos canales. Entre los canales más
                                            populares tenemos
                                            Facebook Messenger, Slack, Twitter y Telegram.</p>

                                        <p>En este artículo vamos a hablar de forma específica acerca del desarrollo de
                                            chatbots para
                                            Facebook Messenger.</p>

                                        <p>¿Por qué? Principalmente porque Messenger es la plataforma más popular para
                                            chatbots. Casi
                                            todas
                                            las herramientas para construir chatbots se centran en Messenger, y algunas
                                            incluso sólo
                                            soportan Messenger. Y existe una buena razón para ello: presenta 2.167
                                            millones de usuarios
                                            activos al mes (dato correspondiente a inicios del 2018).</p>

                                        <p>Otra razón por la que se tiende a priorizar Messenger: botones de respuesta
                                            rápida.</p>

                                        <p>Hay botones que nuestro chatbot puede ofrecer a los usuarios como un atajo y
                                            ahorrar que
                                            ellos
                                            lo tengan que escribir. Esto no sólo hace que el bot sea más atractivo (¿a
                                            quién le gusta
                                            tener
                                            que escribir desde un móvil?), también hace que nuestro trabajo como
                                            desarrolladores de
                                            chatbots
                                            sea mucho más sencillo.</p>

                                        <p>Si ofrecemos botones a los usuarios, entonces ellos los usarán. Esto
                                            significa que no debemos
                                            preocuparnos por "parsear" consultas arbitrarias, que un usuario podría
                                            escribir (en
                                            lenguaje
                                            natural y probablemente fuera de contexto).</p>

                                        <p>Guiar a nuestros usuarios es bueno para ellos, pero lo es también para
                                            nosotros.</p>
                                        <br>
                                        <h3>El mágico árbol de nodos</h3>

                                        <p>Vamos a diseñar nuestro bot basados en un árbol de nodos.</p>

                                        <p>Los posibles estados del bot se determinan en función a este árbol.</p>

                                        <p>Los nodos representan:</p>
                                        <ul class="list-guide">
                                            <li>Los mensajes que envía el bot</li>
                                            <li>Las posibles respuestas que puede dar el usuario</li>
                                        </ul>
                                        <p>El siguiente árbol representa entonces cada flujo de conversación
                                            posible.</p>

                                        <p>Dedica unos segundos para analizarlo.</p>
                                        <pre class=" language-yaml"><code class=" language-yaml">say: "Hola! Por favor selecciona una opción para poder ayudarte."
answers:

  Cursos disponibles:
    say: subiremos varios tutoriales! Todos ellos serán muyinteresantes y totalmente prácticos. Por favor selecciona la opción que te resulte más interesante.
    answers:
      Dominar Javascript:
        say: Javascript
      Aprender Laravel:
        say: Laravel
      Integrar Laravel+Vue:
        say: Laravel + VUE

  Tengo una duda:
    say: ¿Es una duda sobre un video que viste en el canal de Youtube? ¿O necesitas ayuda personalizada?
    answers:
      Es sobre un video:
        say: Gracias por visitar el canal. Por favor escribe tu duda en un comentario, y te responderé por allí tan pronto como pueda.
      Busco asesoría:
        say: Gracias por tu interés. Por favor visita este enlace, donde verás cómo puedo ayudarte https://www.ccentesystem.com/asesoria

  Solicitar desarrollo:
    say: ¿Tienes definido formalmente el proyecto y estás dispuesto a invertir en él?
    answers:
      Aún no está definido:
        say: Por favor cuéntame más y entonces te diré cómo puedo ayudarte.
      No tengo presupuesto:
        say: Entiendo. En tal caso te recomiendo inscribirte a mis cursos sobre programación. Puedes aprender mucho con los tutoriales, y además siempre atiendo todas las dudas.
      Sí y sí:
        say: Genial. Por favor envíame un documento con los requerimientos y te contactaré tan pronto como tenga una propuesta.</code></pre>
                                        <p>Como ves, el árbol de conversación es bastante sencillo. Está escrito en
                                            formato YAML (Yet
                                            Another Markup Language), lo que facilita su lectura.</p>

                                        <p>El nodo raíz especifica el primer mensaje que el bot envía al usuario. En
                                            este caso el
                                            mensaje
                                            inicial es "Hola. ¿En qué te puedo ayudar?", y según la respuesta del
                                            usuario, la
                                            conversación
                                            con el bot fluye.</p>
                                        <br>
                                        <h4>¿Qué necesitamos para empezar a desarrollar nuestro bot?</h4>

                                        <p>Para desarrollar nuestro bot, tenemos primero que configurar un par de cosas
                                            en Facebook.</p>

                                        <p>Las instrucciones oficiales se pueden <a
                                                    href="https://developers.facebook.com/docs/messenger-platform/getting-started/app-setup"
                                                    target="_blank">encontrar aquí</a>, pero en resumen, vamos a
                                            necesitar:</p>
                                        <ul class="list-guide">
                                            <li>Una página en Facebook — cada bot necesita una página diferente.</li>
                                            <li>Una cuenta de desarrollador, que nos permitirá registrar nuestra app en
                                                Facebook.
                                            </li>
                                            <li>Una app en Facebook para obtener acceso a un <code>secret access
                                                    token</code> (lo
                                                necesitaremos posteriormente).
                                            </li>
                                        </ul>
                                        <p>Los bots para Facebook funcionan a través de webhooks, que son URLs que
                                            nosotros definimos y
                                            que
                                            Facebook Messenger usará para interactuar con nuestro bot.</p>

                                        <p>Para publicar nuestro webhook usaremos <a
                                                    href="https://cloud.google.com/appengine/"
                                                    title="Google App Engine">Google App Engine</a>. La
                                            ventaja de esto es que resulta
                                            gratuito para bajos volúmenes de tráfico, y escala automáticamente si
                                            necesitamos más. Así
                                            mismo
                                            usaremos Python como lenguaje de programación, pero en realidad se puede
                                            lograr también con
                                            cualquier otro lenguaje.</p>

                                        <p>Vamos a necesitar descargar el <a
                                                    href="https://cloud.google.com/appengine/docs/standard/python/download"
                                                    title="Python SDK">Python SDK</a> y crear un proyecto de
                                            <a href="https://console.cloud.google.com/project?pli=1"
                                               title="Google Cloud ">Google
                                                Cloud </a>si aún no
                                            tenemos
                                            uno.</p>
                                        <br>
                                        <h3>Creando nuestro Webhook</h3>

                                        <p>La primera misión de nuestro webhook es permitirle a Facebook verificar que
                                            realmente se
                                            trata de un webhook auténtico. Para ello simplemente tenemos que gestionar
                                            una petición GET,
                                            que contiene un token de verificación (es una cadena secreta y aleatoria,
                                            que debemos
                                            definir en Facebook).</p>

                                        <p>La verificación es posible usando el siguiente código:</p>
                                        <pre class=" language-python"><code class=" language-python"><span
                                                        class="token keyword">class</span> <span
                                                        class="token class-name">MainPage</span><span
                                                        class="token punctuation">(</span>webapp2<span
                                                        class="token punctuation">.</span>RequestHandler<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
    <span class="token keyword">def</span> <span class="token function">get</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
        self<span class="token punctuation">.</span>response<span class="token punctuation">.</span>headers<span
                                                        class="token punctuation">[</span><span
                                                        class="token string">'Content-Type'</span><span
                                                        class="token punctuation">]</span> <span class="token operator">=</span> <span
                                                        class="token string">'text/plain'</span>
        mode <span class="token operator">=</span> self<span class="token punctuation">.</span>request<span
                                                        class="token punctuation">.</span>get<span
                                                        class="token punctuation">(</span><span
                                                        class="token string">"hub.mode"</span><span
                                                        class="token punctuation">)</span>
        <span class="token keyword">if</span> mode <span class="token operator">==</span> <span class="token string">"subscribe"</span><span
                                                        class="token punctuation">:</span>
            challenge <span class="token operator">=</span> self<span class="token punctuation">.</span>request<span
                                                        class="token punctuation">.</span>get<span
                                                        class="token punctuation">(</span><span
                                                        class="token string">"hub.challenge"</span><span
                                                        class="token punctuation">)</span>
            verify_token <span class="token operator">=</span> self<span class="token punctuation">.</span>request<span
                                                        class="token punctuation">.</span>get<span
                                                        class="token punctuation">(</span><span
                                                        class="token string">"hub.verify_token"</span><span
                                                        class="token punctuation">)</span>
            <span class="token keyword">if</span> verify_token <span class="token operator">==</span> VERIFY_TOKEN<span
                                                        class="token punctuation">:</span>
                self<span class="token punctuation">.</span>response<span class="token punctuation">.</span>write<span
                                                        class="token punctuation">(</span>challenge<span
                                                        class="token punctuation">)</span>
        <span class="token keyword">else</span><span class="token punctuation">:</span>
            self<span class="token punctuation">.</span>response<span class="token punctuation">.</span>write<span
                                                        class="token punctuation">(</span><span class="token string">"Ok"</span><span
                                                        class="token punctuation">)</span></code></pre>


                                        <p>Es así como definimos una clase para gestionar peticiones (usando el
                                            framework
                                            <code>webapp2</code>).</p>

                                        <p>Aunque no se muestra en el fragmento anterior, esta clase presenta también un
                                            constructor que
                                            se
                                            encarga de inicializar nuestra clase bot.</p>
                                        <br>
                                        <h3>Gestionando mensajes de usuarios</h3>

                                        <p>Necesitamos interpretar los mensajes que escriben los usuarios. Para ello
                                            primero necesitamos
                                            capturar estos mensajes.</p>

                                        <p>Estos son enviados por Facebook a nuestro webhook, a través de peticiones
                                            POST.</p>
                                        <pre class=" language-python"><code class=" language-python"><span
                                                        class="token keyword">def</span> <span class="token function">post</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
    logging<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span
                                                        class="token string">"Data obtenida desde Messenger: %s"</span><span
                                                        class="token punctuation">,</span> self<span
                                                        class="token punctuation">.</span>request<span
                                                        class="token punctuation">.</span>body<span
                                                        class="token punctuation">)</span>
    data <span class="token operator">=</span> json<span class="token punctuation">.</span>loads<span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">.</span>request<span
                                                        class="token punctuation">.</span>body<span
                                                        class="token punctuation">)</span>

    <span class="token keyword">if</span> data<span class="token punctuation">[</span><span class="token string">"object"</span><span
                                                        class="token punctuation">]</span> <span class="token operator">==</span> <span
                                                        class="token string">"page"</span><span
                                                        class="token punctuation">:</span>
        <span class="token keyword">for</span> entry <span class="token keyword">in</span> data<span
                                                        class="token punctuation">[</span><span class="token string">"entry"</span><span
                                                        class="token punctuation">]</span><span
                                                        class="token punctuation">:</span>

            <span class="token keyword">for</span> messaging_event <span class="token keyword">in</span> entry<span
                                                        class="token punctuation">[</span><span
                                                        class="token string">"messaging"</span><span
                                                        class="token punctuation">]</span><span
                                                        class="token punctuation">:</span>
                sender_id <span class="token operator">=</span> messaging_event<span
                                                        class="token punctuation">[</span><span
                                                        class="token string">"sender"</span><span
                                                        class="token punctuation">]</span><span
                                                        class="token punctuation">[</span><span
                                                        class="token string">"id"</span><span class="token punctuation">]</span>
                recipient_id <span class="token operator">=</span> messaging_event<span
                                                        class="token punctuation">[</span><span
                                                        class="token string">"recipient"</span><span
                                                        class="token punctuation">]</span><span
                                                        class="token punctuation">[</span><span
                                                        class="token string">"id"</span><span class="token punctuation">]</span>

                <span class="token keyword">if</span> messaging_event<span class="token punctuation">.</span>get<span
                                                        class="token punctuation">(</span><span
                                                        class="token string">"message"</span><span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
                    <span class="token comment"># Eventos de tipo message</span>

                <span class="token keyword">if</span> messaging_event<span class="token punctuation">.</span>get<span
                                                        class="token punctuation">(</span><span
                                                        class="token string">"postback"</span><span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
                    <span class="token comment"># Eventos de tipo postback</span></code></pre>


                                        <p>Aquí "parseamos" la información que recibimos en formato JSON desde Facebook,
                                            para que
                                            posteriormense se pueda analizar y procesar.</p>

                                        <p>Básicamente Facebook Messenger nos permite suscribirnos a eventos de 2 tipos:
                                            eventos <code>message</code>
                                            (cuando el usuario escribe) y eventos <code>postback</code> (que son
                                            enviados cuando un
                                            usuario hace clic en
                                            un botón de respuesta).</p>

                                        <p>Entonces iteramos sobre los messaging events en general, y dependiendo el
                                            tipo decidimos cómo
                                            actuar.</p>

                                        <p>Luego de recibir la información que nos envía Facebook e identificar los
                                            mensajes, invocamos
                                            al
                                            método handle para que nuestra clase Bot se encargue de su
                                            procesamiento.</p>

                                        <p>El fragmento anterior sólo muestra la estructura general.</p>
                                        <br>
                                        <h3>Enviando mensajes a los usuarios</h3>
                                        <p>Cuando instanciamos nuestra clase Bot, enviamos la función
                                            <code>send_message </code>al
                                            constructor.</p>

                                        <p>Esta función permite a nuestro bot devolver mensajes de respuesta a los
                                            usuarios. Y su
                                            definición es la siguiente:</p>

                                        <pre class=" language-python"><code class=" language-python"><span
                                                        class="token keyword">def</span> <span
                                                        class="token function">send_message</span><span
                                                        class="token punctuation">(</span>recipient_id<span
                                                        class="token punctuation">,</span> message_text<span
                                                        class="token punctuation">,</span> possible_answers<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
    headers <span class="token operator">=</span> <span class="token punctuation">{</span>
        <span class="token string">"Content-Type"</span><span class="token punctuation">:</span> <span
                                                        class="token string">"application/json"</span>
    <span class="token punctuation">}</span>

    message <span class="token operator">=</span> get_postback_buttons_message<span class="token punctuation">(</span>message_text<span
                                                        class="token punctuation">,</span> possible_answers<span
                                                        class="token punctuation">)</span>
    <span class="token keyword">if</span> message <span class="token keyword">is</span> <span
                                                        class="token boolean">None</span><span
                                                        class="token punctuation">:</span>
        message <span class="token operator">=</span> <span class="token punctuation">{</span><span
                                                        class="token string">"text"</span><span
                                                        class="token punctuation">:</span> message_text<span
                                                        class="token punctuation">}</span>

    raw_data <span class="token operator">=</span> <span class="token punctuation">{</span>
        <span class="token string">"recipient"</span><span class="token punctuation">:</span> <span
                                                        class="token punctuation">{</span>
            <span class="token string">"id"</span><span class="token punctuation">:</span> recipient_id
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token string">"message"</span><span class="token punctuation">:</span> message
    <span class="token punctuation">}</span>
    data <span class="token operator">=</span> json<span class="token punctuation">.</span>dumps<span
                                                        class="token punctuation">(</span>raw_data<span
                                                        class="token punctuation">)</span>

    logging<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span
                                                        class="token string">"Enviando mensaje a %r: %s"</span><span
                                                        class="token punctuation">,</span> recipient_id<span
                                                        class="token punctuation">,</span> message_text<span
                                                        class="token punctuation">)</span>

    r <span class="token operator">=</span> urlfetch<span class="token punctuation">.</span>fetch<span
                                                        class="token punctuation">(</span><span class="token string">"https://graph.facebook.com/v2.6/me/messages?access_token=%s"</span> <span
                                                        class="token operator">%</span> ACCESS_TOKEN<span
                                                        class="token punctuation">,</span>
                       method<span class="token operator">=</span>urlfetch<span
                                                        class="token punctuation">.</span>POST<span
                                                        class="token punctuation">,</span> headers<span
                                                        class="token operator">=</span>headers<span
                                                        class="token punctuation">,</span> payload<span
                                                        class="token operator">=</span>data<span
                                                        class="token punctuation">)</span>
    <span class="token keyword">if</span> r<span class="token punctuation">.</span>status_code <span
                                                        class="token operator">!=</span> <span
                                                        class="token number">200</span><span
                                                        class="token punctuation">:</span>
        logging<span class="token punctuation">.</span>error<span class="token punctuation">(</span><span
                                                        class="token string">"Error %r enviando mensaje: %s"</span><span
                                                        class="token punctuation">,</span> r<span
                                                        class="token punctuation">.</span>status_code<span
                                                        class="token punctuation">,</span> r<span
                                                        class="token punctuation">.</span>content<span
                                                        class="token punctuation">)</span></code></pre>

                                        <p>La variable <code>recipient_id</code> que esta función recibe se corresponde
                                            con el
                                            identificador del usuario
                                            al que vamos a responder. Junto a esta variable tenemos como parámetros: el
                                            texto a enviar,
                                            y
                                            algunos botones de respuesta rápida (que el usuario podrá presionar).</p>

                                        <p>Primero nos aseguramos que las cabeceras de nuestra petición especifiquen el
                                            formato a usar
                                            (JSON), y entonces agregamos nuestros botones postback como parte del
                                            mensaje.</p>

                                        <p>Estos botones no estarán presentes siempres, sólo en algunos casos,
                                            dependiendo de lo que se
                                            defina en nuestro árbol. De todas formas, para los casos en que están
                                            presentes, la función
                                            <code>get_postback_buttons_message</code> es la encargada de dar a estos
                                            botones el formato
                                            adecuado (según
                                            lo exige Facebook).</p>

                                        <p>Finalmente hacemos nuestra petición al Facebook Graph API, enviando el <code>access
                                                token</code> que Facebook
                                            nos dio cuando registramos nuestra app.</p>
                                        <br>
                                        <h3>Ejecutando nuestro bot</h3>
                                        <p>El código final de nuestro archivo principal, contiene lo siguiente, que es
                                            necesario para
                                            construir la clase principal y ejecutar el webhook que va a representar a
                                            nuestro bot:</p>
                                        <pre class=" language-python"><code class=" language-python">app <span
                                                        class="token operator">=</span> webapp2<span
                                                        class="token punctuation">.</span>WSGIApplication<span
                                                        class="token punctuation">(</span><span
                                                        class="token punctuation">[</span>
    <span class="token punctuation">(</span><span class="token string">'/'</span><span
                                                        class="token punctuation">,</span> MainPage<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">,</span>
<span class="token punctuation">]</span><span class="token punctuation">,</span> debug<span
                                                        class="token operator">=</span><span
                                                        class="token boolean">True</span><span
                                                        class="token punctuation">)</span></code></pre>


                                    </div>
                                </div>
                                <div class="row layout-title">
                                    <div class="col-12 align-self-center">
                                        <h3>Cerebro de nuestro bot</h3>
                                        <p>Y ahora llegamos a un punto interesante.</p>

                                        <p>¿Cómo sabe el bot qué decir? El cerebro de nuestro bot se corresponde con el
                                            archivo <code>bot.py.</code>
                                        </p>

                                        <pre class=" language-python"><code class=" language-python"><span
                                                        class="token keyword">class</span> <span
                                                        class="token class-name">Bot</span><span
                                                        class="token punctuation">(</span><span
                                                        class="token builtin">object</span><span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
    <span class="token keyword">def</span> <span class="token function">__init__</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">,</span> send_callback<span
                                                        class="token punctuation">,</span> users_dao<span
                                                        class="token punctuation">,</span> tree<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
        self<span class="token punctuation">.</span>send_callback <span class="token operator">=</span> send_callback
        self<span class="token punctuation">.</span>users_dao <span class="token operator">=</span> users_dao
        self<span class="token punctuation">.</span>tree <span class="token operator">=</span> tree

    <span class="token keyword">def</span> <span class="token function">handle</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">,</span> user_id<span
                                                        class="token punctuation">,</span> user_message<span
                                                        class="token punctuation">,</span> is_admin<span
                                                        class="token operator">=</span><span
                                                        class="token boolean">False</span><span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
        <span class="token comment"># lógica del bot</span></code></pre>

                                        <p>La clase es inicializada con 3 parámetros:</p>

                                        <ul class="list-guide">
                                            <li>una función callback (que ya se ha definido antes) para devolver
                                                mensajes a los
                                                usuarios,
                                            </li>
                                            <li>un objeto que proporciona el acceso a datos (para guardar el historial
                                                de las
                                                conversaciones), y
                                            </li>
                                            <li>el árbol que contiene los posibles flujos de conversación (se obtiene a
                                                partir del YAML
                                                mostrado anteriormente).
                                            </li>
                                        </ul>

                                        <p>Como es de notarse, la clase <code>handle </code>es la que contiene la lógica
                                            principal del
                                            bot.</p>

                                        <p>El código anterior sólo muestra un fragmento del método. Pero en resumen
                                            aquí:</p>

                                        <ul class="list-guide">
                                            <li>Primero registramos el mensaje recibido del usuario, y obtenemos el
                                                historial de
                                                mensajes intercambiados con dicho usuario, usando nuestra instancia
                                                <code>DAO (data
                                                    access object)</code>.
                                            </li>
                                            <li>Esto nos permitirá reproducir las acciones del usuario, para descubrir
                                                dónde es que nos
                                                encontramos según el árbol.
                                            </li>

                                            <li>Se definen un mensaje y unos botones por defecto, que serán devueltos en
                                                caso que el
                                                usuario diga algo que el bot no entiende.
                                            </li>

                                            <li>Y así mismo se define una variable para determinar si el usuario desea
                                                reiniciar la
                                                conversación con el bot.
                                            </li>
                                        </ul>
                                        <p>El historial de mensajes es muy importante. Estos mensajes guardan los textos
                                            enviados tanto
                                            por el usuario como por el bot.</p>

                                        <p>Finalmente, tras recorrer todo el historial, escribimos nuestra respuesta (en
                                            un log y en una
                                            base de datos propia), y enviamos el mensaje de respuesta al usuario.</p>
                                        <h3>La última pieza del rompecabezas</h3>
                                        <p>Lo último pero no menos importante es la definición de un <code>data access
                                                object</code> y
                                            un modelo que represente a los eventos notificados por Messenger.</p>

                                        <p>Estas clases en conjunto nos permiten gestionar toda la información
                                            relacionada con los
                                            mensajes intercambiados (considerando 3 actores: usuarios, bot y
                                            administrador).</p>

                                        <pre class=" language-python"><code class=" language-python"><span
                                                        class="token keyword">class</span> <span
                                                        class="token class-name">UserEvent</span><span
                                                        class="token punctuation">(</span>ndb<span
                                                        class="token punctuation">.</span>Model<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
    user_id <span class="token operator">=</span> ndb<span class="token punctuation">.</span>StringProperty<span
                                                        class="token punctuation">(</span><span
                                                        class="token punctuation">)</span>
    author <span class="token operator">=</span> ndb<span class="token punctuation">.</span>StringProperty<span
                                                        class="token punctuation">(</span><span
                                                        class="token punctuation">)</span>
    message <span class="token operator">=</span> ndb<span class="token punctuation">.</span>StringProperty<span
                                                        class="token punctuation">(</span><span
                                                        class="token punctuation">)</span>
    date <span class="token operator">=</span> ndb<span class="token punctuation">.</span>DateTimeProperty<span
                                                        class="token punctuation">(</span>auto_now_add<span
                                                        class="token operator">=</span><span
                                                        class="token boolean">True</span><span
                                                        class="token punctuation">)</span>

<span class="token keyword">class</span> <span class="token class-name">UserEventsDao</span><span
                                                        class="token punctuation">(</span><span class="token builtin">object</span><span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
    <span class="token keyword">def</span> <span class="token function">add_user_event</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">,</span> user_id<span
                                                        class="token punctuation">,</span> author<span
                                                        class="token punctuation">,</span> message<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
        event <span class="token operator">=</span> UserEvent<span class="token punctuation">(</span><span
                                                        class="token punctuation">)</span>
        event<span class="token punctuation">.</span>user_id <span class="token operator">=</span> user_id
        event<span class="token punctuation">.</span>author <span class="token operator">=</span> author
        event<span class="token punctuation">.</span>message <span class="token operator">=</span> message
        event<span class="token punctuation">.</span>put<span class="token punctuation">(</span><span
                                                        class="token punctuation">)</span>
        logging<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span
                                                        class="token string">"Evento registrado: %r"</span><span
                                                        class="token punctuation">,</span> event<span
                                                        class="token punctuation">)</span>

    <span class="token keyword">def</span> <span class="token function">get_user_events</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">,</span> user_id<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
        events <span class="token operator">=</span> UserEvent<span class="token punctuation">.</span>query<span
                                                        class="token punctuation">(</span>UserEvent<span
                                                        class="token punctuation">.</span>user_id <span
                                                        class="token operator">==</span> user_id<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">.</span>order<span
                                                        class="token punctuation">(</span>UserEvent<span
                                                        class="token punctuation">.</span>date<span
                                                        class="token punctuation">)</span>
        <span class="token keyword">return</span> <span class="token punctuation">[</span><span
                                                        class="token punctuation">(</span>event<span
                                                        class="token punctuation">.</span>message<span
                                                        class="token punctuation">,</span> event<span
                                                        class="token punctuation">.</span>author<span
                                                        class="token punctuation">)</span> <span class="token keyword">for</span> event <span
                                                        class="token keyword">in</span> events<span
                                                        class="token punctuation">]</span>

    <span class="token keyword">def</span> <span class="token function">remove_user_events</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">,</span> user_id<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
        events <span class="token operator">=</span> UserEvent<span class="token punctuation">.</span>query<span
                                                        class="token punctuation">(</span>UserEvent<span
                                                        class="token punctuation">.</span>user_id <span
                                                        class="token operator">==</span> user_id<span
                                                        class="token punctuation">)</span>
        quantity <span class="token operator">=</span> events<span class="token punctuation">.</span>count<span
                                                        class="token punctuation">(</span><span
                                                        class="token punctuation">)</span>
        <span class="token keyword">for</span> event <span class="token keyword">in</span> events<span
                                                        class="token punctuation">:</span>
            event<span class="token punctuation">.</span>key<span class="token punctuation">.</span>delete<span
                                                        class="token punctuation">(</span><span
                                                        class="token punctuation">)</span>
        logging<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span
                                                        class="token string">"Se eliminaron %r eventos"</span><span
                                                        class="token punctuation">,</span> quantity<span
                                                        class="token punctuation">)</span>

    <span class="token keyword">def</span> <span class="token function">admin_messages_exist</span><span
                                                        class="token punctuation">(</span>self<span
                                                        class="token punctuation">,</span> user_id<span
                                                        class="token punctuation">)</span><span
                                                        class="token punctuation">:</span>
        events <span class="token operator">=</span> UserEvent<span class="token punctuation">.</span>query<span
                                                        class="token punctuation">(</span>UserEvent<span
                                                        class="token punctuation">.</span>user_id <span
                                                        class="token operator">==</span> user_id<span
                                                        class="token punctuation">,</span> UserEvent<span
                                                        class="token punctuation">.</span>author <span
                                                        class="token operator">==</span> <span
                                                        class="token string">'admin'</span><span
                                                        class="token punctuation">)</span>
        <span class="token keyword">return</span> events<span class="token punctuation">.</span>count<span
                                                        class="token punctuation">(</span><span
                                                        class="token punctuation">)</span> <span
                                                        class="token operator">&gt;</span> <span
                                                        class="token number">0</span></code></pre>

                                        <p>Nuestro DAO hace uso de <a
                                                    href="https://cloud.google.com/datastore/docs/concepts/overview"
                                                    title="Google Datastore">Google Datastore</a>. Y la API de Python
                                            hace que el uso de Datastore sea muy fácil.</p>

                                        <p>En el fragmento anterior:</p>

                                        <ul class="list-guide">
                                            <li>Primero creamos una clase modelo <code>UserEvent</code>, que especifica
                                                los campos y sus tipos. En
                                                nuestro caso, el user ID, el autor del mensaje, y el mensaje mismo son
                                                <code>String</code>, y
                                                finalmente la fecha del evento es de tipo <code>DateTime</code>.
                                            </li>

                                            <li>Para crear y almacenar un nuevo evento de usuario, simplemente
                                                instanciamos esta clase,
                                                fijamos las propiedades, y llamamos al método <code>put()</code> desde
                                                el objeto.
                                            </li>

                                            <li>Para obtener los eventos de un usuario, llamamos a la función <code>query()</code>
                                                y usamos como
                                                filtro el <code>user ID</code>. Aquí ordenamos los eventos por fecha, y
                                                devolvemos una lista de
                                                tuplas.
                                            </li>
                                        </ul>
                                        <br>
                                        <h4>Despliegue (deployment del bot)</h4>
                                        <p>Hemos dado un vistazo al código que compone nuestro bot! Ahora corresponde
                                            realizar el proceso de despliegue, para finalmente conectarlo con
                                            Messenger.</p>

                                        <p>Para desplegar nuestra aplicación sobre App Engine, usamos el comando <code>gcloud </code>que
                                            viene con el App Engine SDK:</p>

                                        <pre class=" language-bash"><code
                                                    class=" language-bash">gcloud app deploy</code></pre>
                                        <p>Una vez realizado el proceso de deployment, la URL de nuestro webhook
                                            será:</p>
                                        <pre class=" language-bash"><code class=" language-bash">http://<span
                                                        class="token punctuation">[</span>PROJECT_ID<span
                                                        class="token punctuation">]</span>.appspot.com/</code></pre>

                                        <p>Entonces actualizamos nuestra app Facebook con esta URL de webhook y
                                            estaremos listos!</p>
                                        <h4><b>El mundo de los chatbots no tiene límites</b></h4>


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