<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidad;

class LocalidadesController extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localidades = Localidad::get();

        return view('admin.localidades', [
            'localidades' => $localidades
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valido los datos enviados del formulario
        $this->validate($request, [
            'nombre' => 'required|unique',
        ]);

        // crear un nuevo recurso
        $localidad = new Localidad();
    	$localidad->nombre = $request['nombre'];
    	$localidad->save();
        //retorn
        return back()->with('message', 'Guardado con Exito.')->with('typealert', 'success');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $localidad = Localidad::find($id);
            $localidad->delete();
            return back()->with('message', 'Se borro exitosamente: '.$localidad->nombre)->with('typealert', 'success');
        } catch (\Throwable $th) {
            return back()->with('message', 'Error al borrar (No se puede borrar una localidad que se encuentra asignada a algún usuario)')->with('typealert', 'danger');
        }

       
    }
}
