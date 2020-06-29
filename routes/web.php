<?php

use Illuminate\Support\Facades\Route;

## 
Route::get('/', 'HomeController@ListarTodos');

Route::post('/buscar', 'HomeController@ListarFiltrados');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profesional/{id}', 'ProfesionalController@mostrarPerfil');

Route::get('/inscripcion', 'InscripcionController@mostrarFormulario');

Route::post('/inscripcion/enviar', 'InscripcionController@enviar');

Route::group(['middleware'=>'auth'], function(){
	Route::get('/perfil', 'ProfesionalController@miPerfil')->name('perfil');
	Route::get('/perfil/crear', 'ProfesionalController@crearPerfil');
	Route::post('/perfil/guardar', 'ProfesionalController@guardarPerfil');
	Route::get('/perfil/editar', 'ProfesionalController@editarPerfil');
	Route::post('/perfil/actualizar/{id}', 'ProfesionalController@actualizarPerfil');
});

Route::group(['middleware'=>'admin'], function(){
	Route::get('/admin/alta', 'AdminController@formAlta');
	Route::post('/admin/alta', 'AdminController@altaUsuario');
	Route::get('/admin/usuarios', 'AdminController@usuarios');
});

Auth::routes();


