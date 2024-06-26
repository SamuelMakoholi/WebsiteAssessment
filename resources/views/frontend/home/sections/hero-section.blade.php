<!-- Hero section -->
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{$latestHeroSection->title ?? 'Title Headings'}}</h1>
                <p>{{$latestHeroSection->description ?? ''}}</p>
                <button type="button" class="hero-btn">Get Started</button>
            </div>
            <div class="col img-col">
                <img src="{{ isset($latestHeroSection) && $latestHeroSection->thum_image ? asset($latestHeroSection->thum_image) : asset('frontend/assets/img/placeholder.png') }}" class="img-fluid" alt="Software Development">

            </div>
        </div>

    </div>
</section>
<!-- End Hero section -->
