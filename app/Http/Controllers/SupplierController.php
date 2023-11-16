<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $supplier = Supplier::all();
        return $supplier;


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

        $existingSupplier = Supplier::where('name', $request->name)->first();

        if ($existingSupplier) {
            return response()->json(['message' => 'Supplier already exists'], 409);
        }

        $supplier = Supplier::create([
            'name' => $request->name,
        ]);

        return response()->json($supplier, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        $supplier = Supplier::where('id', $request->id)
            ->orwhere('name', $request->name)->find();
        return $supplier;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

        $supplier = Supplier::where('id', $request->id)
            ->orwhere('name', $request->name)->get();
        return $supplier;



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $supplier = Supplier::where('id', $request->id)->first();

        $supplier->update([
            'name' => $request->name

        ]);
        $supplier->save();
        return $supplier;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

        $supplier = Supplier::where('id', $request->id)->delete();
        return $supplier;

    }
}
