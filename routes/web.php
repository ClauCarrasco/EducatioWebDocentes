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

//Route::get('/', function () {
//    return view('welcome');
//
//});

Route::get('/', 'CursosController@index')->name('home');

Route::get('/vercurso/{idCurso}', 'CursosController@ver')->name('vercurso');

Route::get('/vermesasexamen', 'CursosController@verMesasExamen')->name('vermesasexamen');
Route::get('/mesaexamen/{idMesa}', 'CursosController@verUnaMesa')->name('mesaexamen');

Route::get('/home', 'CursosController@index')->name('home');

