<?php

use Illuminate\Database\Seeder;
use App\Models\Oficio;

class OficioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rubro = new Oficio();
        $rubro->nombre = "";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Electricista";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Plomería";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Gasista";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Carpintería";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Técnico en Refrigeración";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Combatidor de Plagas";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Jardinería";
        $rubro->save();

        $rubro = new Oficio();
        $rubro->nombre = "Herrería";
        $rubro->save();
    }
}
