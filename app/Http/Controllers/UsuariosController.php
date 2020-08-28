<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesional;

class UsuariosController extends Controller
{
    
     
     
    public function listaUsuarios()
    {
        try{

            $records = User::orderBy('id', 'desc')->paginate(10);           
            return view('user/listaUsuarios', ['users' => $records]);

        }catch (\Exception $e) {

            return view('home');      
        }
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
