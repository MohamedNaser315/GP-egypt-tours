<?php

namespace App\Http\Controllers;

use App\Models\place;
use App\Models\governorate;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
          $governorates=governorate::all();
        return view('place.insert' , compact('governorates'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "location" => "required|string",
            "fees_egyptian" => "required|numeric",
            "fees_foreigners" => "required|numeric",
            "start_work" => "required|date_format:H:i",
            "end_work" => "required|date_format:H:i",
            "lat" => "required|numeric",
            "ing" => "required|numeric",
            "governorate_id" => "required|exists:governorates,id",
            "image" => "image|mimes:jpeg,png,jpg,gif",
        ]);
        

        $place=$request->except('image');
        //  dd($place);
        if($request->hasfile('image')){
            $image=$request->image;
            $oldimgname=$image->getClientOriginalName();
            $newimgname=uniqid().$oldimgname;
            $image->move("images", $newimgname);
            $imageurl="images/$newimgname";
        // dd($imageurl);
            $place['image']= $imageurl;
            
        }
      
    
        place::create($place);
        return redirect()->route('place.create');
    
}
    /**
     * Display the specified resource.
     */
    public function show(place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(place $place)
    {
        //
    }
}
