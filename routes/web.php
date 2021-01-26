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

Route::get('/', function () {
    return view('auth.login');
});


//Route::get('/estudiantes', 'EstudianteController@index');

//Route::get('/estudiantes/create','EstudianteController@create');

//Route::get('/estudiantes/edit', function () {
//    return view('estudiantes.edit');
//});

Route::resource('estudiantes','EstudianteController') ->middleware('auth');

//GRUPOS
//Route::get('/grupos', 'GruposController@index');
//Route::get('/grupos/create', function () {
//    return view('grupos.create');
//});

Route::resource('grupos','GruposController') ->middleware('auth');



//Route::resource('grupos','GruposController') ->middleware('auth');

Auth::routes(['reset'=>false ]); //elimina registro y recupera contraseña register'=>false,

Route::get('/home', 'HomeController@index')->name('home');
