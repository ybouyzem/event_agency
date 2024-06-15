<section class="promotion">
    <h3>promotion</h3>
    <div class="slider-agence">
        <div class="slider-track">
        @foreach ($gestionnaires as $gestionnaire)
        <div class="card-agence">
          <div class="new-price">
            <div >20000 dh</div>
            <div class="old-price">30000 dh</div>
          </div>
          <div class="image-container">
            <img src="img/{{$gestionnaire->image1}}" alt="">
          </div>

            <div class="content">
                <div class="brand">{{$gestionnaire->nom}}</div>
                <div class="other-data">
                    <div class="product-name" >Type: <span id="type-gest">{{$gestionnaire->type}}</span></div>
                    <div class="product-name">Service: <span id="type-service">{{$gestionnaire->service}}</span></div>
                </div>
                <div style="display: none"><span id="city">{{$gestionnaire->ville}}</span></div>

            </div>
            <div class="button-container">
                <button class="buy-button button" onclick="showDetailGest({{ $gestionnaire->id }})">Lire Plus</button>
                <button class="contactbtn"><i class='bx bxs-phone-call' ></i></button>
            </div>
        </div>
        @endforeach
      </div>
    <button class="prev-button"><i class='bx bxs-left-arrow-circle'></i></button>
    <button class="next-button"><i class='bx bxs-right-arrow-circle'></i></button>
    </div>
</section>