<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre = "Oficio";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "Profesion";
        $categoria->save();
    }
}
