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
        $products->price = 7528;
        $products->product_category_id = 1;
        $products->save();



        $products = new Product();
        $products->name = "Bicicle";
        $products->description = "Marlin 6 is the perfect bike to improve your skills on the slopes. Its updated slacker frame geometry makes it easier to control on descents, while the suspension fork takes advantage on rough trails. Integrated rack and kickstand mounts make it easy to add accessories to this versatile bike.";
        $products->price = 16999;
        $products->product_category_id = 2;
        $products->save();

        $products = new Product();
        $products->name = "Smartphone";
        $products->description = "Latest Android/iOS smartphone with high-resolution camera, fast processor, and long-lasting battery life.";
        $products->price = 999;
        $products->product_category_id = 1;
        $products->save();

        $products = new Product();
        $products->name = "Wireless Headphones";
        $products->description = "Premium noise-canceling wireless headphones for an immersive audio experience.";
        $products->price = 199;
        $products->product_category_id = 1;
        $products->save();

        $products = new Product();
        $products->name = "Mountain Bike";
        $products->description = "High-performance mountain bike for off-road adventures with a durable frame and advanced suspension.";
        $products->price = 1299;
        $products->product_category_id = 2;
        $products->save();

        $products = new Product();
        $products->name = "Running Shoes";
        $products->description = "Lightweight and comfortable running shoes with advanced cushioning technology.";
        $products->price = 89;
        $products->product_category_id = 2;
        $products->save();

        $products = new Product();
        $products->name = "Fitness Tracker";
        $products->description = "Smart fitness tracker with heart rate monitor, GPS, and sleep tracking features.";
        $products->price = 79;
        $products->product_category_id = 2;
        $products->save();

        $products = new Product();
        $products->name = "Gaming Laptop";
        $products->description = "Powerful gaming laptop with dedicated graphics, high refresh rate display, and customizable RGB keyboard.";
        $products->price = 1899;
        $products->product_category_id = 1;
        $products->save();

        $products = new Product();
        $products->name = "Smartwatch";
        $products->description = "Fitness-focused smartwatch with health monitoring features, waterproof design, and long battery life.";
        $products->price = 149;
        $products->product_category_id = 1;
        $products->save();

        $products = new Product();
        $products->name = "Mirrorless Camera";
        $products->description = "High-resolution mirrorless camera with interchangeable lenses and 4K video recording capabilities.";
        $products->price = 1099;
        $products->product_category_id = 1;
        $products->save();


    }
}
