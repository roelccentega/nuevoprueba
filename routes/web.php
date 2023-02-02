<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','Web\PageController@index');
Route::get('/tienda','Web\PageController@shop');
Route::get('/landing/web','Web\PageController@landingWeb');
Route::get('/landing/tienda','Web\PageController@landingStore');
Route::get('/desarrollo','Web\PageController@desarrollo');
Route::get('/diagnostico','Web\PageController@diagnostico');
Route::get('/asesoria','Web\PageController@asesoria');
Route::get('/contacto','Web\PageController@contact');
Route::post('/contacto','WelcomeController@postContact');

//Servicios

Route::get('/servicios','Web\ServiceController@index');
Route::get('/servicios/desarrollo-web','Web\ServiceController@web');
Route::get('/servicios/desarrollo-de-sistemas','Web\ServiceController@sistemas');
Route::get('/servicios/posicionamiento-seo','Web\ServiceController@seo');
Route::get('/servicios/diseno-grafico','Web\ServiceController@grafico');
Route::get('/servicios/marketing-digital','Web\ServiceController@fanpage');


//Proyectos

Route::get('/proyectos','Web\ProjectController@index');
Route::get('/proyectos/neurosalud','Web\ProjectController@neurosalud');
Route::get('/proyectos/corporacion-salome','Web\ProjectController@salome');
Route::get('/proyectos/loyal-corporation','Web\ProjectController@loyal');
Route::get('/proyectos/grupo-castro','Web\ProjectController@castro');
Route::get('/proyectos/importadora-quimica','Web\ProjectController@importadora');
Route::get('/proyectos/laboratorio-lilabs','Web\ProjectController@lilabs');
Route::get('/proyectos/satelital-telecomunicaciones','Web\ProjectController@satelital');
Route::get('/proyectos/latir-peru','Web\ProjectController@latirperu');
Route::get('/proyectos/nbj-constructora-y-inmobiliaria','Web\ProjectController@nbjconstructora');

//Articles

Route::get('/blog','Web\ArticleController@index');
Route::get('/blog/realizar-deploy-app-laravel-a-digital-ocean','Web\ArticleController@deploy');
Route::get('/blog/enviar-mails-correos-con-laravel','Web\ArticleController@mailGmail');
Route::get('/blog/como-configurar-virtual-host-apache-en-ubuntu','Web\ArticleController@domainUbuntu');
Route::get('/blog/crear-chatbot-para-messeger-en-python','Web\ArticleController@chatBot');
Route::get('/blog/integre-pasarela-de-pago-paypal-laravel','Web\ArticleController@paypal');

//Cursos

Route::get('/cursos','Web\CourseController@index');
Route::get('/cursos/html5','Web\CourseController@html5');