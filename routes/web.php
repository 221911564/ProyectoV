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
Route::name('index')->get('index/', 'SistemController@index');
// ---------------------VISTA PRODUCTOS--------------------

Route::name('producto')->get('producto/', 'ProductosController@producto');
Route::name('productos')->get('productos/', 'ProductosController@productos');

//---------------------ALTA PRODUCTOS------------------------------

Route::name('nuevop')->get('nuevop/', 'ProductosController@nuevo');
Route::name('guardarp')->post('guardarp/', 'ProductosController@guardar');

//---------------------DETALLE PRODUCTOS------------------------------

Route::name('detallep')->get('detallep/{id}', 'ProductosController@detalle');

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

// -------------------LOGIN--------------------
Route::name('login')->get('login/', 'LoginController@login');
Route::name('valida')->get('valida/', 'LoginController@valida');
Route::name('logout')->get('logout/', 'LoginController@logout');

//---------------------PERFIL ADMINISTRADOR------------------------------

Route::name('administrador')->get('administrador/', 'LoginController@administrador');

//---------------------EDITAR PERFIL ADMINISTRADOR------------------------------

Route::name('editarper')->get('editarper/{id?}', 'AccionesController@editar');
Route::name('salvarper')->put('salvaper/{id}', 'AccionesController@salvar');

//---------------------PERFIL EMPLEADO------------------------------

Route::name('empleados')->get('empleados/', 'LoginController@empleado');

//---------------------EDITAR PERFIL EMPLEADO------------------------------

Route::name('editaremp')->get('editaremp/{id?}', 'EmpleadosController@editar');
Route::name('salvaremp')->put('salvaemp/{id}', 'EmpleadosController@salvaremp');

//---------------------REALIZAR VENTAS------------------------------
Route::name('ventas')->get('ventas/', 'AccionesController@ventas');
Route::name('guardarv')->post('guardarv/', 'AccionesController@guardarv');

//---------------------VENTAS------------------------------
Route::name('ventasg')->get('ventasg/', 'AccionesController@ventasg');
Route::name('guardarve')->post('guardarve/', 'AccionesController@guardarve');

//---------------------EDITAR PRODUCTOS------------------------------

Route::name('editarpr')->get('editarpr/{id}', 'ProductosController@editarp');
Route::name('salvarpr')->put('salvapr/{id}', 'ProductosController@salvarp');

//---------------------DETALLE PRODUCTOS------------------------------

Route::name('detalle')->get('detalle/{id}', 'ProductosController@detallep');

// -------------------BUSQUEDA PRODUCTOS--------------------
Route::name('buscar')->get('buscar/', 'ProductosController@buscarp');