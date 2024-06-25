<!-- About us section -->
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset($latestOurAboutUs->thumb_image ?? 'Image') }}" class="img-fluid" alt="Software Development">
            </div>

            <div class="col text-col">
                {{-- <h5>OUR STORY</h5> --}}
                <h5>{{ $latestOurAboutUs->subtitle ?? 'Subtitle Text' }}</h5>
                <h3>{{ $latestOurAboutUs->title ?? 'Second Text' }}</h3>
                <!--<h2>Our teams comes with the<br>experience and knowledge</h2>-->
                <div class="about">
                    <ul id="accordion">
                        <li>
                            <a href="#about" class="active">Who we are</a>
                            <div class="box active">
                                {{ $latestOurAboutUs->who_we_are ?? 'Section' }}
                            </div>
                        </li>
                        <li>
                            <a href="#about">Our Vision</a>
                            <div class="box">

                                <p> {{ $latestOurAboutUs->our_vision ?? '' }}</p>
                            </div>
                        </li>
                        <li>
                            <a href="#about">Our History</a>
                            <div class="box">

                                <p> {{ $latestOurAboutUs->our_history ?? '' }}</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- End About us section -->
