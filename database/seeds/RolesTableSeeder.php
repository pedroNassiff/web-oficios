<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre = "admin";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "moderador";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "prestador";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "prestatario";
        $rol->save();
    }
}
