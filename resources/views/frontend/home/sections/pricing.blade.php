  <!--section for pricing-->
  <section id="pricing">
      <h2 id="pri">Pricing</h2>
      <div class="price-row">
          <div class="price-col">
              <p>Starter</p>
              <h5>{{ $starter->title ?? '' }}</h5>
              <h3><sup style="font-size: 20px">$</sup>{{ $starter->amount ?? '' }}<span>/month</span></h3>
              <button> Start Free Trial</button>
              <ul>
                  <li>Crust justo audio</li>
                  <li> Dapibus ac facilisi in</li>
                  <li>Mobi leo resus</li>
                  <li>Exceptuer sint accaecat</li>
              </ul>

          </div>

          <div class="price-col">
              <p id="exclusivetext">Exclusive</p>
              <h5>{{ $exclusive->title ?? '' }}!</h5>
              <h3><sup style="font-size: 20px">$</sup>{{ $exclusive->amount ?? '' }}<span>/month</span></h3>
              <button id="exclusive"> Start Free Trial</button>
              <ul>
                  <li>Crust justo audio</li>
                  <li> Dapibus ac facilisi in</li>
                  <li>Mobi leo resus</li>
                  <li>Exceptuer sint accaecat</li>
              </ul>
          </div>

          <div class="price-col">
              <p>Premium</p>
              <h5>{{ $premium->title ?? '' }}!</h5>
              <h3><sup style="font-size: 20px">$</sup>{{ $premium->amount ?? '' }}<span>/month</span></h3>
              <button> Start Free Trial</button>
              <ul>
                  <li>Crust justo audio</li>
                  <li>Dapibus ac facilisi in</li>
                  <li>Mobi leo resus</li>
                  <li>Exceptuer sint accaecat</li>
              </ul>
          </div>
      </div>
  </section>
