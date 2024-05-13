<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
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

        $existingCategory = Category::where('category', $request->category)->first();
        if ($existingCategory) {
            return response()->json(['message' => 'Category already exists'], 409);
        }
        
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
        $category = Category::where('id', $request->id)
        ->first();


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

        $existingCategory = Category::where('category', $request->category)->first();
        if ($existingCategory) {
            return response()->json(['message' => 'Category already exists'], 409);
        }

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

        $existing = Movie::where('category_id', $request->id)->first();
        if ($existing) {
            return response()->json(['message' => 'This register is being used on a movie.'], 409);
        }


        $category = category::where('id', $request->id)->delete();
        return $category;
    }
}
