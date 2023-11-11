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
        $inventory = new Inventory();
        $inventory->product_id = 1;
        $inventory->stock = 250;
        $inventory->admission_date = '2023-10-29';
        $inventory->supplier_id = 1;
        $inventory->save();


        $inventory = new Inventory();
        $inventory->product_id = 2;
        $inventory->stock = 564;
        $inventory->admission_date = '2023-10-30';
        $inventory->supplier_id = 2;
        $inventory->save();


        $inventory = new Inventory();
        $inventory->product_id = 1;
        $inventory->stock = 250;
        $inventory->admission_date = '2023-10-29';
        $inventory->supplier_id = 1;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 2;
        $inventory->stock = 564;
        $inventory->admission_date = '2023-10-30';
        $inventory->supplier_id = 1;
        $inventory->save();


        $inventory = new Inventory();
        $inventory->product_id = 3; 
        $inventory->stock = 150;
        $inventory->admission_date = '2023-11-01';
        $inventory->supplier_id = 2;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 1;
        $inventory->stock = 250;
        $inventory->admission_date = '2023-10-29';
        $inventory->supplier_id = 1;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 2;
        $inventory->stock = 564;
        $inventory->admission_date = '2023-10-30';
        $inventory->supplier_id = 1;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 3;
        $inventory->stock = 150;
        $inventory->admission_date = '2023-11-01';
        $inventory->supplier_id = 2;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 4;
        $inventory->stock = 100;
        $inventory->admission_date = '2023-11-02';
        $inventory->supplier_id = 3;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 5;
        $inventory->stock = 300;
        $inventory->admission_date = '2023-11-03';
        $inventory->supplier_id = 4;
        $inventory->save();


        $inventory = new Inventory();
        $inventory->product_id = 6;
        $inventory->stock = 75;
        $inventory->admission_date = '2023-11-04';
        $inventory->supplier_id = 5;
        $inventory->save();


        $inventory = new Inventory();
        $inventory->product_id = 7;
        $inventory->stock = 120;
        $inventory->admission_date = '2023-11-05';
        $inventory->supplier_id = 6;
        $inventory->save();


        $inventory = new Inventory();
        $inventory->product_id = 8;
        $inventory->stock = 200;
        $inventory->admission_date = '2023-11-06';
        $inventory->supplier_id = 7;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 9;
        $inventory->stock = 80;
        $inventory->admission_date = '2023-11-07';
        $inventory->supplier_id = 8;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 10;
        $inventory->stock = 150;
        $inventory->admission_date = '2023-11-08';
        $inventory->supplier_id = 9;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 11;
        $inventory->stock = 40;
        $inventory->admission_date = '2023-11-09';
        $inventory->supplier_id = 10;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 12;
        $inventory->stock = 90;
        $inventory->admission_date = '2023-11-10';
        $inventory->supplier_id = 11;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 13;
        $inventory->stock = 60;
        $inventory->admission_date = '2023-11-11';
        $inventory->supplier_id = 7;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 14;
        $inventory->stock = 25;
        $inventory->admission_date = '2023-11-12';
        $inventory->supplier_id = 8;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 15;
        $inventory->stock = 100;
        $inventory->admission_date = '2023-11-13';
        $inventory->supplier_id = 3;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 16;
        $inventory->stock = 30;
        $inventory->admission_date = '2023-11-14';
        $inventory->supplier_id = 10;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 17;
        $inventory->stock = 80;
        $inventory->admission_date = '2023-11-15';
        $inventory->supplier_id = 11;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 18;
        $inventory->stock = 120;
        $inventory->admission_date = '2023-11-16';
        $inventory->supplier_id = 8;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 19;
        $inventory->stock = 50;
        $inventory->admission_date = '2023-11-17';
        $inventory->supplier_id = 5;
        $inventory->save();

        $inventory = new Inventory();
        $inventory->product_id = 7;
        $inventory->stock = 90;
        $inventory->admission_date = '2023-11-18';
        $inventory->supplier_id = 3;
        $inventory->save();

       

       

    }
}
