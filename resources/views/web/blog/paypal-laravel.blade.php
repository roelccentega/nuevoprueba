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
                            <h2 class="title">Pasarela de pago Paypal en Laravel</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="fa fa-home mr-2"></i><a title="Homepage" href="{{url('/')}}">Inicio</a>
                                </span>
                            <span><a title="Homepage" href="{{url('/blog')}}">Blog</a>
                                </span>/
                            <span>Paypal</span>
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
                                    <img class="img-fluid" src="{{asset('assets/images/blog/laravel-paypal.jpg')}}" alt="">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line cat-links"><i class="fa fa-folder-open"></i>Paypal, Laravel</span>
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Roel Ccente G.</span>

                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <h4>Integrar la pasarela de pago de Paypal en Laravel para pagos rápidos en línea</h4>
                                        <p>Si está operativo en el circuito de comercio electrónico, debe haber sabido la importancia de
                                            las transacciones en línea. Como es la forma más viable y rápida de liquidar pagos en
                                            cualquier parte del mundo. Y debido a la evolución de la tecnología de Internet, hoy
                                            cualquiera puede comprar o vender productos fácilmente y puede liquidar pagos con
                                            transacciones en línea en todo el mundo.</p>
                                        <p>Pero las transacciones en línea también conllevan un alto riesgo de serias amenazas de
                                            seguridad. Por lo tanto, se requiere un mecanismo de seguridad robusto para pagos en línea
                                            para evitar posibles intentos maliciosos. Ahí es donde entra en juego la importancia de las
                                            pasarelas de pago de Laravel Paypal. A medida que estas puertas de enlace ayudan a las
                                            empresas a concentrarse y capitalizar los beneficios de las transacciones en línea, mientras
                                            mantienen a sus clientes y sistemas protegidos de las amenazas externas.</p>
                                        <br>
                                        <h4>Pasarela de pago</h4>

                                        <p>Payment Gateway es un servicio de comercio electrónico típico que ayuda a procesar pagos con
                                            tarjeta de crédito para negocios en línea. La funcionalidad principal de las pasarelas de
                                            pago es que facilitan las transacciones en línea mediante la transferencia de información
                                            confidencial de fondos entre los portales de pago y los procesadores / bancos de fondos
                                            front-end.</p>
                                        <br>
                                        <h4>¿Cómo funciona?</h4>

                                        <p>La responsabilidad básica de las pasarelas de pago es autorizar transacciones de fondos entre
                                            clientes y comerciantes. A continuación se detallan los pasos intrínsecos sobre cómo
                                            funcionan
                                            las pasarelas de pago:</p>

                                        <p><b>Paso 1:</b> El proceso comienza cuando un cliente visita por primera vez el sitio web y
                                            realiza un
                                            pedido de los productos respectivos a través del botón de pago.</p>

                                        <p><b>Paso 2:</b> a continuación, el comerciante enviará los detalles de ese pedido a la
                                            pasarela de pago
                                            y luego, una vez que la transacción se envíe al banco emisor, para que pueda autorizar la
                                            transacción.</p>
                                        <p><b>Paso 3:</b> Una vez que se completa el proceso de autenticación de la transacción, el
                                            banco emisor
                                            del cliente aprueba o rechaza la transacción en función de los fondos disponibles en la
                                            cuenta
                                            del cliente.</p>

                                        <p><b>Paso 4:</b> Luego, después de que la pasarela de pago envíe ese mensaje al comerciante.
                                        </p>

                                        <p><b>Paso 5:</b> El banco liquida el monto de la transacción con la pasarela de pago y la
                                            pasarela de
                                            pago liquida el dinero con el comerciante.</p>

                                        <p>En el mundo del comercio electrónico, las pasarelas de pago de Laravel juegan un papel vital
                                            en
                                            el establecimiento de transacciones en línea entre clientes y comerciantes. Porque las
                                            pasarelas
                                            de pago son las únicas responsables de la autorización de esa transacción. Por lo tanto, se
                                            desarrollan de manera muy protectora para cubrir todos los posibles controles de seguridad.
                                            Actualmente PayPal, Skrill, Stripe y Square son los métodos populares de pasarela de pago.
                                            Porque sus mecanismos de seguridad de pago y servicios confiables se clasifican entre los
                                            primeros de la lista.</p>

                                        <p>Entonces, en este artículo, demostraré cómo implementar la pasarela de pago de PayPal en una
                                            aplicación Laravel para hacer que sus transacciones de fondos sean seguras.</p>
                                        <br>
                                        <h4>Configurar PayPal en la aplicación Laravel</h4>

                                        <p>Para la integración de la pasarela de pago Laravel , primero instale el paquete PayPal en su
                                            aplicación utilizando el comando composer. Abra su terminal SSH y pegue el siguiente comando
                                            en <code>public_html</code> / <code>paypal_project</code>.</p>

                                        <pre class=" language-bash"><code class=" language-bash"> compositor requiere paypal / rest-api-sdk-php</code></pre>
                                        <br>
                                        <h4>¿Qué necesitamos para empezar a desarrollar nuestro bot?</h4>

                                        <p>Para desarrollar nuestro bot, tenemos primero que configurar un par de cosas en Facebook.</p>

                                        <p>Las instrucciones oficiales se pueden <a
                                                    href="https://developers.facebook.com/docs/messenger-platform/getting-started/app-setup"
                                                    target="_blank">encontrar aquí</a>, pero en resumen, vamos a necesitar:</p>
                                        <ul class="list-guide">
                                            <li>Una página en Facebook — cada bot necesita una página diferente.</li>
                                            <li>Una cuenta de desarrollador, que nos permitirá registrar nuestra app en Facebook.</li>
                                            <li>Una app en Facebook para obtener acceso a un <code>secret access token</code> (lo
                                                necesitaremos posteriormente).
                                            </li>
                                        </ul>
                                        <p>Los bots para Facebook funcionan a través de webhooks, que son URLs que nosotros definimos y
                                            que
                                            Facebook Messenger usará para interactuar con nuestro bot.</p>

                                        <p>Para publicar nuestro webhook usaremos <a href="https://cloud.google.com/appengine/"
                                                                                     title="Google App Engine">Google App Engine</a>. La
                                            ventaja de esto es que resulta
                                            gratuito para bajos volúmenes de tráfico, y escala automáticamente si necesitamos más. Así
                                            mismo
                                            usaremos Python como lenguaje de programación, pero en realidad se puede lograr también con
                                            cualquier otro lenguaje.</p>

                                        <p>Vamos a necesitar descargar el <a
                                                    href="https://cloud.google.com/appengine/docs/standard/python/download"
                                                    title="Python SDK">Python SDK</a> y crear un proyecto de
                                            <a href="https://console.cloud.google.com/project?pli=1" title="Google Cloud ">Google
                                                Cloud </a>si aún no
                                            tenemos
                                            uno.</p>
                                        <br>
                                        <h4>Crear cuenta de PayPal</h4>
                                        <div class="layout-title-default text-center">
                                            <div class="col-12 ">
                                                <img src="{{asset('/assets/images/blog/Payment-laravel.png')}}"  alt="Ccente System en Github " title="Ccente System en Github "
                                                     class="gallery2">
                                            </div>
                                        </div>

                                        <p>Visite Developer.paypal.com para crear su cuenta comercial, de modo que pueda comprar /
                                            vender productos fácilmente a través de Internet y transferir fondos a su cuenta.</p>

                                        <p>A continuación, cree un modo de desarrollador de Paypal y cree una cuenta sandbox para
                                            obtener credenciales importantes como <code>client_key</code> y <code>secret key</code>,
                                            para probar su integración con su aplicación Laravel.</p>

                                        <p>Después de crear su aplicación con éxito en el hosting para el proyecto Laravel, haga clic en
                                            ella y le mostrará <code>client_id</code> y claves secretas. Copie estas credenciales y
                                            péguelas en su archivo <code>.env</code>.</p>
                                        <pre class=" language-bash"><code class=" language-bash">PAYPAL_CLIENT_ID = <br>PAYPAL_SECRET = <br>PAYPAL_MODE = sandbox <br></code></pre>

                                        <p>A continuación, cree un nuevo archivo con el nombre <code>paypal.php</code> en el directorio
                                            <code>/config</code> y coloque el siguiente código en el archivo.</p>
                                        <pre class="language-bash"><code class="language-bash"><span
                                                        class="token function"><</span><span class="token function">? php</span>
<span class="token function">return</span> [<br>'<span class="token single">client_id</span>' => env ( '<span class="token single">PAYPAL_CLIENT_ID</span>', '' ),<br>'<span class="token single">secret</span>' => env ( '<span class="token single">PAYPAL_SECRET</span>', '' ),<br>'<span class="token single">settings</span>' => array (<br>'<span class="token single">mode</span>' => env ( '<span class="token single">PAYPAL_MODE</span>', '<span class="token single">sandbox</span>'),<br>'<span class="token single">http.ConnectionTimeOut</span>' => 30,<br>'<span class="token single">log.LogEnabled</span>' => true,<br>'<span class="token single">log.FileName</span>' => storage_path(). '<span class="token single">/logs/paypal.log</span>',<br>'<span class="token single">log.LogLevel</span>' => '<span class="token single">ERROR</span>'<br>),<br>];</code></pre>

                                        <br>
                                        <h4>Configurar producto de migración</h4>

                                        <p>Ahora cree y configure la migración de la base de datos. Pegue el siguiente comando en el
                                            terminal SSH:</p>
                                        <pre class="language-bash"><code class="language-bash">php artisan make:migration create_products_table</code></pre>
                                        <p>Después de crear con éxito la migración, cambie el siguiente código en el archivo de
                                            migración.</p>
                                        <pre class="language-bash"><code class="language-bash"><span class="token function">use </span>Illuminate\Database\Schema\Blueprint;<br><span
                                                        class="token function">use </span>Illuminate\Database\Migrations\Migration;<br><br><span
                                                        class="token function">class </span>CreateProductsTable <span
                                                        class="token function">extends </span>Migration <br>
{
    <span class="token function">public function</span> up()
   {
       Schema::<span class=" token string">create</span>('<span class="token single">products</span>', <span
                                                        class="token function">function </span>(Blueprint <span class="token table">$table</span>) {<br>
           <span class="token table">$table</span>-><span class="token string">increments</span>('<span
                                                        class="token single">id</span>');
           <span class="token table">$table</span>-><span class="token string">string</span>('<span
                                                        class="token single">name</span>');
           <span class="token table">$table</span>-><span class="token string">text</span>('<span class="token single">details</span>');
           <span class="token table">$table</span>-><span class="token string">float</span>('<span class="token single">price</span>');
           <span class="token table">$table</span>-><span class="token string">timestamps</span>();<br>
       });
   }
   <span class="token function">public function </span>down()
   {
       Schema::drop("products");
   }
}
                            </code></pre>

                                        <p>Después de ese cambio, pegue el siguiente comando en ssh terminal <code>php artisan
                                                migrate</code>.</p>
                                        <br>
                                        <h4>Modelo de producto para pago</h4>
                                        <p>Después de configurar con éxito todas las credenciales para la API de PayPal, ahora creemos
                                            un archivo de modelo con el nombre del Producto y peguemos el siguiente código.</p>

                                        <pre class="language-bash"><code class="language-bash"><span
                                                        class="token function">namespace</span> App;
<span class="token function">use </span>Illuminate\Database\Eloquent\Model;<br>
<span class="token function">class</span> Product <span class="token function">extends </span>Model
{
   <span class="token function">public</span> <span class="token table">$fillable </span>= ['<span class="token single">name</span>','<span
                                                        class="token single">details</span>','<span class="token single">price</span>'];
}</code></pre>
                                        <br>
                                        <h4>Configurar pago de migración</h4>
                                        <p>Ahora para crear y configurar la migración de la base de datos, copie el siguiente comando y
                                            péguelo en el terminal SSH:</p>
                                        <pre class="language-bash"><code class="labguage-bash">php artisan make:migration create_payment_table</code></pre>
                                        <p>Pegue el siguiente código para crear una tabla de pago.</p>

                                        <pre class="language-bash"><code class="language-bash"><span class="token function">use</span> Illuminate\Database\Schema\Blueprint;
<span class="token function">use</span> Illuminate\Database\Migrations\Migration;<br>
<span class="token function">class</span> CreatePaymentsTable <span class="token function">extends</span> Migration
{<br>
   <span class="token function">public function</span> up()
   {
       Schema::<span class="token string">create</span>('<span class="token single">payments</span>', <span
                                                        class="token function">function </span>(Blueprint <span class="token table">$table</span>) {
           <span class="token table">$table</span>-><span class="token string">increments</span>('<span
                                                        class="token single">id</span>');
           <span class="token table">$table</span>-><span class="token string">string</span>('<span
                                                        class="token single">item_number</span>');
           <span class="token table">$table</span>-><span class="token string">string</span>('<span
                                                        class="token single">transaction_id</span>');
           <span class="token table">$table</span>-><span class="token string">string</span>('<span
                                                        class="token single">currency_code</span>');
           <span class="token table">$table</span>-><span class="token string">string</span>('<span
                                                        class="token single">payment_status</span>');
           <span class="token table">$table</span>-><span class="token string">timestamps</span>();
       });
   }
   <span class="token function">public function</span> down()
   {
       Schema::<span class="token string">drop</span>("<span class="token single">payments</span>");
   }<br>
}</code></pre>
                                        <br>
                                        <h4>Modelo de pago</h4>
                                        <p>Como ha creado con éxito la migración para el pago, ahora creemos el modelo para el pago
                                            pegando el siguiente código en la aplicación de espacio de nombres del modelo de pago;</p>

                                        <pre class="language-bash"><code class="language-bash"><span class="token function">use </span>Illuminate\Database\Eloquent\Model;<br>
<span class="token function">class </span>Payment <span class="token function">extends </span>Model
{
   <span class="token function">public </span><span class="token table">$fillable </span>= [' <span
                                                        class="token single">item_number</span>',' <span class="token single">transaction_id</span>',' <span
                                                        class="token single">currency_code</span>',' <span class="token single">payment_status</span>'];
}</code></pre>
                                        <br>
                                        <h4>Vista de formulario de pago de PayPal</h4>
                                        <p>Puede agregar cualquier formulario aquí con la forma que desee. Mientras que para el
                                            propósito de Ver, el formulario tiene 1 campo de entrada para ingresar la cantidad y un
                                            botón también para completar el envío.</p>
                                        <pre class="language-bash"><code class="language-bash"><span><</span><span class="token tag">form</span> <span
                                                        class="token attr-name">action</span>="<span class="token attr-value">https://www.sandbox.paypal.com/cgi-bin/webscr</span>" <span
                                                        class="token attr-name">method</span>="<span
                                                        class="token attr-value">post</span>" <span class="token attr-name">name</span>="<span
                                                        class="token- attr-value">frmTransaction</span>" <span class="token attr-name">id</span>="<span
                                                        class="token attr-value">frmTransaction</span>"<span>></span>

   <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span
                                                        class="token attr-value">business</span>" <span
                                                        class="token attr-name">value</span>="<span>{</span>{<span>$paypal_id</span>}}">
   <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span class="token attr-value">cmd</span>" <span
                                                        class="token attr-name">value</span>="<span
                                                        class="token attr-value">_xclick</span>">
    <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span
                                                        class="token attr-value">item_name</span>" <span
                                                        class="token attr-name">value</span>="<span>{</span>{$product->name}}">
   <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span
                                                        class="token attr-value">item_number</span>" <span
                                                        class="token attr-name">value</span>="<span>{</span>{$product->id}}">
   <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span
                                                        class="token attr-value">amount</span>" <span
                                                        class="token attr-name">value</span>="<span>{</span>{$product->price}}">
   <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span class="token attr-value">currency_code</span>" <span
                                                        class="token attr-name">value</span>="<span class="token attr-value">USD</span>">
   <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span class="token attr-value">cancel_return</span>" <span
                                                        class="token attr-name">value</span>="<span class="token attr-value">http://demo.example.in/payment-cancel</span>">
   <span><</span><span class="token tag">input</span> <span class="attr-name">type</span>="<span
                                                        class="token attr-value">hidden</span>" <span
                                                        class=" token attr-name">name</span>="<span
                                                        class="token attr-value">return</span>" <span
                                                        class="token attr-name">value</span>="<span class="token attr-value">http://demo.example.in/payment-status</span>">

<span><</span><span class="token tag">/form</span><span>></span>

<span><</span><span class="token tag">script</span><span>></span> document.frmTransaction.<span class="token table">submit</span>( );<span><</span><span
                                                        class="token tag">/script</span>></code></pre>
                                        <br>
                                        <h4>Rutas</h4>
                                        <p>Después de crear la vista con éxito, ahora abra el archivo <code>routes/web.php </code>y
                                            actualice las rutas para la aplicación de pago.</p>
                                        <pre class="language-bash"><code class="language-bash">Route::<span
                                                        class="token string">get</span>('<span
                                                        class="token single">payment-status</span>',<span
                                                        class="token function">array</span>('<span
                                                        class="token single">as</span>'=>'<span
                                                        class="token single">payment.status</span>','<span
                                                        class="token single">uses</span>'=>'<span class="token single">PaymentController@paymentInfo</span>'));
Route::<span class="token string">get</span>('<span class="token single">payment</span>',<span class="token function">array</span>('<span
                                                        class="token single">as</span>'=>'<span
                                                        class="token single">payment</span>','<span class="token single">uses</span>'=>'<span
                                                        class="token single">PaymentController@payment</span>'));
Route::<span class="token string">get</span>('<span class="token single">payment-cancel</span>', <span
                                                        class="token function">function</span> () {
   <span class="token function">return </span>'<span class="token single">Payment has been canceled</span>';
});</code></pre>
                                        <br>
                                        <h4>Controlador de pago de PayPal</h4>
                                        <p>Ahora cree un nuevo controlador para escribir y administrar todas las cosas PHP relacionadas
                                            con PayPal. Simplemente pegue el comando que se muestra a continuación para crear un
                                            controlador de pago.</p>
                                        <pre class="language-bash"><code class="language-bash">php artisan make:controller PaymentController</code></pre>
                                        <p>El comando anterior creará un nuevo controlador en <code>/app/http/Controllers</code> con el
                                            nombre <code>PaymentController</code>.</p>
                                        <pre class="language-bash ">
                            <code class="language-bash">
<span class="token function"><</span><span class="token function">?php</span>
    <span class="token function">namespace</span> App\Http\Controllers;
    <span class="token function">use </span>Illuminate\Http\Request;
    <span class="token function">use </span>App\Product;
    <span class="token function">use </span>App\Payment;

    <span class="token function">class </span>PaymentController <span class="token function">extends </span>Controller {
        <span class="token function">public function</span> payment(Request <span class="token table">$request</span>){
            <span class="token table">$product</span>=Product::find(<span class="token table">$request</span>-><span
                                        class="token table">id</span>);
            <span class="token function">return</span> view('<span class="token single">payment</span>',compact('<span
                                        class="token single">product</span>'));
        }
         <span class="token function">public function</span> paymentInfo(Request <span
                                        class="token table">$request</span>){
            <span class="token function">if</span>(<span class="token table">$request</span>-><span class="token table">tx</span>){
                <span class="token function">if</span>(<span class="token table">$payment</span>=Payment::<span
                                        class="token string">where</span>('<span
                                        class="token single">transaction_id</span>',<span
                                        class="token table">$request</span>-><span class="token table">tx</span>)-><span
                                        class="token string">first</span>()){
                    <span class="token table">$payment_id</span>=<span class="token table">$payment</span>-><span
                                        class="token table">id</span>;
                } <span class="token function">else</span>   {
                    <span class="token table">$payment</span>=<span class="token function">new </span>Payment;
                    <span class="token table">$payment</span>-><span class="token table">item_number</span>=<span
                                        class="token table">$request</span>-><span
                                        class="token table">item_number</span>;
                    <span class="token table">$payment</span>-><span class="token table">transaction_id</span>=<span
                                        class="token table">$request</span>-><span class="token table">tx</span>;
                    <span class="token table">$payment</span>-><span class="token table">currency_code</span>=<span
                                        class="token table">$request</span>-><span class="token table">cc</span>;
                    <span class="token table">$payment</span>-><span class="token table">payment_status</span>=<span
                                        class="token table">$request</span>-><span class="token table">st</span>;
                    <span class="token table">$payment</span>-> <span class="token string">save</span>();
                    <span class="token table">$payment_id</span>=<span class="token table">$payment</span>-><span
                                        class="token table">id</span>;
                }
                <span class="token function">return</span> '<span class="token single">Pyament has been done and your payment id is : </span>'<span
                                        class="token table">$payment_id</span>;
            } <span class="token function">else</span>   {
                <span class="token function">return </span>'<span class="token single">Payment has failed</span>';
            }
        }
    }</code></pre>
                                        <p>Los métodos de pago se utilizan para representar la forma de la pasarela de pago donde los
                                            datos de productos seleccionados se pasan a comprar.</p>

                                        <p>Después de una redirección exitosa desde la pasarela de pago de PayPal, recuperamos los datos
                                            de respuesta en el método de Información de pago y, de acuerdo con esto, actualizamos la
                                            tabla de pago con la identificación de la transacción.</p>
                                        <br>
                                        <h4>Estado de pago de PayPal</h4>
                                        <p>Para notificar a los usuarios sobre el estado del pago, ya sea que se haya completado con
                                            éxito o haya fallado, se ejecuta el siguiente código para generar el estado del pago.</p>
                                        <br>
                                        <h4>¡Terminando!</h4>
                                        <p>Entonces, en este artículo, he demostrado cómo implementar la pasarela de pago Laravel PayPal en
                                            aplicaciones web. Al implementar la integración de Laravel con PayPal, la aplicación estará
                                            segura para la transacción de fondos y permitirá a los propietarios del sitio administrar de
                                            forma segura sus capitales. El artículo cubre la instalación completa y la integración paso a
                                            paso de la pasarela de pago de PayPal con la aplicación Laravel. Para que pueda adquirir un
                                            conocimiento profundo de su integración y uso en la plataforma.</p>

                                        <p>Sin embargo, si tiene más preguntas sobre este artículo, puede hacer sus preguntas en la sección
                                            de comentarios a continuación.</p>
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