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
      // Obtén la duración de la película desde la tabla movies
    $movie = Movie::find($request->movie_id);
    $start_time = new DateTime($request->start_time);
    
    // Parsea la duración de la película
    $duration = DateTime::createFromFormat('H:i:s', $movie->duration);
    
    // Calcula el end_time sumando la duración de la película a start_time
    $end_time = clone $start_time;
    $end_time->add(new DateInterval('PT' . ($duration->format('H') * 3600 + $duration->format('i') * 60) . 'S'));
    $end_time->add(new DateInterval('PT30M')); // Agrega 30 minutos extra para la limpieza

    $schedule = Schedule::create([
        'movie_id' => $request->movie_id,
        'start_time' => $request->start_time,
        'end_time' => $end_time->format('Y-m-d H:i:s'),
        'room' => $request->room,
        'total_capacity' => $request->total_capacity,
        'available_seats' => $request->available_seats,
    ]);

    $schedule->save();
    return $schedule;
}
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $schedule =  Schedule::where('id', $request->id)
        ->orWhere('movie_id' , $request->movie_id)
        ->orWhere('time' , $request->title)
        ->orWhere('room' , $request->description)
        ->orWhere('total_capacity' , $request->duration)
        ->orWhere('available_seats' , $request->duration)
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
