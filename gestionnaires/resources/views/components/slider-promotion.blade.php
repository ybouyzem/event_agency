@props(['promotions'])

<section class="promotion">
    <h3>promotions</h3>
    <div class="slider-agence">
        <div class="slider-track">
        @foreach ($promotions as $promotion)
        <div class="card-agence-promo">
          <div class="new-price">
            <div >{{$promotion->reduction}} dh</div>
            <div class="old-price">{{$promotion->prix}} dh</div>
          </div>
          <div class="image-container">
            <img src="img/{{$promotion->image1}}" alt="">
          </div>
            <div class="content">
                <div class="brand">{{$promotion->nom}}</div>
                <div class="other-data">
                    <div class="product-name" >Type: <span >{{$promotion->type}}</span></div>
                    <div class="product-name">Service: <span>{{$promotion->service}}</span></div>
                </div>
                <div style="display: none"><span >{{$promotion->ville}}</span></div>
            </div>
            <div class="button-container">
                <button class="buy-button button" onclick="showDetailGest({{ $promotion->id }})">Lire Plus</button>
                @if (session('client'))
                <button class="contactbtn" onclick="showPhone({{$promotion->telephone}})"><i class='bx bxs-phone-call' ></i></button>
              @else
                <button class="contactbtn" onclick="showConnectAlert()"><i class='bx bxs-phone-call'></i></button>
              @endif       
             </div>
        </div>
        @endforeach
      </div>
    <button class="prev-button"><i class='bx bxs-left-arrow-circle'></i></button>
    <button class="next-button"><i class='bx bxs-right-arrow-circle'></i></button>
    </div>
</section>