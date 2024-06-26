<section id="services">
    <div class="container">

        <div style="text-align: center;">
            <h2 class="div-pricing-title">Services</h2>
        </div>
        <div class="row">
            @if ($services->count() > 0)
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card servicesText">
                            <div class="card-body">
                                <div class="circle-container">
                                    <i class="icon {{ $service->icon }}"></i>
                                </div>
                                <h4 class="card-title mt-3" style="color: black;">{{ $service->title }}</h4>
                                <p class="card-text mt-3" style="color: rgb(88, 86, 86);">{{ $service->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Services Added</p>
            @endif
        </div>
    </div>
</section>
