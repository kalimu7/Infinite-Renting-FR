<?php

namespace App\Http\Controllers;
use App\Models\properties;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = properties::all();
        return view('properties.index')->with('Pr',$properties);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ***first send the essential data***
        // $request->input('title');
        // $request->input('pro-desc');
        // $request->input('price');
        // $request->input('country');
        // $request->input('area');
        // $request->input('address');
        // $request->input('city');
        // $request->input('state');
        // $request->input('type');
        // $request->input('rooms');
        // $request->input('bathrooms');
        // ***here i try handling the images*****
        
        $images = $request->file('images');
        $path = public_path('images');
        foreach ($images as $image) {
            $name = $image->getClientOriginalName();
            $image->move($path, $name);
            echo $name;
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
