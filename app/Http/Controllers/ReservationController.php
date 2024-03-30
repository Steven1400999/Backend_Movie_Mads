<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation = Reservation::all();
        return $reservation;
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
        $reservation = Reservation::create([
            'user_id' => $request->user_id,
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'qr_code' => $request->qr_code,
        ]);

        $reservation->save();
        return $reservation;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
         
        $reservation =  Reservation::where('id', $request->id)
        ->orWhere('user_id' , $request->title)
        ->orWhere('schedule_id' , $request->description)
        ->orWhere('seat_number' , $request->duration)
        ->orWhere('qr_code' , $request->duration)
        ->get();


        return response()->json($reservation, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $reservation = Reservation::where('id', $request->id)->first();

        $reservation->update([
            'user_id' => $request->user_id,
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'qr_code' => $request->qr_code,
        ]);

        $reservation->save();
        return $reservation;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $reservation = Reservation::where('id', $request->id)->delete();
        return $reservation;
    }
}
