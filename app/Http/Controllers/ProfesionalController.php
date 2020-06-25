<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    public function mostrarPerfil($id){
    	//$profesional = DB::table('profesionales')->find($id);

    	$profesional = DB::table('profesionales')
            ->join('rubros', 'rubros.id', '=', 'profesionales.rubro_id')
            ->join('localidades', 'localidades.id', '=', 'profesionales.localidad_id')
            ->select('profesionales.nombre',
            		 'profesionales.apellido',
            		 'rubros.nombre as rubro',
            		 'profesionales.direccion',
            		 'localidades.nombre as localidad',
            		 'profesionales.ubicacion_actual',
            		 'profesionales.telefono',
            		 'profesionales.web'
            	     )
            ->where('profesionales.id', $id)
            ->first();

    	return view('profesionalPerfil', ['profesional' => $profesional]);
            //echo $profesional;
    }
}
