<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rubro;
use App\Localidad;
use App\Profesional;

class ProfesionalController extends Controller
{
    public function mostrarPerfil($id){
    	//$profesional = DB::table('profesionales')->find($id);

    	$profesional = DB::table('profesionales')
            ->join('rubros', 'rubros.id', '=', 'profesionales.rubro_id')
            ->join('localidades', 'localidades.id', '=', 'profesionales.localidad_id')
            ->select('profesionales.nombre',
            		 'profesionales.apellido',
            		 'profesionales.descripcion',
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

    public function miPerfil(){
        $id = Auth::user()->id;

        $profesional = DB::table('profesionales')
            ->join('rubros', 'rubros.id', '=', 'profesionales.rubro_id')
            ->join('localidades', 'localidades.id', '=', 'profesionales.localidad_id')
            ->select('profesionales.nombre',
                     'profesionales.apellido',
                     'profesionales.descripcion',
                     'rubros.nombre as rubro',
                     'profesionales.direccion',
                     'localidades.nombre as localidad',
                     'profesionales.ubicacion_actual',
                     'profesionales.telefono',
                     'profesionales.web'
                     )
            ->where('profesionales.user_id', $id)
            ->first();

        return view('user.perfil', ['profesional' => $profesional]);
    }

    public function crearPerfil(){
        $rubros = Rubro::get();
        $localidades = Localidad::get();

        return view('user.crearPerfil', [
            'localidades' => $localidades,
            'rubros'      => $rubros
        ]);
    }

    public function guardarPerfil(Request $request){
        $perfil = new Profesional();
        $perfil->user_id = Auth::user()->id;
        $perfil->localidad_id = $request['localidad_id'];
        $perfil->rubro_id = $request['rubro_id'];
        $perfil->nombre = $request['nombre'];
        $perfil->apellido = $request['apellido'];
        $perfil->descripcion = $request['descripcion'];
        $perfil->dni = $request['dni'];
        $perfil->direccion = $request['direccion'];
        $perfil->ubicacion_actual = "Av. 9 de Julio 222";
        $perfil->telefono = $request['telefono'];
        $perfil->web = $request['web'];

        $perfil->save();

        return redirect()->route('perfil')->with('message', 'Perfil guardado correctamente.');
    }

    public function editarPerfil(){
        $id = Auth::user()->id;
        $profesional = DB::table('profesionales')->where('user_id', $id)->first();
        $localidades = Localidad::get();
        $rubros = Rubro::get();

        return view('user.editarPerfil', 
            [ 'profesional' => $profesional, 
              'localidades' => $localidades,
              'rubros' => $rubros
            ]);
    }

    public function actualizarPerfil(Request $request, $id){
        $profesional = Profesional::where('user_id', $id)->first();

        $profesional->localidad_id = $request['localidad_id'];
        $profesional->rubro_id = $request['rubro_id'];
        $profesional->nombre = $request['nombre'];
        $profesional->apellido = $request['apellido'];
        $profesional->direccion = $request['direccion'];
        $profesional->telefono = $request['telefono'];
        $profesional->web = $request['web'];

        $profesional->save();

        return redirect()->route('perfil')->with('message', 'Perfil actualizado correctamente.');
    }
}
