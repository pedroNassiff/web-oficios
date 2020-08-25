<?php

use Illuminate\Database\Seeder;
use App\Rubro;

class RubroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rubro = new Rubro();
        $rubro->nombre = "Plomería";
        $rubro->save();

        $rubro = new Rubro();
        $rubro->nombre = "Gasista";
        $rubro->save();

        $rubro = new Rubro();
        $rubro->nombre = "Carpintería";
        $rubro->save();

        $rubro = new Rubro();
        $rubro->nombre = "Electricista";
        $rubro->save();

        $rubro = new Rubro();
        $rubro->nombre = "Técnico en Refrigeración";
        $rubro->save();

        $rubro = new Rubro();
        $rubro->nombre = "Combatidor de Plagas";
        $rubro->save();

        $rubro = new Rubro();
        $rubro->nombre = "Jardinería";
        $rubro->save();

        $rubro = new Rubro();
        $rubro->nombre = "Herrería";
        $rubro->save();
	}
}

