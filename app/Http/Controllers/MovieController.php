<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movie = Movie::all();
        return $movie;
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
        $movie = Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'image' => $request->image,
        ]);

        $movie->save();
        return $movie;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
        $movie = Movie::where('id', $request->id)
        ->orWhere('title' , $request->title)
        ->orWhere('description' , $request->description)
        ->orWhere('duration' , $request->duration)
        ->get();


        return response()->json($movie, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $movie = Movie::where('id', $request->id)->first();

        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'image' => $request->image,
        ]);

        $movie->save();
        return $movie;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $movie = Movie::where('id', $request->id)->delete();
        return $movie;
    }
}
