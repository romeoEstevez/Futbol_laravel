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
    return view('welcome');
});

Route::get('/segundaRuta', function () {
     return ('Hola A Todos');
});

Route::get('/uno', 'SiteController@index');

Route::get('/header', 'SiteController@header');
Route::get('/home', 'SiteController@home');
Route::get('/homeDos', 'SiteController@home2');
Route::get('/equipos', 'EquipoController@list');
Route::get('/index', 'SiteController@home2');
