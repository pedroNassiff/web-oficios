<?php

namespace App\Http\Controllers;

use App\Mail\mailInscripcion;
use Illuminate\Support\Facades\Mail;
use App\Models\Prestador;
use Illuminate\Http\Request;
use App\Models\Especialidad;
use App\Models\Oficio;
use App\Models\Habilidades;

class InscripcionController extends Controller
{
    public function mostrarFormulario(){

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
		
        return view('formularioInscripcion', [
            'listaoficio' => $listaoficio
        ]);
    }

    public function enviar(Request $request){

    	$datos = request()->validate([
			'descripcion' => 'required',
    		'dni' => 'required',
    		'telefono' => 'required',
    		'oficio_id' => 'required',
		]);

		$prestador = new Prestador();
    	$prestador->user_id = $request['_id'];
    	$prestador->descripcion = $request['descripcion'];
    	$prestador->dni = $request['dni'];
    	$prestador->telefono = $request['telefono'];
    	$prestador->web = $request['web'];
		$prestador->matricula = $request['matricula'];

		$habilidades = new Habilidades();
		$habilidades->prestador_id = $request['_id'];
		$habilidades->oficio_id = $request['oficio_id'];
		$habilidades->especialidad_id = $request['especialidad_id'];

		if($prestador->save() && $habilidades->save()){
			//habilitar el envio de email
			/* Mail::to('joselynr794@gmail.com')->send(new mailInscripcion($datos)); */
			return redirect()->route('home')->with('message', 'Tu solicitud fue Enviada a un administrador para ser validada (para más información revisa tu email).')->with('typealert', 'success');
		}else{
			return redirect()->route('home')->with('message', 'Fallo en la Inscripción.')->with('typealert', 'danger');
		}
    }
}
