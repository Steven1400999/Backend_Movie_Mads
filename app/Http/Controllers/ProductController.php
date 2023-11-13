<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return $product;

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

        $product = Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "product_category_id" => $request->product_category_id,



        ]);

        $product->save();
        return $request;


    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $product = Product::where('id', $request->id)
            ->orwhere('name', $request->name)
            ->orwhere('price', $request->price)
            ->orwhere('product_category_id', $request->product_category_id)->get();
        return $product;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $product = Product::where('id', $request->id)
            ->orwhere('name', $request->name)->get();
        return $product;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $product = Product::where('id', $request->id)->first();

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,


        ]);

        $product->save();
        return $product;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {


        $product = Product::where('id', $request->id)
            ->orwhere('name', $request->name)->delete();
        return $product;


    }
}
