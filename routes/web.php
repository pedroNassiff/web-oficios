<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/admin/usuarios', 'UsuariosController@listaUsuarios');
## 
Route::get('/', 'HomeController@ListarTodos');

Route::post('/buscar', 'HomeController@ListarFiltrados');


Route::get('/profesional/{id}', 'ProfesionalController@mostrarPerfil');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profesional/{id}', 'ProfesionalController@mostrarPerfil');

Route::get('/inscripcion', 'InscripcionController@mostrarFormulario');

Route::post('/inscripcion/enviar', 'InscripcionController@enviar');

Route::get('/acuerdo', function(){
	return view ('terminos_y_condiciones');
});

Route::group(['middleware'=>'auth'], function(){
	Route::get('/perfil', 'ProfesionalController@miPerfil')->name('perfil');
	Route::get('/perfil/crear', 'ProfesionalController@crearPerfil');
	Route::post('/perfil/guardar', 'ProfesionalController@guardarPerfil');
	Route::get('/perfil/editar', 'ProfesionalController@editarPerfil');
	Route::post('/perfil/actualizar/{id}', 'ProfesionalController@actualizarPerfil');


	Route::group(['middleware'=>'admin'], function(){
		Route::get('/admin/alta', 'AdminController@formAlta');
		Route::post('/admin/alta', 'AdminController@altaUsuario');
		Route::get('/admin/usuarios', 'UsuariosController@listaUsuarios');

		//localidades
		Route::get('/admin/indexLocalidad', 'LocalidadesController@index')->name('localidades.indexLocalidad');
		Route::post('/admin/storeLocalidad', 'LocalidadesController@store')->name('localidades.storeLocalidad');
		Route::get('/admin/destroyLocalidad/{id}', 'LocalidadesController@destroy')->name('localidades.destroyLocalidad');

		//Oficio
		Route::get('/admin/indexOficio', 'OficioController@index')->name('oficio.indexOficio');
		Route::post('/admin/storeOficio', 'OficioController@store')->name('oficio.storeOficio');
		Route::get('/admin/destroyOficio/{id}', 'OficioController@destroy')->name('oficio.destroyOficio');
		
	});

});



Auth::routes();

Route::get('/gmaps', 'MapController@gmaps');
Route::get('/mapa',function(){
	return view ('mapa');
});

 /*usuarios*/
 Route::get('/users', [
	'uses' => 'UserController@listaUsuarios',
	'as' => 'users.main'
]);

Route::get('/users/show/{id}', [
	'uses' => 'UserController@show',
	'as' => 'users.show'
]);
Route::get('/users/edit/{id}', [
	'uses' => 'UserController@edit',
	'as' => 'users.edit'
]);
Route::post('/users/update/{id}', [
	'uses' => 'UserController@update',
	'as' => 'users.update'
]);
Route::get('/users/editpassword/{id}', [
	'uses' => 'UserController@editpassword',
	'as' => 'users.editpassword'
]);
Route::post('/users/updatepassword/{id}', [
	'uses' => 'UserController@updatepassword',
	'as' => 'users.updatepassword'
]);
Route::get('/users/destroy/{id}', [
	'uses' => 'UserController@destroy',
	'as' => 'users.destroy'
]);

Route::get('/users/create', [
	'uses' => 'UserController@create',
	'as' => 'users.create'
]);
Route::post('/users/store', [
	'uses' => 'UserController@store',
	'as' => 'users.store'
]);