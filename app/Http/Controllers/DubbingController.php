<?php

namespace App\Http\Controllers;

use App\Models\Dubbing;
use Illuminate\Http\Request;

class DubbingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dubbing = Dubbing::all();
        return $dubbing;
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
        $dubbing = Dubbing::create([
            'language' => $request->language,

        ]);

        $dubbing->save();
        return $request;

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $dubbing = Dubbing::where('id', $request->id)
        ->orWhere('language' , $request->language)
        ->get();


        return response()->json($dubbing, 201);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dubbing $dubbing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $dubbing = Dubbing::where('id', $request->id)->first();

        $dubbing->update([
            'language' => $request->language,
        ]);

        $dubbing->save();
        return $dubbing;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $dubbing = Dubbing::where('id', $request->id)->delete();
        return $dubbing;
    }
}
