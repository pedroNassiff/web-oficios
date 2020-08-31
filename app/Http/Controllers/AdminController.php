<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function formAlta(){
    	return view('admin.formAlta');
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
	
}
