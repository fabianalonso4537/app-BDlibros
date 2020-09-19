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
    return view('contenido/contenido');
});
Route::get('categorias','Categoriacontroller@index');
Route::get('paises','Paiscontroller@index');
Route::get('autores','Autorcontroller@index');
Route::get('editorial','Editorialcontroller@index');
Route::get('idioma','Idiomacontroller@index');