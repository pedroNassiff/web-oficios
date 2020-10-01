<?php

use Illuminate\Database\Seeder;
use App\Models\Especialidad;

class EspecialidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidad = new Especialidad();
        $especialidad->oficio_id = 2;
        $especialidad->nombre = "Automoton";
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->oficio_id = 2;
        $especialidad->nombre = "Quiensabe";
        $especialidad->descripcion = "descripcion magica";
        $especialidad->save();
    }
}
