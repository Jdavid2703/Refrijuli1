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

route::get('cc',function (){
   $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='CC';
    $usuario->descripcion ='Cedula de Ciudadania';
    $usuario->save();
   return $usuario;
});

route::get('ti',function (){
    $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='TI';
    $usuario->descripcion ='Tarjeta de Identidad';
    $usuario->save();
    return $usuario;
});

route::get('ce',function (){
    $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='CE';
    $usuario->descripcion ='Cedula de extrajeria';
    $usuario->save();
    return $usuario;
});

route::get('pp',function (){
    $usuario = new App\models\TipoDocumento();
    $usuario->nombre ='PP';
    $usuario->descripcion ='Pasaporte';
    $usuario->save();
  return $usuario;
});


/////////// ********************      ROLES      ***********************************


route::get('rol1',function (){
    $usuario = new App\models\Rol();
    $usuario->rol ='Admin';
   $usuario->descripcion ='Administrador';
    $usuario->save();
   return $usuario;
});

route::get('rol2',function (){
    $usuario = new App\models\Rol();
    $usuario->rol ='Usuario';
   $usuario->descripcion ='Usuario';
   $usuario->save();
    return $usuario;
});


route::get('usuario1',function (){
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
});

route::get('usuario2',function (){
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
});


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
    //BOTON BUSCAR USUARIOS
    Route::get('buscar', 'BackEnd\UsuariosRegistradosController@Buscar')->name('buscar');

//   RUTAS PRODUCTO
    Route::get('producto', 'BackEnd\ProductoController@index')->name('producto');
    Route::get('crearProducto', 'BackEnd\ProductoController@create')->name('crearProducto');
    Route::post('guardarProducto', 'BackEnd\ProductoController@store')->name('guardarProducto');
    Route::get('editarProducto/{id}', 'BackEnd\ProductoController@show')->name('editarProducto');
    Route::post('updateProducto/{id}', 'BackEnd\ProductoController@update')->name('updateProducto');
    Route::get('eliminarProducto/{id}', 'BackEnd\ProductoController@destroy')->name('eliminarProducto');

//RUTAS ESTADO
    Route::get('estado', 'BackEnd\EstadoController@index')->name('estado');
    Route::get('crearEstado', 'BackEnd\EstadoController@create')->name('crearEstado');
    Route::post('guardarEstado', 'BackEnd\EstadoController@store')->name('guardarEstado');
    Route::get('editarEstado/{id}', 'BackEnd\EstadoController@show')->name('editarEstado');
    Route::post('updateEstado/{id}', 'BackEnd\EstadoController@update')->name('updateEstado');
    Route::get('eliminarEstado/{id}', 'BackEnd\EstadoController@destroy')->name('eliminarEstado');

//RUTAS UNIDAD
    Route::get('unidad', 'BackEnd\UnidadController@index')->name('unidad');
    Route::get('registroUnidad', 'BackEnd\RegistroPedidoController@index')->name('registroPedido');
    Route::get('crearUnidad', 'BackEnd\UnidadController@create')->name('crearUnidad');
    Route::post('guardarUnidad', 'BackEnd\UnidadController@store')->name('guardarUnidad');
    Route::get('editarUnidad/{id}', 'BackEnd\UnidadController@show')->name('editarUnidad');
    Route::post('updateUnidad/{id}', 'BackEnd\UnidadController@update')->name('updateUnidad');
    Route::get('eliminarUnidad/{id}', 'BackEnd\UnidadController@destroy')->name('eliminarUnidad');

//RUTAS INSUMO
    Route::get('insumo', 'BackEnd\InsumoController@index')->name('insumo');
    Route::get('registroInsumo', 'BackEnd\RegistroInsumoController@index')->name('registroInsumo');
    Route::post('guardarInsumo', 'BackEnd\RegistroInsumoController@store')->name('guardarInsumo');
    Route::get('editarInsumo/{id}', 'BackEnd\RegistroInsumoController@show')->name('editarInsumo');
    Route::post('updateInsumo/{id}', 'BackEnd\RegistroInsumoController@update')->name('updateInsumo');
    Route::get('eliminarInsumo/{id}', 'BackEnd\RegistroInsumoController@destroy')->name('eliminarInsumo');


//  RUTAS CATEGORIAS
    Route::get('categoria', 'BackEnd\CategoriaController@index')->name('categoria');
    Route::get('crearCategoria', 'BackEnd\CategoriaController@create')->name('crearCategoria');
    Route::post('guardarCategoria', 'BackEnd\CategoriaController@store')->name('guardarCategoria');
    Route::get('editarCategoria/{id}', 'BackEnd\CategoriaController@show')->name('editarCategoria');
    Route::post('updateCategoria/{id}', 'BackEnd\CategoriaController@update')->name('updateCategoria');
    Route::get('eliminarCategoria/{id}', 'BackEnd\CategoriaController@destroy')->name('eliminarCategoria');

//  RUTAS PRESENTACION
    Route::get('presentacion', 'BackEnd\PresentacionController@index')->name('presentacion');
    Route::get('crearPresentacion', 'BackEnd\PresentacionController@create')->name('crearPresentacion');
    Route::post('guardarPresentacion', 'BackEnd\PresentacionController@store')->name('guardarPresentacion');
    Route::get('editarPresentacion/{id}', 'BackEnd\PresentacionController@show')->name('editarPresentacion');
    Route::post('updatePresentacion/{id}', 'BackEnd\PresentacionController@update')->name('updatePresentacion');
    Route::get('eliminarPresentacion/{id}', 'BackEnd\PresentacionController@destroy')->name('eliminarPresentacion');

//  RUTAS DE PEDIDO
    Route::get('pedidos', 'BackEnd\PedidoController@index')->name('pedidos');
    Route::get('registroPedido', 'BackEnd\RegistroPedidoController@index')->name('registroPedido');
    Route::post('guardarPedido', 'BackEnd\RegistroPedidoController@store')->name('guardarPedido');
    Route::get('editarPedido/{id}', 'BackEnd\RegistroPedidoController@show')->name('editarPedido');
    Route::post('updatePedido/{id}', 'BackEnd\RegistroPedidoController@update')->name('updatePedido');
    Route::get('eliminarPedido/{id}', 'BackEnd\RegistroPedidoController@destroy')->name('eliminarPedido');






    Route::get('tipoDocumentos', 'BackEnd\TipoDocumentoController@index')->name('tipoDocumentos');

    Route::get('cerrarSesion', 'Auth\LoginController@cerrarSesion')->name('cerrarSesion');
});



