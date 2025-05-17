<?php

namespace App\Http\Controllers;

use App\Models\governorate;
use Illuminate\Http\Request;

class ApigovernorateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $governorate=governorate::all();

        return $governorate;
    }

    function search($name){
          $place = governorate::where('name', 'like', '%'.$name.'%')->get();
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
