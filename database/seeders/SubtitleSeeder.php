<?php

namespace Database\Seeders;

use App\Models\Subtitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubtitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Subtitles = new Subtitle();
        $Subtitles->language = "None";
        $Subtitles->save();
        

        $Subtitles = new Subtitle();
        $Subtitles->language = "Spanish";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "English";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "French";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "German";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Italian";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Japanese";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Korean";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Mandarin Chinese";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Russian";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Portuguese";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Arabic";
        $Subtitles->save();
        
        $Subtitles = new Subtitle();
        $Subtitles->language = "Hindi";
        $Subtitles->save();
    }
}
