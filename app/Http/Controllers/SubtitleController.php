<?php

namespace App\Http\Controllers;

use App\Models\Subtitle;
use Illuminate\Http\Request;

class SubtitleController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subtitle = Subtitle::all();
        return $subtitle;
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
        $subtitle = Subtitle::create([
            'language' => $request->language,

        ]);

        $subtitle->save();
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $subtitle = Subtitle::where('id', $request->id)
        ->orWhere('language' , $request->language)
        ->get();


        return response()->json($subtitle, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subtitle $subtitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $subtitle = Subtitle::where('id', $request->id)->first();

        $subtitle->update([
            'language' => $request->language,
        ]);

        $subtitle->save();
        return $subtitle;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $subtitle = Subtitle::where('id', $request->id)->delete();
        return $subtitle;
    }
}
