<!-- services section-->
<section id="services">
    <div class="container">
        <h2 class="text-center">Services</h2>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="{{$service->icon}}"></i>
                            <h4 class="card-title mt-3">{{ $service->title }}</h4>
                            <p class="card-text mt-3">{{ $service->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
</section>
