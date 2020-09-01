<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prestador;
use App\Models\Especialidad;
use App\Models\Oficio;
use App\Localidad;

class HomeController extends Controller
{
    public function listarTodos()
    {
		
		$localidades = Localidad::get();

		$oficios = Oficio::get();

        $listaoficio = [];
        foreach ($oficios as $oficio) {
            if($oficio->id != 1){
                $listaespecialidades = [];
                $especialidades = Oficio::find($oficio->id)->especialidad;
                foreach($especialidades as $especialidad){
                    array_push($listaespecialidades, $especialidad);
                }
                array_push($listaoficio, ['Oficio'=>$oficio ,'Especialidades'=>$listaespecialidades]);
            }
		}
		
		$prestadores = Prestador::where('habilitado', 1)
		->join('users', 'users.id', "prestador.user_id")
		->select(
			'users.id as id',
			'users.name as nombre',
			'users.lastname as apellido',
		)
		->get();

		$profesionales = [];
    	return view(
    		'home',
    		[
    		 'localidades'   => $localidades,
    		 'listaoficio'    => $listaoficio,
    		 'prestadores' => $prestadores,
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
