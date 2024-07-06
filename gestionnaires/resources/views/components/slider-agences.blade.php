@props(['gestionnaires', 'favoriteGests', 'promotions'])
  
 
  <div class="empty-gest" style="display: none">
    Désolé! il n'y a aucune agence ou prestataire disponible actuellement.
  </div>
  <section class="slider-agence">
    <div class="slider-container">
      <div class="slider-track">
        @foreach ($gestionnaires as $gestionnaire)
        <div class="card-agence">
          <div class="image-container">
            <img src="img/{{$gestionnaire->image1}}" alt="">
          </div>
          <label class="favorite">
            @if (!empty($favoriteGests))
              @foreach ($favoriteGests as $gest)
                @if ($gest->id_gest == $gestionnaire->id && session('client') && $gest->id_client == session('client')->id)
                  <input checked type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$gestionnaire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}" data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
                @else
                  <input type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$gestionnaire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}"  data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
                @endif
              @endforeach
            @else
            <input type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$gestionnaire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}" data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
            @endif
            <input type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$gestionnaire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}" data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000">
              <path d="M12 20a1 1 0 0 1-.437-.1C11.214 19.73 3 15.671 3 9a5 5 0 0 1 8.535-3.536l.465.465.465-.465A5 5 0 0 1 21 9c0 6.646-8.212 10.728-8.562 10.9A1 1 0 0 1 12 20z"></path>
            </svg>
          </label>
          <div class="content">
            <div class="brand">{{$gestionnaire->nom}}</div>
            <div class="other-data">
              <div class="product-name" >type: <span id="type-gest">{{$gestionnaire->type}}</span></div>
              <div class="product-name">service: <span id="type-service">{{$gestionnaire->service}}</span></div>
              <div class="product-name">prix à partir de : 
                @php
                  $has_promotion = 0;  
                @endphp
                @foreach ($promotions as $promo)
                  @if ($promo->id_gestionnaire == $gestionnaire->id)
                    @php 
                      $has_promotion = 1;
                      break;
                    @endphp
                  @endif
                @endforeach
                @if ($has_promotion == 1)
                  <span id="price">{{$promo->reduction}} </span>  <span style="text-decoration: line-through; color:orange; fonr-weight:400;font-size:12px;">{{$gestionnaire->prix}} dh</span></div>
                @else
                  <span id="price">{{$gestionnaire->prix}} dh</span> </div>
                @endif
              </div>
            <div style="display: none"><span id="city">{{$gestionnaire->ville}}</span></div>
            {{-- <div class="rating">
              <svg viewBox="0 0 99.498 16.286" xmlns="http://www.w3.org/2000/svg" class="svg four-star-svg">
                <path fill="#fc0" transform="translate(-0.001 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" id="star-svgrepo-com"></path>
                <path fill="#fc0" transform="translate(20.607 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-2"></path>
                <path fill="#fc0" transform="translate(41.215 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-3"></path>
                <path fill="#fc0" transform="translate(61.823 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-4"></path>
                <path fill="#e9e9e9" transform="translate(82.431 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-5"></path>
              </svg>
              (29,062)
            </div> --}}
          </div>
          <div class="button-container">
            <button class="buy-button button" onclick="showDetailGest({{ $gestionnaire->id }})">Lire plus</button>
            @if (session('client'))
              <button class="contactbtn" onclick="showPhone({{$gestionnaire->telephone}})"><i class='bx bxs-phone-call' ></i></button>
            @else
              <button class="contactbtn" onclick="showConnectAlert()"><i class='bx bxs-phone-call'></i></button>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <button class="prev-button"><i class='bx bxs-left-arrow-circle'></i></button>
    <button class="next-button"><i class='bx bxs-right-arrow-circle'></i></button>
  </section>

  <div class="afficher-tous">
    <a href="{{route('allGest')}}">afichier tous</a>
  </div>
