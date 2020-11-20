<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestador;
use App\User;

class PrestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $prestador = User::select(
                'users.name as nombre', 
                'users.lastname as apellido',
                'users.email', 
                'localidades.nombre as localidad' ,
                'prestador.user_id as prestadorID',
                'prestador.descripcion',
                'users.telefono',
                'prestador.web',
                'habilidades.id as habilidadesID',
                'oficio.nombre as oficio',
                'especialidad.nombre  as especialidad'
            )
            ->join('address', 'address.users_id', '=', 'users.id')
            ->join('localidades', 'localidades.id', '=', 'address.localidades_id')
            ->join('prestador', 'users.id', '=', 'prestador.user_id')
            ->join('habilidades', 'prestador.id', '=', 'habilidades.prestador_id')
            ->join('oficio', 'oficio.id', '=', 'habilidades.oficio_id')
            ->join('especialidad', 'especialidad.id', '=', 'habilidades.especialidad_id')
            ->where("users.id", $id)
            ->first();


            
            //DD($prestador);


    	return view(
    		'prestadorPerfil',
    		[
    		 'prestador' => $prestador,
    		]
    	);

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
