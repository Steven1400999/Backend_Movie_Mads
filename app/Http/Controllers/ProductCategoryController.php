<?php

namespace App\Http\Controllers;

use App\Models\Product_category;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Product_category::all();
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
        $category = Product_category::create([
            'name' => $request->name,

        ]);

        $category->save();
        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $category = Product_category::where('id', $request->id)
            ->orwhere('name', $request->name)->get();
        return $category;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $category = Product_category::where('id', $request->id)
            ->orwhere('name', $request->name)->get();
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $category = Product_category::where('id', $request->id)->first();

        $category->update([
            'name' => $request->name

        ]);

        $category->save();
        return $category;

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {


        $category = Product_category::where('id', $request->id)
            ->orwhere('name', $request->name)->delete();
        return $category;
    }

}

