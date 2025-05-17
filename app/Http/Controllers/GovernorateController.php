<?php

namespace App\Http\Controllers;

use App\Models\governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $governorates=governorate::all();
        
        return view('governorate.index', compact('governorates') );
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('governorate.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            "name"=>"required",
            "description"=>"required",
            "location"=>"required",
            "image"=>"mimes:jpg,png,gif",
        ]);
        $governorate=$request->except('image');
        // dd($governorate);
        if($request->hasfile('image')){
            $image=$request->image;
            $oldimgname=$image->getClientOriginalName();
            $newimgname=uniqid().$oldimgname;
            $image->move("images", $newimgname);
            $imageurl="images/$newimgname";
       
            $governorate['image']= $imageurl;
            // dd($governorate);
        }

    governorate::create($governorate);
       

     return redirect()->route('governorate.index');
        // return redirect()->route('governorate.index')->with('success', 'Governorate created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(governorate $governorate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(governorate $governorate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, governorate $governorate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(governorate $governorate)
    {
        //
    }
}
