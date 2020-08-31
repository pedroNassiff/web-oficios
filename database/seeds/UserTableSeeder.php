<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Sebastian";
        $user->rol_id = 2;
        $user->lastname = "lastname";
        $user->email = "seba@test";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "jose";
        $user->lastname = "lastname";
        $user->email = "jose@test";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "maria";
        $user->lastname = "lasdasd";
        $user->email = "jasdasdasd@test";
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
