<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedule = new Schedule();
        $schedule->movie_id = 1;
        $schedule->start_time = "2024-05-13 10:30:00";
        $schedule->room = 1;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 1;
        $schedule->start_time = "2024-05-13 13:00:00";
        $schedule->room = 2;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 1;
        $schedule->start_time = "2024-05-13 15:30:00";
        $schedule->room = 3;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 1;
        $schedule->start_time = "2024-05-13 18:00:00";
        $schedule->room = 4;
        $schedule->save();

        //movie2

        $schedule = new Schedule();
        $schedule->movie_id = 2;
        $schedule->start_time = "2024-05-13 10:30:00";
        $schedule->room = 5;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 2;
        $schedule->start_time = "2024-05-13 13:00:00";
        $schedule->room = 6;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 2;
        $schedule->start_time = "2024-05-13 15:30:00";
        $schedule->room = 7;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 2;
        $schedule->start_time = "2024-05-13 18:00:00";
        $schedule->room = 8;
        $schedule->save();

        //movie

        $schedule = new Schedule();
        $schedule->movie_id = 3;
        $schedule->start_time = "2024-05-13 10:30:00";
        $schedule->room = 9;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 3;
        $schedule->start_time = "2024-05-13 13:00:00";
        $schedule->room = 10;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 3;
        $schedule->start_time = "2024-05-14 15:30:00";
        $schedule->room = 1;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 3;
        $schedule->start_time = "2024-05-14 18:00:00";
        $schedule->room = 2;
        $schedule->save();


        //movie

        $schedule = new Schedule();
        $schedule->movie_id = 4;
        $schedule->start_time = "2024-05-14 10:30:00";
        $schedule->room = 3;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 4;
        $schedule->start_time = "2024-05-14 13:00:00";
        $schedule->room = 4;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 4;
        $schedule->start_time = "2024-05-14 15:30:00";
        $schedule->room = 5;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 4;
        $schedule->start_time = "2024-05-14 18:00:00";
        $schedule->room = 6;
        $schedule->save();

        //movie

        $schedule = new Schedule();
        $schedule->movie_id = 5;
        $schedule->start_time = "2024-05-14 10:30:00";
        $schedule->room = 7;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 5;
        $schedule->start_time = "2024-05-14 13:00:00";
        $schedule->room = 8;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 5;
        $schedule->start_time = "2024-05-14 15:30:00";
        $schedule->room = 9;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 5;
        $schedule->start_time = "2024-05-14 18:00:00";
        $schedule->room = 10;
        $schedule->save();


        //movie2

        $schedule = new Schedule();
        $schedule->movie_id = 6;
        $schedule->start_time = "2024-05-15 10:30:00";
        $schedule->room = 1;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 6;
        $schedule->start_time = "2024-05-15 13:00:00";
        $schedule->room = 2;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 6;
        $schedule->start_time = "2024-05-15 15:30:00";
        $schedule->room = 3;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 6;
        $schedule->start_time = "2024-05-15 18:00:00";
        $schedule->room = 4;
        $schedule->save();



        //movie

        $schedule = new Schedule();
        $schedule->movie_id = 7;
        $schedule->start_time = "2024-05-15 10:30:00";
        $schedule->room = 5;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 7;
        $schedule->start_time = "2024-05-15 13:00:00";
        $schedule->room = 6;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 7;
        $schedule->start_time = "2024-05-15 15:30:00";
        $schedule->room = 7;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 7;
        $schedule->start_time = "2024-05-15 18:00:00";
        $schedule->room = 8;
        $schedule->save();

        //movie2

        $schedule = new Schedule();
        $schedule->movie_id = 8;
        $schedule->start_time = "2024-05-15 10:30:00";
        $schedule->room = 9;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 8;
        $schedule->start_time = "2024-05-15 13:00:00";
        $schedule->room = 10;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 8;
        $schedule->start_time = "2024-05-16 15:30:00";
        $schedule->room = 1;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 8;
        $schedule->start_time = "2024-05-16 18:00:00";
        $schedule->room = 2;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 9;
        $schedule->start_time = "2024-05-16 10:30:00";
        $schedule->room = 3;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 10;
        $schedule->start_time = "2024-05-16 13:00:00";
        $schedule->room = 4;
        $schedule->save();


        $schedule = new Schedule();
        $schedule->movie_id = 11;
        $schedule->start_time = "2024-05-16 15:30:00";
        $schedule->room = 5;
        $schedule->save();


        $schedule = new Schedule();
        $schedule->movie_id = 11;
        $schedule->start_time = "2024-05-16 18:00:00";
        $schedule->room = 6;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 12;
        $schedule->start_time = "2024-05-16 10:30:00";
        $schedule->room = 7;
        $schedule->save();



        $schedule = new Schedule();
        $schedule->movie_id = 12;
        $schedule->start_time = "2024-05-16 10:30:00";
        $schedule->room = 8;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 13;
        $schedule->start_time = "2024-05-16 13:00:00";
        $schedule->room = 9;
        $schedule->save();


        $schedule = new Schedule();
        $schedule->movie_id = 13;
        $schedule->start_time = "2024-05-16 15:30:00";
        $schedule->room = 10;
        $schedule->save();


        $schedule = new Schedule();
        $schedule->movie_id = 14;
        $schedule->start_time = "2024-05-17 18:00:00";
        $schedule->room = 1;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 14;
        $schedule->start_time = "2024-05-17 10:30:00";
        $schedule->room = 2;
        $schedule->save();


        $schedule = new Schedule();
        $schedule->movie_id = 15;
        $schedule->start_time = "2024-05-17 13:00:00";
        $schedule->room = 3;
        $schedule->save();


        $schedule = new Schedule();
        $schedule->movie_id = 15;
        $schedule->start_time = "2024-05-17 15:30:00";
        $schedule->room = 4;
        $schedule->save();


        
        $schedule = new Schedule();
        $schedule->movie_id = 16;
        $schedule->start_time = "2024-05-17 18:00:00";
        $schedule->room = 5;
        $schedule->save();

        $schedule = new Schedule();
        $schedule->movie_id = 16;
        $schedule->start_time = "2024-05-17 10:30:00";
        $schedule->room = 6;
        $schedule->save();

    }
}
