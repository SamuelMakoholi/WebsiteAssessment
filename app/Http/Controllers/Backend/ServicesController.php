<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
          $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new service

        $service = new Service();

        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        toastr('Service Created Successfully!!', 'success', );
        return redirect()->route('service.index');
       
       
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

        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new service

        $service =Service::findOrFail($id);

        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        toastr('Service Updated Successfully!!', 'success', );
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service =Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Deleted Successfully!!');
    }
}
