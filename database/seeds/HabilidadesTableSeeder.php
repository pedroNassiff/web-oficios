<?php

use Illuminate\Database\Seeder;
use App\Models\Habilidades;

class HabilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habilidades = new Habilidades();
        $habilidades->prestador_id = 1;
        $habilidades->oficio_id = 2;
        $habilidades->especialidad_id = 1;
        $habilidades->save();

        $habilidades = new Habilidades();
        $habilidades->prestador_id = 1;
        $habilidades->oficio_id = 2;
        $habilidades->especialidad_id = 2;
        $habilidades->save();

        $habilidades = new Habilidades();
        $habilidades->prestador_id = 2;
        $habilidades->oficio_id = 2;
        $habilidades->especialidad_id = 2;
        $habilidades->save();

        $habilidades = new Habilidades();
        $habilidades->prestador_id = 3;
        $habilidades->oficio_id = 2;
        $habilidades->save();
    }
}
