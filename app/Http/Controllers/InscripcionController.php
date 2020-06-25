<?php

namespace App\Http\Controllers;

use App\Mail\mailInscripcion;
use Illuminate\Support\Facades\Mail;

class InscripcionController extends Controller
{
    public function mostrarFormulario(){
    	return view('formularioInscripcion');
    }

    public function enviar(){
    	$datos = request()->validate([
    		'nombre' => 'required',
    		'apellido' => 'required',
    		'dni' => 'required',
    		'direccion' => 'required',
    		'localidad' => 'required',
    		'rubro' => 'required',
    		'email' => 'required|email',
    		'rubro' => 'required',
    		'telefono' => 'required',
    	]);

    	Mail::to('sebasrz.rcia@gmail.com')->send(new mailInscripcion($datos));
    	return redirect()->back()->with('mensaje', 'Solicitud enviada, en breve nos pondremos en contacto contigo');
    }
}
