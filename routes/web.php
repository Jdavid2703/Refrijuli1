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


//route::get('test',function (){
//    $usuario = new App\models\TipoDocumento();
//    $usuario->nombre ='CC';
//    $usuario->descripcion ='Cedula de Ciudadania';
//    $usuario->save();
//    return $usuario;
//});

//route::get('test',function (){
//    $usuario = new App\models\TipoDocumento();
//    $usuario->nombre ='TI';
//    $usuario->descripcion ='Tarjeta de Identidad';
//    $usuario->save();
//    return $usuario;
//});

//route::get('test',function (){
//    $usuario = new App\models\TipoDocumento();
//    $usuario->nombre ='CE';
//    $usuario->descripcion ='Cedula de extrajeria';
//    $usuario->save();
//    return $usuario;
//});

//route::get('test',function (){
//    $usuario = new App\models\TipoDocumento();
//    $usuario->nombre ='PP';
//    $usuario->descripcion ='Pasaporte';
//    $usuario->save();
//    return $usuario;
//});


/////////// ********************      ROLES      ***********************************


//route::get('test',function (){
//    $usuario = new App\models\Rol();
//    $usuario->rol ='Admin';
//    $usuario->descripcion ='Administrador';
//    $usuario->save();
//    return $usuario;
//});

//route::get('test',function (){
//    $usuario = new App\models\Rol();
//    $usuario->rol ='Usuario';
//    $usuario->descripcion ='Usuario';
//    $usuario->save();
//    return $usuario;
//});


//route::get('test',function (){
//    $usuario = new App\Models\Usuario;
//    $usuario->nombre ='Catalina';
//    $usuario->apellido ='Gonzalez';
//    $usuario->correo = 'gonzy@hotmail.com';
//    $usuario->numero = '74859632';
//    $usuario->usuario = 'gonzy';
//    $usuario->password = bcrypt('123');
//    $usuario->tipo_documentos_id = '2';
//    $usuario->save();
//    return $usuario;
//});

//route::get('test',function (){
//    $usuario = new App\Models\Usuario;
//    $usuario->nombre ='Mateo';
//    $usuario->apellido ='Lopez';
//    $usuario->correo = 'mate33@hotmail.com';
//    $usuario->numero = '98765';
//    $usuario->usuario = 'hjhj';
//    $usuario->password = bcrypt('123');
//    $usuario->tipo_documentos_id = '2';
//    $usuario->save();
//    return $usuario;
//});


Route::get('/', 'VistasController\VistaController@index')->name('/');
Route::get('informacion', 'VistasController\VistaController@informacion')->name('informacion');
Route::get('contactos', ['as' => 'contactos', 'uses' => 'VistasController\VistaController@contactos']);


Route::post('login', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('admin', 'BackEnd\AdminController@index')->name('admin');
    Route::get('tipoDocumentos', 'BackEnd\TipoDocumentoController@index')->name('tipoDocumentos');
});






