<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Models\OurStory;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //

    public function index()
    {


        $latestHeroSection = HeroSection::latest()->first();

        $latestOurAboutUs = OurStory::latest()->first();

        $services = Service::all();

        return view('frontend.home.home', compact(
            'latestHeroSection',
            'latestOurAboutUs',
            'services'
        ));
    }
}
