<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="{{ asset('index-style.css') }}" />

    <!-- favorite icon -->
    <link rel="icon" type="img/logo" href="images/favicon.png" />

  </head>
  <style>
    .sidebar-client ul li:nth-child(3)
    {
          background-color: #23a5d518;
    }


    .sidebar-client ul li:nth-child(3) a
    {
      width: 100%;
      height: 100%;
      color: var(--theme-color);
      transition: 0.3s;
    }


    /* empty message */
    .empty {
      margin-top: 20px;
      font-size: 14px;
      padding: 7px;
      text-align: center;
      width: 800px;
      background-color:rgba(255, 166, 0, 0.578);
      color: orangered; 
      font-weight: 600;
    }
</style>
  <body>
    <?php $var = 0;?>
    @foreach ($gestionnaires as $gestionnaire)
                @foreach ($favoriteGests as $gest)
                    @if ($gest->id_gest == $gestionnaire->id && $gest->id_client == session('client')->id)
                      <?php $var += 1?>
                    @endif
                @endforeach
    @endforeach
    <x-header-client/>
    <section class="profile-container">
      <div class="sidebar-client">
        <ul>
          <li><a href="{{route('profileClient')}}">Mon Compte</a></li>
          <li><a href="">Historique des reservations </a></li>
          <li><a href="{{route('favorisClient')}}">Ma liste d'envie</a></li>
          <li><a href="{{route('logout')}}">Déconnexion</a></li>
        </ul>
      </div>
      <div class="main-client">
        <h2>Ma liste d'envie</h2>
        <div class="favoris-cards">
          @if ($var == 0)
            <div class="empty">Il n’y a aucun service dans votre liste d’envies.</div>
          @else
          @foreach ($gestionnaires as $gestionnaire)
                @foreach ($favoriteGests as $gest)
                    @if ($gest->id_gest == $gestionnaire->id && $gest->id_client == session('client')->id)
                    <div class="card-agence">
                        <div class="image-container">
                            <img src="{{ asset('img/' . $gestionnaire->image1) }}" alt="">
                        </div>
                        <label class="favorite">
                            <input checked type="checkbox"  id="checkfavoris" data-gestionnaire-id="{{$gestionnaire->id}}" data-client-id="{{ session('client') ? session('client')->id : '' }}"  data-favoris="{{ json_encode($favoriteGests) }}" onchange="handleCheckboxChange(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000">
                                <path d="M12 20a1 1 0 0 1-.437-.1C11.214 19.73 3 15.671 3 9a5 5 0 0 1 8.535-3.536l.465.465.465-.465A5 5 0 0 1 21 9c0 6.646-8.212 10.728-8.562 10.9A1 1 0 0 1 12 20z"></path>
                            </svg>
                        </label>
                        <div class="content">
                            <div class="brand">{{$gestionnaire->nom}}</div>
                            <div class="other-data">
                                <div class="product-name" >Type: <span id="type-gest">{{$gestionnaire->type}}</span></div>
                                <div class="product-name">Service: <span id="type-service">{{$gestionnaire->service}}</span></div>
                                <div class="product-name">Prix A partir de : <span id="price"> {{$gestionnaire->prix}}</span> dh</div>
                            </div>
                            <div class="rating">
                                <svg viewBox="0 0 99.498 16.286" xmlns="http://www.w3.org/2000/svg" class="svg four-star-svg">
                                    <path fill="#fc0" transform="translate(-0.001 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" id="star-svgrepo-com"></path>
                                    <path fill="#fc0" transform="translate(20.607 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-2"></path>
                                    <path fill="#fc0" transform="translate(41.215 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-3"></path>
                                    <path fill="#fc0" transform="translate(61.823 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-4"></path>
                                    <path fill="#e9e9e9" transform="translate(82.431 -1.047)" d="M9.357,1.558,11.282,5.45a.919.919,0,0,0,.692.5l4.3.624a.916.916,0,0,1,.509,1.564l-3.115,3.029a.916.916,0,0,0-.264.812l.735,4.278a.919.919,0,0,1-1.334.967l-3.85-2.02a.922.922,0,0,0-.855,0l-3.85,2.02a.919.919,0,0,1-1.334-.967l.735-4.278a.916.916,0,0,0-.264-.812L.279,8.14A.916.916,0,0,1,.789,6.576l4.3-.624a.919.919,0,0,0,.692-.5L7.71,1.558A.92.92,0,0,1,9.357,1.558Z" data-name="star-svgrepo-com" id="star-svgrepo-com-5"></path>
                                </svg>
                                (29,062)
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="buy-button button" onclick="showDetailGest({{ $gestionnaire->id }})">Lire Plus</button>
                            <button class="contactbtn"><i class='bx bxs-phone-call' ></i></button>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
            @endif
        </div>
    </div>
    </section>
    <x-footer/>
    <script src="{{asset('favoris.js')}}"></script>
    <script src="{{asset('detail-agence.js')}}"></script>
  </body>
</html>