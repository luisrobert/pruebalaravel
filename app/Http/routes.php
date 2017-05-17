<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('admin','UsuarioController@create');
Route::get('/','FrontController@index');
Route::get('contato','FrontController@contacto');
Route::get('reviews','FrontController@reviews');

Route::resource('admin','FrontController@admin');
Route::resource('usuario','UsuarioController');


Route::get('controlador','PruebaController@index');

Route::resource('movie','MovieController');
Route::resource('movie1','Movie1Controller');

 //Ruta1 simple
Route::get('prueba', function () {
    return "Hola desde Routes.php";
});
//Ruta con parametro
Route::get('nombre/{nombre}', function ($nombre) {
    return "mi nombre es:".$nombre;
});
//ruta con parametro opcional
Route::get('edad/{edad?}', function ($edad = '31') {
    return "mi edad es:".$edad;
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/