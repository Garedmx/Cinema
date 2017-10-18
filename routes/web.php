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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('edad/{edad?}',function($edad='20'){
    return 'tu edad es de '.$edad;
});

Route::get('usuario/{codigo}',function($codigo){
    return 'hola usuario'.$codigo;
})->where('codigo','[0-9]+');

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre?}','PruebaController@nombre');

Route::resource('movie','MovieController');*/

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
Route::resource('genero','GeneroController');
Route::get('generos','GeneroController@listing');
Route::resource('pelicula','MovieController');

Route::resource('log','LogController');
Route::get('logout','LogController@logout');