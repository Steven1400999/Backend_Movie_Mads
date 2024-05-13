<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Schedule;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = Schedule::all();
        return $schedule;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = Movie::find($request->movie_id);
        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }
    
        $start_time = new DateTime($request->start_time);
        
        $duration = DateTime::createFromFormat('H:i:s', $movie->duration);
        if (!$duration) {
            return response()->json(['error' => 'Invalid movie duration format'], 400);
        }
        
        $end_time = clone $start_time;
        $end_time->add(new DateInterval('PT' . ($duration->format('H') * 3600 + $duration->format('i') * 60) . 'S'));
        $end_time->add(new DateInterval('PT30M')); 
    
        $existing_schedule = Schedule::where('room', $request->room)
            ->where(function ($query) use ($start_time, $end_time) {
                $query->where('start_time', '<=', $end_time->format('Y-m-d H:i:s'))
                      ->where('end_time', '>=', $start_time->format('Y-m-d H:i:s'));
            })
            ->exists();
    
        if ($existing_schedule) {
            return response()->json(['error' => 'The proposed schedule is already in use in this room.'], 400);
        }
    
        $schedule = Schedule::create([
            'movie_id' => $request->movie_id,
            'start_time' => $request->start_time,
            'end_time' => $end_time->format('Y-m-d H:i:s'),
            'room' => $request->room,
            'total_capacity' => 50,
            'available_seats' => 50,
        ]);
    
        return response()->json($schedule, 201);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $schedule =  Schedule::where('movie_id' , $request->movie_id)
        ->orWhere('id' , $request->id)
        ->get();


        return response()->json($schedule, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $schedule = Schedule::where('id', $request->id)->first();

        $schedule->update([
            'movie_id' => $request->movie_id,
            'time' => $request->time,
            'room' => $request->room,
            'total_capacity' => $request->total_capacity,
            'available_seats' => $request->available_seats,
        ]);

        $schedule->save();
        return $schedule;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $schedule = Schedule::where('id', $request->id)->delete();
        return $schedule;
    }
}
