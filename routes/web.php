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
Route::get('/', 'HomeController@ListarTodos')->name('home');

Route::post('/buscar', 'HomeController@ListarFiltrados');


Route::get('/profesional/{id}', 'ProfesionalController@mostrarPerfil');


Route::get('/home', 'HomeController@index');

Route::get('/profesional/{id}', 'ProfesionalController@mostrarPerfil');

Route::get('/inscripcion', 'InscripcionController@mostrarFormulario');

Route::post('/inscripcion/enviar', 'InscripcionController@enviar');

Route::get('/acuerdo', function(){
	return view ('terminos_y_condiciones');
});
Route::get('/contact', function(){
	return view ('contact');
});

Route::get('/ayuda', function(){
	return view('faq');
});

Route::group(['middleware'=>'auth'], function(){
	Route::get('/perfil', 'ProfesionalController@miPerfil')->name('perfil');
	Route::get('/perfil/crear', 'ProfesionalController@crearPerfil');
	Route::post('/perfil/guardar', 'ProfesionalController@guardarPerfil');
	Route::get('/perfil/editar', 'ProfesionalController@editarPerfil');
	Route::post('/perfil/actualizar/{id}', 'ProfesionalController@actualizarPerfil');


	Route::group(['middleware'=>'admin'], function(){
		Route::get('/admin/inicio', 'AdminController@index')->name('admin.inicio');
		Route::get('/admin/alta', 'AdminController@formAlta');
		Route::post('/admin/alta', 'AdminController@altaUsuario');
		Route::get('/admin/usuarios', 'UsuariosController@listaUsuarios');
		Route::get('/admin/administracion', 'AdminController@getAdministracion');

		//localidades
		Route::get('/admin/indexLocalidad', 'LocalidadesController@index')->name('perfil');
		Route::post('/admin/storeLocalidad', 'LocalidadesController@store')->name('perfil');
		Route::get('/admin/destroyLocalidad/{id}', 'LocalidadesController@destroy')->name('localidades.destroyLocalidad');

		//Oficio
		Route::get('/admin/indexOficio', 'OficioController@index')->name('oficio.indexOficio');
		Route::post('/admin/storeOficio', 'OficioController@store')->name('oficio.storeOficio');
		Route::get('/admin/destroyOficio/{id}', 'OficioController@destroy')->name('oficio.destroyOficio');
		Route::get('/admin/altaOficio', 'OficioController@index')->name('admin.altaOficio');//La misma ruta para añadir especialidad

		//Especialidad
		Route::get('/admin/indexEspecialidad', 'EspecialidadController@index')->name('especialidad.indexEspecialidad');
		Route::post('/admin/storeEspecialidad', 'EspecialidadController@store')->name('especialidad.storeEspecialidad');
		Route::get('/admin/destroyEspecialidad/{id}', 'EspecialidadController@destroy')->name('especialidad.destroyEspecialidad');
		//solicitudes
		Route::get('/admin/solicitudes', 'AdminController@solicitudes')->name('admin.solicitudes');
	});

});



Auth::routes();

Route::get('/gmaps', 'MapController@gmaps');

// borrar cuando esten los controladores
Route::get('admin/oficios',function(){
	return view ('admin/oficios');
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