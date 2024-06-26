  <!--section for pricing-->

  <section id="pricing">
      <div style="text-align: center;">
          <h2 class="div-pricing-title">Pricing</h2>
      </div>


      <div class="price-row">
          @if ($pricings->count() > 0)
              @foreach ($pricings as $item)
                  <div class="price-col">
                      {{-- <p>{{ $item->name ?? '' }}</p> --}}
                      <div style="text-align: center;">
                          <h2 class="div-pricing-title">{{ $item->name ?? '' }}</h2>
                      </div>
                      {{ $item->description }}
                      <h3><sup style="font-size: 20px">$</sup>{{ $item->amount ?? '' }}<span>/month</span></h3>
                      <button
                          style="background-color: @if ($item->name === 'Exclusive') blue; color: white; @else inherit; @endif;">{{ $item->trial_button_text ?? '' }}</button>
                      <ul class="custom-list">
                          @foreach ($item->pricingFeature as $feature)
                              <li><i class="fa-regular fa-circle-check"></i> {{ $feature->feature_text }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endforeach
          @else
              <p>No Pricings</p>
          @endif


      </div>
  </section>
