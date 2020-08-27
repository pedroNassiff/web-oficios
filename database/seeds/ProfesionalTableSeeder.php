<?php

use Illuminate\Database\Seeder;
use App\Profesional;

class ProfesionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesional = new Profesional();
        $profesional->user_id = 2;
        $profesional->localidad_id = 1;
        $profesional->rubro_id = 2;
        $profesional->nombre = "Joselina";
        $profesional->apellido = "Ramirez";
        $profesional->descripcion = "Discurso oral o escrito en el que se explica cómo es una cosa, una persona o un lugar para ofrecer una imagen o una idea completa de ellos en la primera versión de la novela aparecen dilatadas descripciones acerca de la mala vida de la ciudad";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Mayo 234";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.ingjoseramirez.com";
        $profesional->save();

        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 2;
        $profesional->nombre = "Juan";
        $profesional->apellido = "Peres";
        $profesional->descripcion = "descripcion 2";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();

        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 1;
        $profesional->nombre = "Sebastián";
        $profesional->apellido = "Rodriguez";
        $profesional->descripcion = "descripcion 3";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();


        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 3;
        $profesional->nombre = "Marcos";
        $profesional->apellido = "Bruno";
        $profesional->descripcion = "descripcion 4";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();

        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 1;
        $profesional->nombre = "Claudio";
        $profesional->apellido = "Dominguez";
        $profesional->descripcion = "descripcion 5";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();

        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 5;
        $profesional->nombre = "Erick";
        $profesional->apellido = "Pawleski";
        $profesional->descripcion = "descripcion 6";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();


        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 5;
        $profesional->nombre = "Sebastián";
        $profesional->apellido = "Rodriguez";
        $profesional->descripcion = "descripcion 7";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();

        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 2;
        $profesional->nombre = "Carlos";
        $profesional->apellido = "Rodriguez";
        $profesional->descripcion = "descripcion 8";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();

        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 4;
        $profesional->nombre = "Sebastián";
        $profesional->apellido = "Perez";
        $profesional->descripcion = "descripcion 9";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();

        $profesional = new Profesional();
        $profesional->user_id = 1;
        $profesional->localidad_id = 2;
        $profesional->rubro_id = 3;
        $profesional->nombre = "Pedro";
        $profesional->apellido = "Zalazar";
        $profesional->descripcion = "descripcion 10";
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();
    }
}
