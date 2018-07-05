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

//======================================================================
//                  Rutas sin agrupar
//======================================================================

////************************  TIPOS DD DOCUMENTO******************

/*route::get('test',function (){
   $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='CC';
    $usuario->descripcion ='Cedula de Ciudadania';
    $usuario->save();
   return $usuario;
});*/

/*route::get('test',function (){
    $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='TI';
    $usuario->descripcion ='Tarjeta de Identidad';
    $usuario->save();
    return $usuario;
});*/

/*route::get('test',function (){
    $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='CE';
    $usuario->descripcion ='Cedula de extrajeria';
    $usuario->save();
    return $usuario;
});*/

/*route::get('test',function (){
    $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='PP';
    $usuario->descripcion ='Pasaporte';
    $usuario->save();
  return $usuario;
});*/


/////////// ********************      ROLES      ***********************************


/*route::get('test',function (){
    $usuario = new App\models\Rol();
    $usuario->rol ='Admin';
   $usuario->descripcion ='Administrador';
    $usuario->save();
   return $usuario;
});*/

/*route::get('test',function (){
    $usuario = new App\models\Rol();
    $usuario->rol ='Usuario';
   $usuario->descripcion ='Usuario';
   $usuario->save();
    return $usuario;
});*/


/*route::get('test',function (){
    $usuario = new App\Models\Usuario;
    $usuario->nombre ='Juan';
    $usuario->apellido ='Hernandez';
   $usuario->correo = 'gonzy@hotmail.com';
    $usuario->numero = '1193579344';
    $usuario->usuario = 'juan';
    $usuario->password = bcrypt('123');
    $usuario->tipo_documentos_id = '1';
    $usuario->save();
    return $usuario;
});*/

/*route::get('test',function (){
    $usuario = new App\Models\Usuario;
    $usuario->nombre ='Mateo';
    $usuario->apellido ='Lopez';
    $usuario->correo = 'mate33@hotmail.com';
    $usuario->numero = '98765';
    $usuario->usuario = 'mateo';
  $usuario->password = bcrypt('123');
    $usuario->tipo_documentos_id = '1';
    $usuario->save();
    return $usuario;
});*/


Route::get('/', 'VistasController\VistaController@index')->name('/');
Route::get('informacion', 'VistasController\VistaController@informacion')->name('informacion');
Route::get('contactos', ['as' => 'contactos', 'uses' => 'VistasController\VistaController@contactos']);


Route::get('registro', 'BackEnd\RegistroUsuController@index')->name('registro');



Route::post('login', 'Auth\LoginController@login')->name('login');


Route::group(['middleware' => ['auth', 'admin']], function () {


    Route::get('admin', 'BackEnd\AdminController@index')->name('admin');


//    RUTAS DE ROL
    Route::get('roles', 'BackEnd\RolesController@index')->name('roles');
    Route::post('crearRol', 'BackEnd\RolesController@store')->name('crearRol');
    Route::get('crearRol', 'BackEnd\RolesController@create')->name('crearRol');
    Route::post('guardarRol', 'BackEnd\RolesController@store')->name('guardarRol');
    Route::get('edirol/{id}', 'BackEnd\RolesController@show')->name('edirol');
    Route::post('update/{id}', 'BackEnd\RolesController@update')->name('update');
    Route::get('eliminar/{id}', 'BackEnd\RolesController@destroy')->name('eliminar');


//    RUTAS USUARIOS
    Route::get('usuarios', 'BackEnd\UsuariosRegistradosController@index')->name('usuarios');
    Route::get('registro', 'BackEnd\RegistroUsuController@index')->name('registro');
    Route::post('guardarUsuario', 'BackEnd\RegistroUsuController@store')->name('guardarUsuario');
    Route::get('ediUsuario/{id}', 'BackEnd\UsuariosRegistradosController@show')->name('ediUsuario');
    Route::post('updateUsuario/{id}', 'BackEnd\UsuariosRegistradosController@update')->name('updateUsuario');
    Route::get('eliminarUsuario/{id}', 'BackEnd\UsuariosRegistradosController@destroy')->name('eliminarUsuario');

//   RUTAS PRODUCTO
    Route::get('producto', 'BackEnd\RegistroProductoController@index')->name('producto');


//  RUTAS CATEGORIAS
    Route::get('categoria', 'BackEnd\CategoriaController@index')->name('categoria');

    Route::get('tipoDocumentos', 'BackEnd\TipoDocumentoController@index')->name('tipoDocumentos');

    Route::get('cerrarSesion', 'Auth\LoginController@cerrarSesion')->name('cerrarSesion');
});
//RUTAS ESTADO
Route::get('estado', 'BackEnd\EstadoController@index')->name('estado');
//RUTAS UNIDAD
Route::get('unidad', 'BackEnd\UnidadController@index')->name('unidad');
//RUTAS INSUMO
Route::get('insumo', 'BackEnd\InsumoController@index')->name('insumo');


