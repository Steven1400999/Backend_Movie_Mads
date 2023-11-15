<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_Category;


class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorie = new Product_Category();
        $categorie->name = "Electronics";
        $categorie->save();

        $categorie = new Product_Category();
        $categorie->name = "Sports";
        $categorie->save();

        $category = new Product_Category();
        $category->name = "Toys";
        $category->save();

        $category = new Product_Category();
        $category->name = "Furniture";
        $category->save();

        $category = new Product_Category();
        $category->name = "Jewelry";
        $category->save();

    }
}
