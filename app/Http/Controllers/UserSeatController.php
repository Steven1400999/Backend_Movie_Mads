<?php

namespace App\Http\Controllers;

use App\Models\User_seat;
use Illuminate\Http\Request;

class UserSeatController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userSeats = User_seat::all();
        return $userSeats;
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
        $userSeat = User_seat::create([
            'user_id' => $request->user_id,
            'seat_id' => $request->seat_id,
            'schedule_id' => $request->schedule_id,

        ]);

        $userSeat->save();
        return $userSeat;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $userSeat = User_seat::where('id', $request->id)->first();
        return $userSeat;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_seat $user_seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $userSeat = User_seat::where('id', $request->id)->first();

        $userSeat->update([
            'user_id' => $request->user_id,
            'seat_id' => $request->seat_id,
            'schedule_id' => $request->schedule_id,

        ]);

        $userSeat->save();
        return $userSeat;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $userSeat = User_seat::where('id', $request->id)->delete();
        return $userSeat;
    }
}
