<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rol = Rol::all();
        return $rol;
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
        $rol = Rol::create([
            'name' => $request->name,

        ]);

        $rol->save();
        return $rol;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        $rol = Rol::where('name', $request->name)
            ->orwhere('id', $request->id)->get();
        return $rol;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

        $rol = Rol::where('id', $request->id)
            ->orwhere('name', $request->name)->get();
        return $rol;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rol = Rol::where('id', $request->id)->first();

        $rol->update([
            'name' => $request->name

        ]);
        $rol->save();
        return $rol;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $rol = Rol::where('id', $request->id)
            ->orwhere('name', $request->name)->delete();
        return $rol;




    }
}
