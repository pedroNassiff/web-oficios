<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prestador;
use App\Models\Especialidad;
use App\Models\Oficio;
use App\Models\Address;
use App\User;
use App\Localidad;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->request->localidad
        //DD($request->request);

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
        
        /* $localidadesSelecionada = Localidad::find($request['localidad']);
        
        $User = User::get();
        $Address = Address::get();
         */

        //$localidadesSelecionada = Localidad::find($request['localidad'])->nombre;
        
        /* "localidad" => "10"
        "oficio" => "2"
        "especialidad" => "2"
        "last_name" => "Rodigres"
        "name" => "seba" */

        
        // contendra el resultado del filtrado de usuarios
        $data = [];
        
        //si el valor del campo especialidad es nulo se omite la busqueda por especialidad
        //en caso contrario se incluye a especialidad en la busqueda    
        if ($request['especialidad'] == null) {
            $data = User::select(
                'users.name', 
                'users.lastname', 
                'localidades.nombre as localidades' ,
                'prestador.user_id as prestadorID',
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
            ->where("localidades.id", $request['localidad'])
            ->where("oficio.id", $request['oficio'])
            ->where('users.name', 'like', '%' . $request['name'] . '%')
            ->where('users.lastname', 'like', '%' . $request['last_name'] . '%')

            ->get();
        }else{
            $data = User::select(
                'users.name', 
                'users.lastname', 
                'localidades.nombre as localidades' ,
                'prestador.user_id as prestadorID',
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
            ->where("localidades.id", $request['localidad'])
            ->where("oficio.id", $request['oficio'])
            ->where("especialidad.id", $request['especialidad'])
            ->where('users.name', 'like', '%' . $request['name'] . '%')
            ->where('users.lastname', 'like', '%' . $request['last_name'] . '%')
            ->get();
        }

        
        
        //DD($request['oficio']);


    	return view(
    		'search',
    		[
    		 'localidades' => $localidades,
    		 'listaoficio' => $listaoficio,
             'prestadores' => $prestadores,
             'resultados'  => $data,
             'nombre'      => $request['name'],
             'apellido'    => $request['last_name'],
             'localidad'   => $request['localidad'],
             'oficio'      => $request['oficio'],
             'especialidad'=> $request['especialidad']
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
