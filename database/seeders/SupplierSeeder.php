<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $suppliers = new Supplier();
        $suppliers->name = "Femsa";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "ARCA Continental";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Genoma";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Nestle";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Pepsico";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Unilever";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Coca-Cola";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Mars";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Mondelez";
        $suppliers->save();


        $suppliers = new Supplier();
        $suppliers->name = "General Mills";
        $suppliers->save();

        $suppliers = new Supplier();
        $suppliers->name = "Ingram Micro";
        $suppliers->save();





    }
}
