<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$inventory = Inventory::with('supplier','product')->get();
       // return $inventory;
        
        $inventory = Inventory::all();
        return $inventory;
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
        $inventory = Inventory::create([
            'product_id' => $request->product_id,
            'stock' => $request->stock,
            'admission_date' => $request->admission_date,
            'supplier_id' => $request->supplier_id

        ]);

        $inventory->save();
        return $request;


    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $inventory = Inventory::where('id', $request->id)->get();
        return $inventory;


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $inventory = Inventory::where('id', $request->id)->get();
        return $inventory;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $inventory = Inventory::where('id', $request->id)->first();

        $inventory->update([
            'product_id' => $request->product_id,
            'stock' => $request->stock,
            'admission_date' => $request->admission_date,
            'supplier_id' => $request->supplier_id
        ]);

        $inventory->save();
        return $inventory;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $inventory = Inventory::where('id', $request->id)->delete();
        return $inventory;

    }
}
