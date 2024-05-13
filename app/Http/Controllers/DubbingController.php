<?php

namespace App\Http\Controllers;

use App\Models\Dubbing;
use App\Models\Movie;
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


        $existing = Dubbing::where('language', $request->language)->first();
        if ($existing) {
            return response()->json(['message' => 'language already exists'], 409);
        }

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
        ->first();


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

        $existing = Dubbing::where('language', $request->language)->first();
        if ($existing) {
            return response()->json(['message' => 'language already exists'], 409);
        }

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
        $existing = Movie::where('dubbing_id', $request->id)->first();
        if ($existing) {
            return response()->json(['message' => 'This register is being used on a movie.'], 409);
        }


        $dubbing = Dubbing::where('id', $request->id)->delete();
        return $dubbing;
    }
}
