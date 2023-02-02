@extends('layouts.courses')
@section('header-courses')
    @include('web.includes.courses.html5')
@endsection
@section('content')
    {{--<!-- BEGIN: Content-->--}}
    {{--<div class="app-content content">--}}
        {{--<div class="content-overlay"></div>--}}
        {{--<div class="content-wrapper">--}}
            {{--<div class="content-header-left col-12 mb-2 mt-1">--}}
                {{--<div class="row breadcrumbs-top">--}}
                    {{--<div class="col-12">--}}
                        {{--<h5 class="content-header-title float-left pr-1 mb-0">HTML5</h5>--}}
                        {{--<div class="breadcrumb-wrapper col-12">--}}
                            {{--<ol class="breadcrumb p-0 mb-0">--}}
                                {{--<li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>--}}
                                {{--</li>--}}
                                {{--<li class="breadcrumb-item"><a href="/">Volver al inicio</a>--}}
                                {{--</li>--}}
                                {{--<li class="breadcrumb-item active">Show--}}
                                {{--</li>--}}
                            {{--</ol>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="content-body"><!-- app invoice View Page -->--}}
                {{--<section class="invoice-edit-wrapper">--}}
                    {{--<div class="row">--}}
                        {{--<!-- invoice view page -->--}}
                        {{--<div class="col-xl-9 col-md-8 col-12">--}}
                            {{--<div class="card tabcontent" id="home">--}}
                                {{--<div class="card-header text-center">--}}
                                    {{--<h2 class="card-title">Tutorial <span class="primary-color-orange">HTML5</span></h2>--}}
                                {{--</div>--}}
                                {{--<div class="card-content">--}}
                                    {{--<div class="card-body ">--}}
                                        {{--<p>HTML5 es la última y más mejorada versión de HTML. Técnicamente, HTML no es--}}
                                            {{--un lenguaje de programación, sino más bien un lenguaje de marcado. En este--}}
                                            {{--tutorial, discutiremos las características de HTML5 y cómo usarlo en la--}}
                                            {{--práctica.</p>--}}
                                        {{--<h3 class="card-title">Audiencia</h3>--}}
                                        {{--<p>Este tutorial ha sido diseñado para principiantes en HTML5 para que--}}
                                            {{--comprendan los conceptos básicos a avanzados del tema.</p>--}}
                                        {{--<h3 class="card-title">Pre-rrequisitos</h3>--}}
                                        {{--<p>Antes de comenzar este tutorial, debe tener una comprensión básica de HTML y--}}
                                            {{--sus etiquetas.</p>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--overview--}}
                            {{--<div class="card tabcontent" id="overview">--}}
                                {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">Descripción General</h4>--}}
                                {{--</div>--}}
                                {{--<div class="card-content">--}}
                                    {{--<div class="card-body ">--}}
                                        {{--<p>HTML5 es la próxima revisión importante del estándar HTML que reemplaza a--}}
                                            {{--HTML--}}
                                            {{--4.01, XHTML 1.0 y XHTML 1.1. HTML5 es un estándar para estructurar y--}}
                                            {{--presentar--}}
                                            {{--contenido en la World Wide Web.</p>--}}

                                        {{--<p>HTML5 es una cooperación entre el Consorcio World Wide Web (W3C) y el Grupo--}}
                                            {{--de--}}
                                            {{--trabajo de tecnología de aplicación de hipertexto web (WHATWG).</p>--}}

                                        {{--<p>El nuevo estándar incorpora características como reproducción de video y--}}
                                            {{--arrastrar y soltar que anteriormente dependían de complementos de navegador--}}
                                            {{--de--}}
                                            {{--terceros como Adobe Flash, Microsoft Silverlight y Google Gears.</p>--}}
                                        {{--<p>Code:</p>--}}
                                        {{--<h3 class="card-title">Soporte de navegador</h3>--}}
                                        {{--<p>Las últimas versiones de Apple Safari, Google Chrome, Mozilla Firefox y Opera--}}
                                            {{--son compatibles con muchas características HTML5 e Internet Explorer 9.0--}}
                                            {{--también--}}
                                            {{--será compatible con algunas funciones HTML5.</p>--}}

                                        {{--<p>Los navegadores web móviles que vienen preinstalados en iPhones, iPads y--}}
                                            {{--teléfonos Android tienen un excelente soporte para HTML5.</p>--}}

                                        {{--<h3 class="card-title">Nuevas características</h3>--}}
                                        {{--<p>HTML5 presenta una serie de nuevos elementos y atributos que pueden ayudarlo--}}
                                            {{--a crear sitios web modernos. Aquí hay un conjunto de algunas de las--}}
                                            {{--características más destacadas introducidas en HTML5.</p>--}}
                                        {{--<ul class="bootom-ul">--}}
                                            {{--<li>Nuevos elementos semánticos : son como <code>header</code>,--}}
                                                {{--<code>footer</code> y <code>section</code>.--}}
                                            {{--</li>--}}

                                            {{--<li>Forms 2.0 : mejoras en los formularios web HTML donde se han introducido--}}
                                                {{--nuevos atributos para la etiqueta <code>input</code>.--}}
                                            {{--</li>--}}

                                            {{--<li>Almacenamiento local persistente : para lograrlo sin recurrir a--}}
                                                {{--complementos de terceros.--}}
                                            {{--</li>--}}

                                            {{--<li>WebSocket : una tecnología de comunicación bidireccional de última--}}
                                                {{--generación para aplicaciones web.--}}
                                            {{--</li>--}}

                                            {{--<li>Eventos enviados por el servidor : HTML5 introduce eventos que fluyen--}}
                                                {{--del servidor web a los navegadores web y se denominan eventos enviados--}}
                                                {{--por el servidor (SSE).--}}
                                            {{--</li>--}}

                                            {{--<li>Lienzo : admite una superficie de dibujo bidimensional que puede--}}
                                                {{--programar con JavaScript.--}}
                                            {{--</li>--}}

                                            {{--<li>Audio y video : puede incrustar audio o video en sus páginas web sin--}}
                                                {{--recurrir a complementos de terceros.--}}
                                            {{--</li>--}}

                                            {{--<li>Geolocalización : ahora los visitantes pueden elegir compartir su--}}
                                                {{--ubicación física con su aplicación web.--}}
                                            {{--</li>--}}

                                            {{--<li>Microdatos : esto le permite crear sus propios vocabularios más allá de--}}
                                                {{--HTML5 y ampliar sus páginas web con una semántica personalizada.--}}
                                            {{--</li>--}}

                                            {{--<li>Arrastrar y soltar : arrastre y suelte los elementos de una ubicación a--}}
                                                {{--otra en la misma página web.--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                        {{--<h3 class="card-title"> Compatibilidad con versiones anteriores</h3>--}}
                                        {{--<p>HTML5 está diseñado, tanto como sea posible, para ser compatible con versiones--}}
                                            {{--anteriores de los navegadores web existentes. Sus nuevas funciones se han--}}
                                            {{--construido sobre las funciones existentes y le permiten proporcionar contenido--}}
                                            {{--alternativo para navegadores antiguos.</p>--}}

                                        {{--<p>Se sugiere detectar el soporte para características HTML5 individuales usando--}}
                                            {{--unas pocas líneas de JavaScript.</p>--}}

                                        {{--<p>Si no está familiarizado con ninguna versión anterior de HTML, le recomendaría--}}
                                            {{--que consulte nuestro Tutorial HTML antes de explorar las características de--}}
                                            {{--HTML5.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--syntax--}}
                            {{--<div class="card tabcontent" id="syntax">--}}
                                {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">Sintaxis</h4>--}}
                                {{--</div>--}}
                                {{--<div class="card-content">--}}
                                    {{--<div class="card-body ">--}}
                                        {{--<p>El lenguaje HTML 5 tiene una sintaxis HTML "personalizada" que es compatible con los documentos HTML 4 y XHTML1 publicados en la Web, pero no es compatible con las características SGML más esotéricas de HTML 4.</p>--}}

                                        {{--<p>HTML 5 no tiene las mismas reglas de sintaxis que XHTML donde necesitábamos nombres de etiquetas en minúsculas, citando nuestros atributos, un atributo tenía que tener un valor y cerrar todos los elementos vacíos.</p>--}}

                                        {{--<p>HTML5 viene con mucha flexibilidad y admite las siguientes características:</p>--}}
                                        {{--<ul class="bootom-ul">--}}
                                            {{--<li>Nombres de etiqueta en mayúsculas.</li>--}}
                                            {{--<li>Los valores de los atributos son opcionales.</li>--}}
                                            {{--<li>Los elementos vacíos de cierre son opcionales.</li>--}}
                                        {{--</ul>--}}
                                        {{--<h3 class="card-title">El DOCTYPE</h3>--}}
                                        {{--<p>Los DOCTYPE en versiones anteriores de HTML eran más largos porque el lenguaje HTML estaba basado en SGML y, por lo tanto, requería una referencia a un DTD.</p>--}}

                                        {{--<p>Los autores de HTML 5 usarían una sintaxis simple para especificar DOCTYPE de la siguiente manera:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                              {{--&lt;div class="card"&gt;--}}

                                                {{--&lt;!DOCTYPE html&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<h3>Codificación de caracteres</h3>--}}
                                        {{--<p>Los autores de HTML 5 pueden usar una sintaxis simple para especificar la codificación de caracteres de la siguiente manera:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;meta charset="UTF-8"&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>La sintaxis anterior no distingue entre mayúsculas y minúsculas.</p>--}}
                                        {{--<h3 class="card-title">La etiqueta <code>script</code></h3>--}}
                                        {{--<p>Es una práctica común agregar un atributo de tipo con un valor de "texto / javascript" a los elementos del script de la siguiente manera:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;script type="text/javascript" src="ccentesystem.js"&gt; &lt;/script&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>HTML 5 elimina la información adicional requerida y puede usar simplemente la siguiente sintaxis:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;script src="ccentesystem.js"&gt; &lt;/script&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<h3 class="card-title">La etiqueta <code>link</code></h3>--}}
                                        {{--<p>Hasta ahora estabas escribiendo <code>link </code>de la siguiente manera:</p>--}}
                                        {{--<pre>--}}
                                             {{--<code class="language-html">--}}
                                                {{--&lt;link rel="stylesheet" type="text/css" href="stylesystem.css"&gt;--}}
                                             {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>HTML 5 elimina la información adicional requerida y simplemente puede usar la siguiente sintaxis:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;link rel="stylesheet" href="stylesystem.css"&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<h3 class="card-title"> Elementos HTML5</h3>--}}
                                        {{--<p>Los elementos HTML5 se marcan mediante etiquetas de inicio y etiquetas finales. Las etiquetas se delimitan utilizando corchetes angulares con el nombre de la etiqueta en el medio.</p>--}}

                                        {{--<p>La diferencia entre las etiquetas de inicio y final es que esta última incluye una barra inclinada antes del nombre de la etiqueta.</p>--}}

                                        {{--<p>El siguiente es el ejemplo de un elemento HTML5:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;p&gt;...&lt;/p&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>Los nombres de etiquetas HTML5 no distinguen entre mayúsculas y minúsculas y pueden escribirse en mayúsculas o en mayúsculas y minúsculas, aunque la convención más común es seguir en minúsculas.</p>--}}

                                        {{--<p>La mayoría de los elementos contienen algún contenido como <code>&lt;p&gt; &lt;/p&gt;</code> contiene un párrafo. Sin embargo, se prohíbe que algunos elementos contengan contenido alguno y se conocen como elementos nulos. Por ejemplo, br, hr, link, meta , etc.</p>--}}
                                        {{--<h3>Atributos HTML 5</h3>--}}
                                        {{--<p>Los elementos pueden contener atributos que se utilizan para establecer varias propiedades de un elemento.</p>--}}

                                        {{--<p>Algunos atributos se definen globalmente y se pueden usar en cualquier elemento, mientras que otros se definen solo para elementos específicos. Todos los atributos tienen un nombre y un valor y se ven como se muestra a continuación en el ejemplo.</p>--}}

                                        {{--<p>El siguiente es el ejemplo de un atributo HTML5 que ilustra cómo marcar un elemento div con un atributo llamado clase usando un valor de "ejemplo"</p>--}}

                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                    {{--&lt;div class="example"&gt; ... &lt;/div&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>Los atributos solo pueden especificarse dentro de las etiquetas de inicio y nunca deben usarse en las etiquetas de finalización.</p>--}}

                                        {{--<p>Los atributos HTML5 no distinguen entre mayúsculas y minúsculas y pueden escribirse en mayúsculas o en mayúsculas y minúsculas, aunque la convención más común es seguir en minúsculas.</p>--}}

                                        {{--<h3 class="card-title">Documento HTML5</h3>--}}
                                        {{--<p>Se han introducido las siguientes etiquetas para una mejor estructura:</p>--}}
                                        {{--<ul class="bootom-ul">--}}
                                            {{--<li>section : esta etiqueta representa un documento genérico o una sección de aplicación. Se puede usar junto con h1-h6 para indicar la estructura del documento.</li>--}}

                                            {{--<li>article : esta etiqueta representa una parte independiente del contenido de un documento, como una entrada de blog o un artículo de periódico.</li>--}}

                                            {{--<li>aside : esta etiqueta representa una parte del contenido que solo está ligeramente relacionada con el resto de la página.</li>--}}

                                            {{--<li>header : esta etiqueta representa el encabezado de una sección.</li>--}}

                                            {{--<li>footer : esta etiqueta representa un pie de página para una sección y puede contener información sobre el autor, información de copyright, etc.</li>--}}

                                            {{--<li>nav : esta etiqueta representa una sección del documento destinada a la navegación.</li>--}}

                                            {{--<li>dialog : esta etiqueta se puede utilizar para marcar una conversación.</li>--}}

                                            {{--<li>figure : esta etiqueta se puede usar para asociar un título junto con contenido incrustado, como un gráfico o un video.</li>--}}
                                        {{--</ul>--}}
                                        {{--<p>El marcado de un documento HTML 5 se vería así:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;html&gt;--}}
                                                   {{--&lt;head&gt;--}}
                                                      {{--&lt;meta charset="utf-8"&gt;--}}
                                                      {{--&lt;title&gt;...&lt;/title&gt;--}}
                                                   {{--&lt;/head&gt;--}}

                                                   {{--&lt;body&gt;--}}
                                                      {{--&lt;header&gt;...&lt;/header&gt;--}}
                                                      {{--&lt;nav&gt;...&lt;/nav&gt;--}}

                                                      {{--&lt;article&gt;--}}
                                                         {{--&lt;section&gt;--}}
                                                            {{--...--}}
                                                         {{--&lt;/section&gt;--}}
                                                      {{--&lt;/article&gt;--}}
                                                      {{--&lt;aside&gt;...&lt;/aside&gt;--}}

                                                      {{--&lt;footer&gt;...&lt;/footer&gt;--}}
                                                   {{--&lt;/body&gt;--}}
                                                {{--&lt;/html&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--attributes--}}
                            {{--<div class="card tabcontent" id="attributes">--}}
                                {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">Atributos</h4>--}}
                                {{--</div>--}}
                                {{--<div class="card-content">--}}
                                    {{--<div class="card-body ">--}}
                                        {{--<p>Como se explicó en el capítulo anterior, los elementos pueden contener atributos que se usan para establecer varias propiedades de un elemento.</p>--}}

                                        {{--<p>Algunos atributos se definen globalmente y se pueden usar en cualquier elemento, mientras que otros se definen solo para elementos específicos. Todos los atributos tienen un nombre y un valor y se ven como se muestra a continuación en el ejemplo.</p>--}}

                                        {{--<p>El siguiente es el ejemplo de un atributo HTML5 que ilustra cómo marcar un elemento div con un atributo llamado clase usando un valor de "ejemplo"</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                        {{--&lt;div class="example"&gt;...&lt;/div&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>Los atributos solo pueden especificarse dentro de las etiquetas de inicio y nunca deben usarse en las etiquetas de finalización .</p>--}}
                                        {{--<h3 class="card-title">Atributos personalizados</h3>--}}
                                        {{--<p>Una nueva característica que se introduce en HTML 5 es la adición de atributos de datos personalizados.</p>--}}

                                        {{--<p>Un atributo de datos personalizado comienza con datos, y se nombraría según su requisito. Aquí hay un ejemplo simple:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;div class="example" data-subject="example" data-level="example"&gt;--}}
                                                   {{--...--}}
                                                {{--&lt;/div&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>El código anterior será HTML5 perfectamente válido con dos atributos personalizados llamada datasubject y a nivel de datos . Podrá obtener los valores de estos atributos utilizando las API de JavaScript o CSS de la misma manera que obtiene los atributos estándar.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--events--}}
                            {{--<div class="card tabcontent" id="events">--}}
                                {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">Eventos</h4>--}}
                                {{--</div>--}}
                                {{--<div class="card-content">--}}
                                    {{--<div class="card-body ">--}}
                                        {{--<p>Cuando los usuarios visitan su sitio web, realizan diversas actividades, como hacer clic en texto e imágenes y enlaces, desplazarse sobre elementos definidos, etc. Estos son ejemplos de lo que JavaScript llama eventos .</p>--}}

                                        {{--<p>Podemos escribir nuestros controladores de eventos en Javascript o VBscript y puede especificar estos controladores de eventos como un valor del atributo de etiqueta de evento. La especificación HTML5 define varios atributos de eventos como se enumeran a continuación:</p>--}}

                                        {{--<p>Podemos usar el siguiente conjunto de atributos para activar cualquier código javascript o vbscript dado como valor, cuando se produce un evento para cualquier elemento HTML5.</p>--}}

                                        {{--<p>Cubriremos eventos específicos de elementos mientras discutimos esos elementos en detalle en capítulos posteriores.</p>--}}
                                        {{--<div class="table-responsive">--}}
                                            {{--<table class="table table-light mb-0">--}}
                                                {{--<tbody>--}}
                                                {{--<thead>--}}
                                                {{--<tr>--}}
                                                    {{--<th style="text-align:center;">Attribute</th>--}}
                                                    {{--<th style="text-align:center;">Value</th>--}}
                                                    {{--<th style="text-align:center;">Description</th>--}}
                                                {{--</tr>--}}
                                                {{--</thead>--}}

                                                {{--<tr>--}}
                                                    {{--<td>offline</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se activa cuando el documento se desconecta</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onabort</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Activadores en un evento de aborto</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onafterprint</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se desencadena después de que se imprime el documento</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onbeforeonload</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara antes de que se cargue el documento</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onbeforeprint</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se activa antes de que se imprima el documento</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onblur</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando la ventana pierde el foco</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>oncanplay</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se activa cuando los medios pueden comenzar a reproducirse, pero es posible que deba detenerse para almacenar en búfer</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>oncanplaythrough</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando los medios se pueden reproducir hasta el final, sin detenerse para el almacenamiento en búfer</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onchange</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando un elemento cambia</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onclick</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se activa con un clic del mouse</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>oncontextmenu</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando se activa un menú contextual</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondblclick</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Activa el doble clic del mouse</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondrag</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando se arrastra un elemento</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondragend</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara al final de una operación de arrastre</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondragenter</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando un elemento ha sido arrastrado a un objetivo de caída válido</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondragleave</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>	Se dispara cuando un elemento deja un objetivo de caída válido</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondragover</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando un elemento se arrastra sobre un objetivo de caída válido</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondragstart</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se activa al comienzo de una operación de arrastre</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondrop</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se activa cuando se suelta el elemento arrastrado</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>ondurationchange</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>	Se activa cuando se cambia la longitud de los medios</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onemptied</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>	Se dispara cuando un elemento de recursos de medios de repente se vacía.</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onended</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se activa cuando los medios llegan al final</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onerror</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Triggers when an error occur</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onfocus</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>	Se dispara cuando ocurre un error</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<td>onformchange</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>Se dispara cuando la ventana se enfoca</td>--}}
                                                {{--</tr>--}}

                                                {{--<tr>--}}
                                                    {{--<td>oninput</td>--}}
                                                    {{--<td>script</td>--}}
                                                    {{--<td>	Se activa cuando un formulario recibe la entrada del usuario</td>--}}
                                                {{--</tr>--}}

                                                {{--</tbody>--}}
                                            {{--</table>--}}

                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--microdata--}}
                            {{--<div class="card tabcontent" id="microdata">--}}
                                {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title">Microdatos</h4>--}}
                                {{--</div>--}}
                                {{--<div class="card-content">--}}
                                    {{--<div class="card-body ">--}}
                                        {{--<p>Los microdatos son una forma estandarizada de proporcionar semántica adicional en sus páginas web.</p>--}}

                                        {{--<p>Microdata le permite definir sus propios elementos personalizados y comenzar a incrustar propiedades personalizadas en sus páginas web. En un nivel alto, los microdatos consisten en un grupo de pares nombre-valor.</p>--}}

                                        {{--<p>Los grupos se denominan elementos , y cada par nombre-valor es una propiedad . Los elementos y las propiedades están representados por elementos regulares.</p>--}}
                                        {{--<h3 class="card-title">Ejemplo:</h3>--}}
                                        {{--<ul class="bootom-ul">--}}
                                            {{--<li>Para crear un elemento, se utiliza el atributo <code>itemscope</code>.</li>--}}

                                            {{--<li>Para agregar una propiedad a un elemento, el atributo <code>itemprop</code> se usa en uno de los descendientes del elemento.</li>--}}
                                        {{--</ul>--}}
                                        {{--<p>Aquí hay dos elementos, cada uno de los cuales tiene la propiedad "nombre":</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}

                                                    {{--&lt;html&gt;--}}
                                                       {{--&lt;body&gt;--}}

                                                          {{--&lt;div itemscope&gt;--}}
                                                             {{--&lt;p&gt;My name is &lt;span itemprop="name"&gt;Roel&lt;/span&gt;.&lt;/p&gt;--}}
                                                          {{--&lt;/div&gt;--}}

                                                          {{--&lt;div itemscope&gt;--}}
                                                             {{--&lt;p&gt;My name is &lt;span itemprop="name"&gt;Virgilio&lt;/span&gt;.&lt;/p&gt;--}}
                                                          {{--&lt;/div&gt;--}}

                                                       {{--&lt;/body&gt;--}}
                                                    {{--&lt;/html&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<h3 class="card-title">Tipos de datos de propiedades</h3>--}}
                                        {{--<p>Las propiedades generalmente tienen valores que son cadenas como se menciona en el ejemplo anterior, pero también pueden tener valores que son URL. El siguiente ejemplo tiene una propiedad, "imagen", cuyo valor es una URL:</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;div itemscope&gt;--}}
                                                   {{--&lt;img itemprop="image" src="CCS-logo.gif" alt="Tutorial HMTL5"&gt;--}}
                                                {{--&lt;/div&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>Las propiedades también pueden tener valores que son fechas, horas o fechas y horas. Esto se logra utilizando el elemento time y su atributo <code>datetime</code> .</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-html">--}}
                                                {{--&lt;html&gt;--}}
                                                   {{--&lt;body&gt;--}}

                                                      {{--&lt;div itemscope&gt;--}}
                                                         {{--My birthday is:--}}
                                                         {{--&lt;time itemprop="birthday" datetime="1990-10-14"&gt;--}}
                                                            {{--Oct 14 1990--}}
                                                         {{--&lt;/time&gt;--}}
                                                      {{--&lt;/div&gt;--}}

                                                   {{--&lt;/body&gt;--}}
                                                {{--&lt;/html&gt;--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>Las propiedades también pueden ser grupos de pares nombre-valor, colocando el atributo itemscope en el elemento que declara la propiedad.</p>--}}
                                        {{--<h3 class="card-title">Soporte de API de microdatos</h3>--}}
                                        {{--<p>Si un navegador admite la API de microdatos HTML5, habrá una función getItems () en el objeto de documento global. Si el navegador no admite microdatos, la función getItems () no estará definida.</p>--}}
                                        {{--<pre>--}}
                                            {{--<code class="language-js">--}}
                                                {{--function supports_microdata_api() {--}}
   {{--return !!document.getItems;--}}
{{--}--}}
                                            {{--</code>--}}
                                        {{--</pre>--}}
                                        {{--<p>Modernizr aún no admite la comprobación de la API de microdatos, por lo que deberá utilizar la función como la que se menciona anteriormente.</p>--}}

                                        {{--<p>El estándar de microdatos HTML5 incluye tanto el marcado HTML (principalmente para motores de búsqueda) como un conjunto de funciones DOM (principalmente para navegadores).</p>--}}

                                        {{--<p>Puede incluir marcado de microdatos en sus páginas web, y los motores de búsqueda que no entiendan los atributos de microdatos simplemente los ignorarán. Pero si necesita acceder o manipular microdatos a través del DOM, deberá verificar si el navegador admite la API DOM de microdatos.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- invoice action  -->--}}
                        {{--<div class="col-xl-3 col-md-4 col-12">--}}
                            {{--<div class="card invoice-action-wrapper shadow-none border">--}}
                                {{--<div class="card-body">--}}
                                    {{--<h2 class="card-title">Compartir en:</h2>--}}
                                    {{--<div class="invoice-action-btn mb-1">--}}
                                        {{--<a href="/edit" class="btn btn-primary btn-block invoice-send-btn">--}}
                                            {{--<i class="bx bxl-facebook"></i>--}}
                                            {{--<span>Facebook</span>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="invoice-action-btn mb-1">--}}
                                        {{--<a href="" class="btn btn-info btn-block invoice-send-btn">--}}
                                            {{--<i class="bx bxl-twitter"></i>--}}
                                            {{--<span>Twitter</span>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="invoice-action-btn mb-1 d-flex">--}}
                                        {{--<a href="/" class="btn btn-warning btn-block invoice-send-btn">--}}
                                            {{--<i class="bx bxl-instagram"></i>--}}
                                            {{--<span class="text-nowrap">Instagram</span>--}}

                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="invoice-action-btn mb-1 d-flex">--}}
                                        {{--<a href="/" class="btn btn-secondary invoice-send-btn btn-block">--}}
                                            {{--<i class="bx bxl-linkedin"></i>--}}
                                            {{--<span class="text-nowrap">Linkedin</span>--}}

                                        {{--</a>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</section>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- END: Content-->--}}


@endsection