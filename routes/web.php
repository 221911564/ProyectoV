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

Route::get('/', function () { return view('welcome'); });


// ---------------------INICIO--------------------

Route::name('home')->get('home/', 'SistemController@home');

// ---------------------CONOCENOS--------------------

Route::name('conocenos')->get('conocenos/', 'SistemController@conocenos');
// ---------------------VISTA PRODUCTOS--------------------

Route::name('producto')->get('producto/', 'ProductosController@producto');

//---------------------ALTA PRODUCTOS------------------------------

Route::name('nuevop')->get('nuevo/', 'ProductosController@nuevo');
Route::name('guardarp')->post('guardar/', 'ProductosController@guardar');

//---------------------EDITAR PRODUCTOS------------------------------

Route::name('editarp')->get('editarp/{id}', 'ProductosController@editar');
Route::name('salvarp')->put('salvap/{id}', 'ProductosController@salvar');

// ---------------------VISTA EMPLEADOS--------------------

Route::name('usuario')->get('usuario/', 'UsuariosController@usuario');