<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rubro;
use App\Localidad;
use App\Models\Prestador;
use App\User;

class PrestadorController extends Controller
{
    public function mostrarPerfil($id){
    	$prestador = DB::table('prestador')->find($id);

    	return view('editarPerfil', ['prestador' => $prestador]);
        //echo $profesional;
    }

    public function miPerfil(){

        $id = Auth::user()->id;
        $records = User::find($id);

        /* $profesional = DB::table('profesionales')
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
            ->first(); */

        return view('user.perfil');
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
        

        return view('user.editarPerfil');
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
