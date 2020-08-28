<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function listarTodos()
    {
		
		$localidades = DB::table('localidades')->get();
		
		$oficio = DB::table('oficio')
		->join('especialidad', function ($join) {
			$join->on('especialidad.oficio_id', '=', 'oficio.id');
        })
		->get();
		
		$especialidad = DB::table('especialidad')->get();
		
		$profesionales = DB::table('users')
			->join('roles', 'roles.id', '=', 'users.rol_id')

			->join('address', 'address.users_id', '=', 'users.id')
			->join('prestador', 'prestador.user_id', '=', 'users.id')
			->join('oficio', 'oficio.id', '=', 'prestador.oficio_id')
			//falta extraer las especialidades
			->get();
			
		return dd($profesionales);

    	return view(
    		'home',
    		[
    		 'localidades'   => $localidades,
    		 'rubros'    => $oficio,
    		 'especialidad'    => $especialidad,
    		 'profesionales' => $profesionales
    		]
    	);
    }

    public function listarFiltrados(Request $request)
    {
    	$localidad_id = $request['localidad_id'];
    	$rubro_id = $request['rubro_id'];

    	$localidades = DB::table('localidades')->get();
    	$rubros = DB::table('rubros')->get();

		$profesionales = DB::table('profesionales')
    	->where([
    		['localidad_id', $localidad_id],
    		['rubro_id', $rubro_id]
    	])
    	->get();

    	return view(
    		'home',
    		[
    		 'localidades'   => $localidades,
    		 'rubros'    => $rubros,
    		 'profesionales' => $profesionales
    		]
    	);
    }
}
