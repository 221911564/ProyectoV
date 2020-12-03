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

Route::name('nuevop')->get('nuevop/', 'ProductosController@nuevo');
Route::name('guardarp')->post('guardarp/', 'ProductosController@guardar');

//---------------------EDITAR PRODUCTOS------------------------------

Route::name('editarp')->get('editarp/{id}', 'ProductosController@editar');
Route::name('salvarp')->put('salvap/{id}', 'ProductosController@salvar');

// -------------------BUSQUEDA PRODUCTOS--------------------
Route::name('buscarp')->get('buscarp/', 'ProductosController@buscar');

//---------------------BORRAR PRODUCTOS------------------------------

Route::name('borrarp')->get('borrarp/{id}', 'ProductosController@borrar');



//<---------------    RUTAS USUARIOS     -------------------->

// -------------------VISTA USUARIOS--------------------

Route::name('usuario')->get('usuario/', 'UsuariosController@usuario');

//---------------------ALTA USUARIOS------------------------------

Route::name('nuevo')->get('nuevo/', 'UsuariosController@nuevo');
Route::name('guardar')->post('guardar/', 'UsuariosController@guardar');

//---------------------EDITAR USUARIOS------------------------------

Route::name('editar')->get('editar/{id}', 'UsuariosController@editar');
Route::name('salvar')->put('salvar/{id}', 'UsuariosController@salvar');


//---------------------BORRAR USUARIOS------------------------------

Route::name('borraru')->get('borraru/{id}', 'UsuariosController@borrar');

// -------------------BUSQUEDA USUARIOS--------------------
Route::name('buscaru')->get('buscaru/', 'UsuariosController@buscar');
