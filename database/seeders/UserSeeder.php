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
        $users->password = "12345678";
        $users->role = 'administrator';
        $users->save();

        $users = new User();
        $users->name = "Diego";
        $users->email = "diego@gmail.com";
        $users->password = "12345678";
        $users->role = 'customer';
        $users->save();

        $users = new User();
        $users->name = "Alexis";
        $users->email = "alexis@gmail.com";
        $users->password = "12345678";
        $users->role = 'administrator';
        $users->save();








    }
}
