<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = new User();
        $users->name = "Steven";
        $users->email = "steven@gmail.com";
        $users->password = bcrypt("123456789");
        $users->rol_id = 1;
        $users->save();

        $users = new User();
        $users->name = "Kevin";
        $users->email = "kevin@gmail.com";
        $users->password = bcrypt("123456789");
        $users->rol_id = 2;
        $users->save();

        $users = new User();
        $users->name = "Alexis";
        $users->email = "alexis@gmail.com";
        $users->password = bcrypt("123456789");
        $users->rol_id = 2;
        $users->save();


        $users = new User();
        $users->name = "Daniel";
        $users->email = "daniel@gmail.com";
        $users->password = bcrypt("123456789");
        $users->rol_id = 2;
        $users->save();





    }
}
