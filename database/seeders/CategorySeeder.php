<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $categories = new Category();
        $categories->category = "Action";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Adventure";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Comedy";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Drama";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Fantasy";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Historical";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Horror";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Mystery";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Romance";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Science Fiction";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Thriller";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Western";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Animation";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Documentary";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Biographical";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Musical";
        $categories->save();
        
        $categories = new Category();
        $categories->category = "Familiar";
        $categories->save();
    }
}
