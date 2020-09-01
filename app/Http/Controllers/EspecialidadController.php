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
                    array_push($listaespecialidades, $especialidad);
                }
                array_push($listaoficio, ['Oficio'=>$oficio ,'Especialidades'=>$listaespecialidades]);
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
        try {
            $oficio = Oficio::find($request['oficio']);
            $especialidad = new Especialidad();
            $especialidad->nombre =  $request['nombre'];
            $especialidad->oficio_id =  $oficio->id;
            $especialidad->descripcion =  $request['descripcion'];
            $especialidad->save();
            return back()
                ->with('message', 'Guardado con Éxito.')->with('typealert', 'success'); 
        } catch (\Throwable $th) {
            return back()
                ->with('message', 'fallo en la operación.')->with('typealert', 'danger'); 
        }
        
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
            $especialidad = Especialidad::find($id);
            $especialidad->delete();
            return back()->with('message', 'Se borró exitosamente: '.$especialidad->nombre)->with('typealert', 'success');
        } catch (\Throwable $th) {
            return back()->with('message', 'Error al borrar (No se puede borrar una especialidad se encuentra asignado)')->with('typealert', 'danger');
        }
    }
}
