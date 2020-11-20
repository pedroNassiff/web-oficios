<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d4bb6bdf071feae7487244cdb8a0f69092d67c07
use Illuminate\Support\Facades\Auth;
use App\Rubro;
use App\Localidad;
use App\Models\Prestador;
<<<<<<< HEAD
=======
=======
use App\Prestador;
>>>>>>> e61dc7ba2f633012ca98fcc9ef751a772c2c2c1a
>>>>>>> d4bb6bdf071feae7487244cdb8a0f69092d67c07
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d4bb6bdf071feae7487244cdb8a0f69092d67c07
    public function crearPerfil(){
        $rubros = Rubro::get();
        $localidades = Localidad::get();

        return view('user.crearPerfil', [
            'localidades' => $localidades,
            'rubros'      => $rubros
        ]);
<<<<<<< HEAD
=======
=======
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestador = User::select(
                'users.name as nombre', 
                'users.lastname as apellido',
                'users.email', 
                'localidades.nombre as localidad' ,
                'prestador.user_id as prestadorID',
                'prestador.descripcion',
                'prestador.telefono',
                'prestador.web',
                'habilidades.id as habilidadesID',
                'oficio.nombre as oficio',
                'especialidad.nombre  as especialidad'
            )
            ->join('address', 'address.users_id', '=', 'users.id')
            ->join('localidades', 'localidades.id', '=', 'address.localidades_id')
            ->join('prestador', 'users.id', '=', 'prestador.user_id')
            ->join('habilidades', 'prestador.id', '=', 'habilidades.prestador_id')
            ->join('oficio', 'oficio.id', '=', 'habilidades.oficio_id')
            ->join('especialidad', 'especialidad.id', '=', 'habilidades.especialidad_id')
            ->where("users.id", $id)
            ->first();


            
            //DD($prestador);


    	return view(
    		'prestadorPerfil',
    		[
    		 'prestador' => $prestador,
    		]
    	);

>>>>>>> e61dc7ba2f633012ca98fcc9ef751a772c2c2c1a
>>>>>>> d4bb6bdf071feae7487244cdb8a0f69092d67c07
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
