<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $image->storeAs('public/images', $filename);
            $imagePath = '/storage/images/' . $filename;
            $request->merge(['image' => $imagePath]);
        }


        $existing = Movie::where('title', $request->title)->first();
        if ($existing) {
            return response()->json(['message' => 'Movie already exists'], 409);
        }



        $movie = Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'image' => $request->image,
            'language_id' => $request->language_id,
            'dubbing_id' => $request->dubbing_id,
            'subtitle_id' => $request->subtitle_id,
            'category_id' => $request->category_id,
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
        ->orWhere('language_id' , $request->language_id)
        ->orWhere('dubbing_id' , $request->dubbing_id)
        ->orWhere('subtitle_id' , $request->subtitle_id)
        ->orWhere('category_id' , $request->category_id)
        ->orWhere( 'category_id', $request->category_id)

        ->first();


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

        $existing = Movie::where('title', $request->title)->first();
        if ($existing) {
            return response()->json(['message' => 'Movie already exists'], 409);
        }

        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'image' => $request->image,
            'language_id' => $request->language_id,
            'dubbing_id' => $request->dubbing_id,
            'subtitle_id' => $request->subtitle_id,
            'category_id' => $request->category_id,

        ]);

        $movie->save();
        return $movie;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

        $existing = Schedule::where('movie_id', $request->id)->first();
        if ($existing) {
            return response()->json(['message' => 'This register is being used on a movie.'], 409);
        }

        $movie = Movie::where('id', $request->id)->delete();
        return $movie;
    }
}
