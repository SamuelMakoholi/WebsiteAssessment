<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $heroSection = HeroSection::all();
        return view('admin.hero-section.index', compact('heroSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.hero-section.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());

        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'thumb_image' => ['required','image','mimes:png,jpg,gif,svg'],
        ]);

        $imagePath = $this->uploadImage($request, 'thumb_image', 'uploads');

        $heroSection = new HeroSection();

        $heroSection->title = $request->title;
        $heroSection->description = $request->description;
        $heroSection->thum_image =$imagePath;
        $heroSection->save();

        toastr('Hero-Section Created Successfuully!!', 'success', );
        return redirect()->route('hero-section.index');
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
        $heroSection = HeroSection::findOrFail($id);
        return view('admin.hero-section.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'thumb_image' => ['nullable','max:3000'],
           
        ]);

        $imagePath = $this->updateImage($request, 'thumb_image', 'uploads');

        $heroSection = HeroSection::findOrFail($id);
        $heroSection->title = $request->title;
        $heroSection->description = $request->description;
        $heroSection->thum_image =empty(!$imagePath) ? $imagePath : $heroSection->thum_image;
        $heroSection->save();

        toastr('Hero-Section Updated Successfuully!!', 'success', );
        return redirect()->route('hero-section.index');


        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
     
        $heroSection = HeroSection::findOrFail($id);
        /**delete the  thumb_image */
        $this->deleteImage($heroSection->thum_image);

        $heroSection->delete();
        //toastr('Hero-Section Deleted Successfuully!!', 'success', );

        return redirect()->route('hero-section.index')->with('success', 'Deleted Successfully!!');

    }
}
