<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Localidad;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function listarTodos()
    {
    	//$categorias = DB::table('categorias')->get();
    	$localidades = DB::table('localidades')->get();
    	$rubros = DB::table('rubros')->get();
    	$profesionales = DB::table('profesionales')
            ->join('rubros', 'rubros.id', '=', 'profesionales.rubro_id')
            ->join('localidades', 'localidades.id', '=', 'profesionales.localidad_id')
            ->select('profesionales.id',
                     'profesionales.nombre',
                     'profesionales.apellido',
                     'rubros.nombre as rubro',
                     'profesionales.direccion',
                     'localidades.nombre as localidad',
                     'profesionales.ubicacion_actual',
                     'profesionales.telefono',
                     'profesionales.web',
                     )
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
