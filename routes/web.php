<?php

use Illuminate\Support\Facades\Route;

## 
Route::get('/', 'HomeController@ListarTodos');

Route::post('/buscar', 'HomeController@ListarFiltrados');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profesional/{id}', 'ProfesionalController@mostrarPerfil');

Route::get('/inscripcion', 'InscripcionController@mostrarFormulario');

Route::post('/inscripcion/enviar', 'InscripcionController@enviar');

Auth::routes();


