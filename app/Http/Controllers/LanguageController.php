<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $language = Language::all();
        return $language;
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
        $language = Language::create([
            'language' => $request->language,

        ]);

        $language->save();
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $language = Language::where('id', $request->id)
        ->first();


        return response()->json($language, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $language = Language::where('id', $request->id)->first();

        $language->update([
            'language' => $request->language,
        ]);

        $language->save();
        return $language;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $language = Language::where('id', $request->id)->delete();
        return $language;
    }
}
