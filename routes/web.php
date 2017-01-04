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

Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('productos','ProductosController');

/*

GET /productos => index
POST /productos => store
GET /productos/crear => Formulario para crear
GET /productos/:id => Mostrar producto ID
GET /productos/:id/edit
PUT/PATCH /productos/:id  b
DELETE /productos/:id

*/


Route::get('/home', 'HomeController@index');


