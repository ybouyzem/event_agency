<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!--css file-->
    <link rel="stylesheet" href="{{ asset('detail-gest.css') }}" />
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">


  </head>
  <body>
    <x-header-client/>
    <x-slider-images :gestionnaire="$gestionnaire"/>
    <section class="detail-gest">
      <form action="">
        <div class="title"><i class='bx bxs-building-house'></i> {{$gestionnaire->nom}}</div>
          <div class="other-info">
            <div class="info"><i class='bx bxs-business' ></i> <span>{{$gestionnaire->ville}}</span></div>
            <div class="info"><i class='bx bxs-edit-location' ></i> <span>{{$gestionnaire->adresse}}</span></div>
            <div class="info"><i class='bx bxs-donate-heart' ></i><span>{{$gestionnaire->service}}</span></div>
            <div class="info"><i class='bx bx-credit-card' ></i>Prix A partir de : <span>{{$gestionnaire->prix}} Dh</span></div>
            {{-- @if (session('client'))
            <div class="info phone"><i class='bx bxs-phone-call' style="color: rgb(4, 163, 4)"></i> <span>0{{$gestionnaire->telephone}}</span></div>  
            @endif --}}
          </div>
      </form>
      <div class="description">
        {{-- <h2>Description:</h2> --}}
        <div class="text">{{$gestionnaire->detail}}</div>
        @if (session('client'))
          <div class="contacter-btn">
            <input type="submit" value="Contacter" onclick="showPhone('{{ $gestionnaire->telephone }}')">
            <i class='bx bxs-phone-call'></i>
          </div>
        @else
        <div class="contacter-btn">
          <input type="submit" value="Contacter" onclick="showConnectAlert()">
          <i class='bx bxs-phone-call'></i>
        </div>
        @endif
      </div>
    </section>
    <x-footer/>
  </body>
  <div class="loader"></div>
  <!--JS file-->
  <script src="{{asset('loader.js')}}"></script>
  <script src="{{asset('alert.js')}}"></script>
</html>