<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $languages = new Language();
        $languages->language = "Spanish";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "English";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "French";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "German";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Italian";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Japanese";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Korean";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Mandarin Chinese";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Russian";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Portuguese";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Arabic";
        $languages->save();
        
        $languages = new Language();
        $languages->language = "Hindi";
        $languages->save();
    }
}
