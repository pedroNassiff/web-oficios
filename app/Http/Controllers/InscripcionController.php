<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function mostrarFormulario(){
    	return view('formularioInscripcion');
    }
}
