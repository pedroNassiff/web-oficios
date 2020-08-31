<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(LocalidadesTableSeeder::class);
        $this->call(OficioTableSeeder::class);
        $this->call(EspecialidadTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(PrestadorTableSeeder::class);
        $this->call(HabilidadesTableSeeder::class);
    }
}
