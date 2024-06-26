<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BottomSection;
use App\Models\HeroSection;
use App\Models\OurStory;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //

    public function index()
    {


        $latestHeroSection = HeroSection::latest()->first();

        $latestOurAboutUs = OurStory::latest()->first();

        // $pricings = Pricing::all();

        $pricings = Pricing::orderByRaw("FIELD(name, 'Start', 'Exclusive', 'Premium')")->get();


        $services = Service::all();

        $bottomSection = BottomSection::latest()->first();

        return view('frontend.home.home', compact(
            'latestHeroSection',
            'latestOurAboutUs',
            'services',
            'pricings',
            'bottomSection'
        ));
    }
}
