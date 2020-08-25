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
        $profesional->dni = "37343232";
        $profesional->direccion = "Av. 9 de Julio 213";
        $profesional->ubicacion_actual = "Av. 9 de Mayo 234";
        $profesional->telefono = "362-4122342";
        $profesional->web = "www.sebarodriguez.com";
        $profesional->save();
    }
}
