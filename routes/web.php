<?php

use App\Http\Controllers\Backend\BottomSectionController;
use App\Http\Controllers\Backend\HeroSectionController;
use App\Http\Controllers\Backend\OurStoryController;
use App\Http\Controllers\Backend\PricingController;
use App\Http\Controllers\Backend\PricingFeatureController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Frontend\FrontPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontPageController::class, 'index'])->name('frontpage.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//  admin routes

Route::resource('hero-section', HeroSectionController::class);
Route::resource('service', ServicesController::class);
Route::resource('our-story', OurStoryController::class);
Route::resource('pricing', PricingController::class);
Route::resource('price-feature', PricingFeatureController::class);
Route::resource('bottom-section', BottomSectionController::class);

//end admin routes


// front page



//end front page


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
