<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_category;
use App\Models\Supplier;
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

        $existingCategory = Product_category::where('name', $request->name)->first();

     if ($existingCategory) {
         return response()->json(['message' => 'Category already exists'], 409);
     }
        $category = Product_category::create([
            'name' => $request->name,

        ]);

        $category->save();
        return response()->json($category, 201) ;

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
        $product_category = Product_category::find($request->id);
        if (!$product_category) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $existingProducCategoryonProducts = Product::where('product_category_id', $request->id)->first();
    
        if ($existingProducCategoryonProducts) {
            return response()->json(['message' => 'Product category is being used in the inventory'], 409);
        }
        $product_category->delete();
        return response()->json(['message' => 'Product category deleted successfully'], 200);


    }

}

