<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
 // ReservationController.php
 public function store(Request $request)
 {
     $request->validate([
         'user_id' => 'required|exists:users,id',
         'schedule_id' => 'required|exists:schedules,id',
         'seats' => 'required|array',
         'qr_code' => 'nullable|string'
     ]);
 
     DB::beginTransaction();
     try {
         $reservation = Reservation::create([
             'user_id' => $request->user_id,
             'schedule_id' => $request->schedule_id,
             'seats' => json_encode($request->seats), // Make sure seats are stored as a JSON string
             'qr_code' => $request->qr_code
         ]);
 
         foreach ($request->seats as $seatId) {
             Seat::where('id', $seatId)->update(['status' => 'occupied']);
         }
 
         DB::commit();
         return response()->json($reservation, 201);
     } catch (\Exception $e) {
         DB::rollBack();
         return response()->json(['error' => 'Failed to create reservation: ' . $e->getMessage()], 500);
     }
 }
 


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
         
        $reservation =  Reservation::where('user_id', $request->user_id)
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
