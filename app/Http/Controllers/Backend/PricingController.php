<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pricings = Pricing::all();
        return view('admin.pricing.index', compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'button_text' => 'required',
        ]);

        $pricing = new Pricing();

        $pricing->name = $request->name;
        $pricing->description = $request->description;
        $pricing->amount = $request->amount;
        $pricing->trial_button_text = $request->button_text;

        $pricing->save();

        toastr('Pricing Created Successfuully!!', 'success', );
        return redirect()->route('pricing.index');
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
        $pricing = Pricing::findOrFail($id);
        return view('admin.pricing.edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'button_text' => 'required',
        ]);

        $pricing = Pricing::findOrFail($id);

        $pricing->name = $request->name;
        $pricing->description = $request->description;
        $pricing->amount = $request->amount;
        $pricing->trial_button_text = $request->button_text;

        $pricing->save();

        toastr('Pricing Updated Successfuully!!', 'success', );
        return redirect()->route('pricing.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $pricing = Pricing::findOrFail($id);

        $pricing->delete();

        return redirect()->route('pricing.index')->with('success', 'Deleted Successfully!!');


    }
}
