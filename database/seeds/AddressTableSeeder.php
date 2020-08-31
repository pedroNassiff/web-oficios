<?php

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidad = new Address();
        $especialidad->users_id = 2;
        $especialidad->localidades_id = 1;
        $especialidad->calle = "Jujuy";
        $especialidad->num_calle = "57";
        $especialidad->depto_num = "2";
        $especialidad->depto_letra = "E";
        $especialidad->save();

        $especialidad = new Address();
        $especialidad->users_id = 1;
        $especialidad->localidades_id = 1;
        $especialidad->calle = "Salta";
        $especialidad->num_calle = "27";
        $especialidad->depto_num = "2";
        $especialidad->depto_letra = "E";
        $especialidad->save();

        $especialidad = new Address();
        $especialidad->users_id = 3;
        $especialidad->localidades_id = 1;
        $especialidad->calle = "Salta";
        $especialidad->num_calle = "27";
        $especialidad->depto_num = "2";
        $especialidad->depto_letra = "E";
        $especialidad->save();
    }
}
