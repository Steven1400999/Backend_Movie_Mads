<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
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
        $schedule = Schedule::create([
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
