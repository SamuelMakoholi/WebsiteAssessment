<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BottomSection;
use Illuminate\Http\Request;

class BottomSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bottoms = BottomSection::all();
        return view('admin.bottom-section.index', compact('bottoms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.bottom-section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=> ['required'],
            'description'=> ['required'],
            'url'=> ['required'],
        ]);


        $bottom= new BottomSection();

        $bottom->title= $request->title;
        $bottom->description= $request->description;
        $bottom->url= $request->url;

        $bottom->save();
        toastr('Bottom Section Created Successfuully!!', 'success', );
        return redirect()->route('bottom-section.index');
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
        $bottom = BottomSection::findOrFail($id);
        return view('admin.bottom-section.edit', compact('bottom'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
          //
          $request->validate([
            'title'=> ['required'],
            'description'=> ['required'],
            'url'=> ['required'],
        ]);


        $bottom=  BottomSection::findOrFail($id);

        $bottom->title= $request->title;
        $bottom->description= $request->description;
        $bottom->url= $request->url;

        $bottom->save();
        toastr('Bottom Section Updated Successfuully!!', 'success', );
        return redirect()->route('bottom-section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $bottom = BottomSection::findOrFail($id);

        $bottom->delete();

        return redirect()->route('bottom-section.index')->with('success', 'Deleted Successfully!!');
    }
}
