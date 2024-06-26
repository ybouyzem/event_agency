<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="sweetalert2.all.min.js"></script>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">


    <!--css file-->
    <link rel="stylesheet" href="{{ asset('index-style.css') }}" />

    <!-- favorite icon -->

  </head>
  <body>
    <x-header-client/>

    {{-- <section class="filter-section">
        <p class="filter-title">veuillez choisir ce que vous recherchez</p>
        <div class="type-gestionnaire">
          <div>
            <label>
              <input type="radio" name="radio" value="all">
              <span>Tous</span>
            </label>
            <label>
              <input type="radio" name="radio" value="Agence">
              <span>Agences</span>
            </label>
            <label>
              <input type="radio" name="radio" value="Prestataire">
              <span>Prestataires</span>
            </label>
          </div>
        </div>
        <div class="city-filter">
          {{-- <label for="">Choisis Services :</label> --}}
          <select name="" id="type-service">
            <option value="all" selected>Tous les Services</option>
            <option value="Mariages">Mariages</option>
            <option value="Ftour Ramadan">Ftour Ramadan</option>
            <option value="Evenement Prive">Evenement Prive</option>
            <option value="Fiancailles">Fiancailles</option>
            <option value="Buffet">Buffet</option>
            <option value="Pause cafe">Pause cafe</option>
            <option value="Conferance">Conferance</option>
            <option value="Seminaire">Seminaire</option>
            <option value="Soutenance">Soutenance</option>
            <option value="Gala">Gala</option>
          </select>
        </div>
        <div class="PB-range-slider-div">
          <p>Prix maximum</p>
          <input type="range" min="50" max="90000" value="900000" class="PB-range-slider" id="myRange" >
          <p class="PB-range-slidervalue" id="priceDisplay"></p>
        </div>
      </section> 
    

    <div class="all-gest-container">
      
        @foreach ($prestataires as $prestataire)
        <div class="card-agence">
          <div class="image-container">
            <img src="{{ asset('img/' . $prestataire->image1) }}" alt="">
        </div>
          <label class="favorite">
            @if (!empty($favoriteGests))
              @foreach ($favoriteGests as $gest)
                @if ($gest->id_gest == $prestataire->id && session('client') && $gest->id_client == session('client')->id)
                  <input checked type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$prestataire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}" data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
                @else
                  <input type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$prestataire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}"  data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
                @endif
              @endforeach
            @else
            <input type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$prestataire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}" data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
            @endif
            <input type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$prestataire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}" data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000">
              <path d="M12 20a1 1 0 0 1-.437-.1C11.214 19.73 3 15.671 3 9a5 5 0 0 1 8.535-3.536l.465.465.465-.465A5 5 0 0 1 21 9c0 6.646-8.212 10.728-8.562 10.9A1 1 0 0 1 12 20z"></path>
            </svg>
          </label>
          <div class="content">
            <div class="brand">{{$prestataire->nom}}</div>
            <div class="other-data">
              <div class="product-name" >Type: <span id="type-gest">{{$prestataire->type}}</span></div>
              <div class="product-name">Service: <span id="type-service">{{$prestataire->service}}</span></div>
              <div class="product-name">Prix A partir de : <span id="price"> {{$prestataire->prix}}</span> dh</div>
            </div>
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
            <button class="buy-button button" onclick="showDetailGest({{ $prestataire->id }})">Lire Plus</button>
            @if (session('client'))
              <button class="contactbtn" onclick="showPhone({{$prestataire->telephone}})"><i class='bx bxs-phone-call' ></i></button>
            @else
              <button class="contactbtn" onclick="showConnectAlert()"><i class='bx bxs-phone-call'></i></button>
            @endif
          </div>
        </div>
        @endforeach
        {{ $prestataires->links() }}
    </div>
    <div>
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($prestataires->onFirstPage())
                <button disabled>Précédent</button>
            @else
                <button onclick="window.location.href='{{ $prestataires->previousPageUrl() }}'">Précédent</button>
            @endif
    
            {{-- Pagination Elements --}}
            @for ($page = 1; $page <= $prestataires->lastPage(); $page++)
                @if ($page == $prestataires->currentPage())
                    <button class="active">{{ $page }}</button>
                @else
                    <button onclick="window.location.href='{{ $prestataires->url($page) }}'">{{ $page }}</button>
                @endif
            @endfor
    
            {{-- Next Page Link --}}
            @if ($prestataires->hasMorePages())
                <button onclick="window.location.href='{{ $prestataires->nextPageUrl() }}'">Suivant</button>
            @else
                <button disabled>Suivant</button>
            @endif
        </div>
    </div>
    <x-footer/>
    <div class="loader"></div>
    <!--JS file-->
    <script src="{{asset('loader.js')}}"></script>
    <script src="{{asset('script.js')}}"></script>
    <script src="{{asset('filter-agence.js')}}"></script>
  <script src="{{asset('favoris.js')}}"></script>
  <script src="{{asset('detail-agence.js')}}"></script>
  <script src="{{asset('alert.js')}}"></script>

  </body>
</html>