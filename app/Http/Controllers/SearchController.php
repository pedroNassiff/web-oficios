<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prestador;
use App\Models\Especialidad;
use App\Models\Oficio;
use App\Localidad;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localidades = Localidad::get();

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
		
		$prestadores = Prestador::where('habilitado', 1)
		->join('users', 'users.id', "prestador.user_id")
		->select(
			'users.id as id',
			'users.name as nombre',
			'users.lastname as apellido'
		)
		->get();

    	return view(
    		'search',
    		[
    		 'localidades'   => $localidades,
    		 'listaoficio'    => $listaoficio,
    		 'prestadores' => $prestadores,
    		]
    	);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
