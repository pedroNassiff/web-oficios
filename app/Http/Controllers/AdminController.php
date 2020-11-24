<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Prestador;
use App\Mail\EmailSolicitud;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function formAlta(){
    	return view('admin.formAlta');
	}

	public function index(){
    	return view('admin.dashboard');
    }

    public function altaUsuario(Request $request){
    	$user = new User();
    	$user->name = $request['nombre'];
    	$user->email = $request['email'];
    	$user->password = bcrypt($request['password']);

    	$user->save();

    	return redirect()->back()->with('mensaje', 'El usuario se dió de alta correctamente');
	}
	
	public function getAdministracion(){
		return view('admin.administracion');
	}
	
	public function solicitudes(){

		$prestadores = Prestador::join('users', 'users.id', '=', 'prestador.user_id')->get();
		//dd($prestadores);
        return view('admin.solicitudes', ['prestadores' => $prestadores]);
	}

	public function solicitudAceptada(Request $request){
		$prestadores = Prestador::find($request->id);
		$prestadores->habilitado = 1;
		if($prestadores->save()){
			//enviar mail 
			$user = User::find($prestadores->user_id);
			Mail::to($user->email)->send(new EmailSolicitud($user));
		}
		return back();
	}

	public function solicitudNegada(Request $request){
		//enviar mail informando de uqe no se acepto la solicitud
		return back();
	}
}
