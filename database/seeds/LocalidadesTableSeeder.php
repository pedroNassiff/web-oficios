<?php

use Illuminate\Database\Seeder;
use App\Localidad;

class LocalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localidad = new Localidad();
        $localidad->nombre = "Resistencia";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Margarita Belén";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Las Palmas";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Charata";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Las Breñas";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Colonia Benitez";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "La Leonesa";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Saenz Peña";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Colonia Elisa";
        $localidad->save();

        $localidad = new Localidad();
        $localidad->nombre = "Laguna Blanca";
        $localidad->save();
    }
}
