<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = new Product();
        $products->name = "Laptop";
        $products->description = "LENOVO ThinkPad T490 - 14 Inch FHD Laptop, 8th Gen Intel Core i7-8665U, 16GB DDR4 RAM, 256GB SSD, HDMI, Backlit Keyboard, Fingerprint, Windows 10 Pro";
        $products->price = 7528.00;
        $products->product_category = 1;
        $products->save();



        $products = new Product();
        $products->name = "Bicicle";
        $products->description = "Marlin 6 is the perfect bike to improve your skills on the slopes. Its updated slacker frame geometry makes it easier to control on descents, while the suspension fork takes advantage on rough trails. Integrated rack and kickstand mounts make it easy to add accessories to this versatile bike.";
        $products->price = 16999.00;
        $products->product_category = 2;
        $products->save();




    }
}
