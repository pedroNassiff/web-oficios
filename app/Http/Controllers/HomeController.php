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
			
			->get();
			



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
