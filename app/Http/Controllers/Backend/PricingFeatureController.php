<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\PricingFeature;
use Illuminate\Http\Request;

class PricingFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $features = PricingFeature::all();
        return view('admin.pricing.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pricings = Pricing::all();
        return view('admin.pricing.features.create', compact('pricings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'pricing' => ['required'],
            'feature_text' => ['required'],
        ]);

        $pricingFeature = new PricingFeature();

        $pricingFeature->pricing_plan_id= $request->pricing;
        $pricingFeature->feature_text= $request->feature_text;
        $pricingFeature->save();
        toastr('Pricing Feature Created Successfuully!!', 'success', );
        return redirect()->route('price-feature.index');
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
        $pricingFeature = PricingFeature::findOrFail($id);

        $pricingFeature->delete();

        return redirect()->route('price-feature.index')->with('success', 'Deleted Successfully!!');
    }
}
