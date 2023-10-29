<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registro = new Inventory();
        $registro->product_id = 1;
        $registro->stock = 250;
        $registro->date = '2023-10-29';
        $registro->supplier_id = 1;
        $registro->save();


        $registro = new Inventory();
        $registro->product_id = 2;
        $registro->stock = 564;
        $registro->date = '2023-10-30';
        $registro->supplier_id = 1;
        $registro->save();
    }
}
