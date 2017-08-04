<?php

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

Route::get
        (
            '/',
             function () {
                return view('welcome');
            }
        );
Route::get
        (
            '/hola',
             function ()
             {
                echo 'hola desde #manosenelcódigo a lo machito!!';   
             }
        );     
Route::get
        (
            '/chao',
             function ()
             {
                echo 'chao bye adiós ';   
             }
        ); 
Route::get
        (
            '/quienes-somos',
             function ()
             {
                echo 'somos los más bakanes del mundo ';   
             }
        );   
Route::get
        (
            '/con-parametros/{id?}',
             function ($id=null)
             {
                echo 'el valor de id= '.$id;   
             }
        ); 
Route::get('/home/index', 'HomeController@index');
Route::get('/home/nosotros', 'HomeController@nosotros');
Route::get('/home/detalle/{id?}', 'HomeController@detalle');

Route::get('/vistas/index', 'VistasController@index');
Route::get('/vistas/nosotros', 'VistasController@nosotros');
Route::get('/vistas/productos', 'VistasController@productos');

