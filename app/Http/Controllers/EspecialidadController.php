<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;
use App\Models\Oficio;

class EspecialidadController extends Controller
{
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
        //listar todas las especialidades
        $oficios = Oficio::get();
        $listaoficio = [];
        foreach ($oficios as $oficio) {
            if($oficio->id != 1){
                $listaespecialidades = [];
                $especialidades = Oficio::find($oficio->id)->especialidad;
                
                foreach($especialidades as $especialidad){
                    array_push($listaespecialidades, ['nombre' => $especialidad->nombre, 'descripcion' => $especialidad->descripcion]);
                }
    
                array_push($listaoficio, ['Oficio'=>$oficio->nombre ,'Especialidades'=>$listaespecialidades]);
            }
        }
        //return dd($listaoficio);
        return view('admin.especialidades', [
            'listaoficio' => $listaoficio
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
        /* $oficio = Oficio::where('nombre', $request['oficio'])->get();
        
        $especialidad = new Especialidad();
        $especialidad->nombre =  $request['nombre'];
        $especialidad->descripcion =  $request['descripcion'];

        $especialidad->oficio_id =  2;

        $especialidad->save();
        return redirect()->route('admin.especialidades')->with('message', 'Guardado con Exito.')->with('typealert', 'success'); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
