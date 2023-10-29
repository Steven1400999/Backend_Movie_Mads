<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = new Rol();
        $rols->rol_name = "Administrator";
        $rols->save();

        $rols = new Rol();
        $rols->rol_name = "Employee";
        $rols->save();

    }
}
