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
    .sidebar-client ul li:first-child
    {
          background-color: #23a5d518;
    }


    .sidebar-client ul li:first-child a
    {
      width: 100%;
      height: 100%;
      color: var(--theme-color);
      transition: 0.3s;
    }
  </style>
  <body>
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
        <h2>Mes Informations</h2>
       
      </div>
    </section>

  </body>
</html>