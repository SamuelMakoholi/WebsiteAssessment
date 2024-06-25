<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OurStory;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class OurStoryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ourStory = OurStory::all();
        return view('admin.our-story.index', compact('ourStory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.our-story.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subtitle' => ['required'],
            'title' => ['required'],
            'who_we_are' => ['required'],
            'our_vision' => ['required'],
            'our_history' => ['required'],
           'thumb_image' => ['required','image','mimes:png,jpg,gif,svg'],
        ]);

        $imagePath = $this->uploadImage($request, 'thumb_image', 'uploads');

        $ourStory = new OurStory();

        $ourStory->subtitle = $request->subtitle;
        $ourStory->title = $request->title;
        $ourStory->who_we_are = $request->who_we_are;
        $ourStory->our_vision = $request->our_vision;
        $ourStory->our_history = $request->our_history;
        $ourStory->thumb_image = $imagePath;

        $ourStory->save();
        toastr('Our Story Created Successfuully!!', 'success', );
        return redirect()->route('our-story.index');
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
        $ourStory = OurStory::findOrFail($id);
        return view('admin.our-story.edit', compact('ourStory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'subtitle' => ['required'],
            'title' => ['required'],
            'who_we_are' => ['required'],
            'our_vision' => ['required'],
            'our_history' => ['required'],
            'thumb_image' => ['nullable','max:3000'],
        ]);

        $imagePath = $this->updateImage($request, 'thumb_image', 'uploads');

        $ourStory = OurStory::findOrFail($id);

        $ourStory->subtitle = $request->subtitle;
        $ourStory->title = $request->title;
        $ourStory->who_we_are = $request->who_we_are;
        $ourStory->our_vision = $request->our_vision;
        $ourStory->our_history = $request->our_history;

        $ourStory->thumb_image =empty(!$imagePath) ? $imagePath : $ourStory->thumb_image;

        $ourStory->save();
        toastr('Our Story Updated Successfuully!!', 'success', );
        return redirect()->route('our-story.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
        $ourStory = OurStory::findOrFail($id);
        /**delete the  thumb_image */
        $this->deleteImage($ourStory->thumb_image);

        $ourStory->delete();

        return redirect()->route('our-story.index')->with('success', 'Deleted Successfully!!');
        

       // return response(['status'=>'success', 'message'=>'Deleted Successfully!!']);
    }
}
