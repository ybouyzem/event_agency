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
    <link rel = "stylesheet" href = "{{ asset('bootstrap.min.css') }}" />

    <!-- favorite icon -->
    <link rel="icon" type="img/logo" href="images/favicon.png" />

  </head>
  <body>
    <x-header-client/>
    <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('img/gallery1.jpg')}}" class="d-block w-100 .carousel-img" alt="image 1">
        </div>
        <div class="carousel-item">
        <img src="{{asset('img/gallery4.jpg')}}" class="d-block w-100 .carousel-img" alt="image 2">
        </div>
        <div class="carousel-item">
        <img src="{{asset('img/gallery5.jpg')}}" class="d-block w-100 .carousel-img" alt="image 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>

    <script src="{{asset('bootstrap.bundle.min.js')}}"></script>
  </body>
</html>