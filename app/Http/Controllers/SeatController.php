<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seats = Seat::all();
        return $seats;
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
        $seat = Seat::create([
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'status' => $request->status,
        ]);

        $seat->save();
        return $seat;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $seat =  Seat::where('id', $request->id)
        ->orWhere('schedule_id' , $request->schedule_id)
        ->orWhere('seat_number' , $request->seat_number)
        ->orWhere('status' , $request->status)
        ->get();


        return response()->json($seat, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seat $seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $seat = Seat::where('id', $request->id)->first();

        $seat->update([
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'status' => $request->status,
        ]);

        $seat->save();
        return $seat;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $seat = Seat::where('id', $request->id)->delete();
        return $seat;
    }
}
