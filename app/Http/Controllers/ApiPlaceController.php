<?php

namespace App\Http\Controllers;

use App\Models\place;
use Illuminate\Http\Request;

class ApiPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = place::all();
        return $places;
    }
     public function search($name)
    {  
        $place = place::where('name', 'like', '%'.$name.'%')->get();
        
        return response()->json($place);
    }


    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
