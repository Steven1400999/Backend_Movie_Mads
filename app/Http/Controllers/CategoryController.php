<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return $category;
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
        $category = Category::create([
            'category' => $request->category,

        ]);

        $category->save();
        return $request;

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $category = category::where('id', $request->id)
        ->orWhere('category' , $request->category)
        ->get();


        return response()->json($category, 201);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $category = category::where('id', $request->id)->first();

        $category->update([
            'category' => $request->category,
        ]);

        $category->save();
        return $category;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $category = category::where('id', $request->id)->delete();
        return $category;
    }
}
