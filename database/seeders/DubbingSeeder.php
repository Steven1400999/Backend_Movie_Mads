<?php

namespace Database\Seeders;

use App\Models\Dubbing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DubbingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dubbings = new Dubbing();
        $dubbings->language = "None";
        $dubbings->save();

        $dubbings = new Dubbing();
        $dubbings->language = "Spanish";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "English";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "French";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "German";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Italian";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Japanese";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Korean";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Mandarin Chinese";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Russian";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Portuguese";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Arabic";
        $dubbings->save();
        
        $dubbings = new Dubbing();
        $dubbings->language = "Hindi";
        $dubbings->save();
        
    }
}
