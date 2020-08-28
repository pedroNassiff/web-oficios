<?php

use Illuminate\Database\Seeder;
use App\Models\Prestador;

class PrestadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestador = new Prestador();
        $prestador->user_id = 2;
        $prestador->oficio_id = 2;
        $prestador->descripcion = "Discurso oral o escrito en el que se explica cómo es una cosa, una persona o un lugar para ofrecer una imagen o una idea completa de ellos en la primera versión de la novela aparecen dilatadas descripciones acerca de la mala vida de la ciudad";
        $prestador->dni = "37343232";
        $prestador->telefono = "362-4122342";
        $prestador->web = "www.ingjoseramirez.com";
        $prestador->matricula = "www.ingjoser3333z.com";
        $prestador->matricula = false;
        $prestador->habilitado = true;
        $prestador->save();

        $prestador = new Prestador();
        $prestador->user_id = 1;
        $prestador->oficio_id = 2;
        $prestador->descripcion = "Dsona o un lugar para ofrecer una imagen o una idea completa de ellos en la primera versión de la novela aparecen dilatadas descripciones acerca de la mala vida de la ciudad";
        $prestador->dni = "333333232";
        $prestador->telefono = "333332342";
        $prestador->web = "www.ingjoseramirez.com";
        $prestador->matricula = "www.ingjoser3333z.com";
        $prestador->matricula = true;
        $prestador->habilitado = true;
        $prestador->save();
    }
}
