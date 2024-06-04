

  <header class="header">
    <a href="{{route('index')}}" class="logo"><span>H</span>adat</a>
  
    <ul class="navbar">
      <li><a href="index.php">accueil</a></li>
      <li><a href="events.php">prestataires</a></li>
      <li>
        <a href="events.php">agences <i class='bx bx-chevron-down' ></i></a>
        <ul class="dropdown">
          <li><a href="agence1.php">Mariages</a></li>
          <li><a href="agence1.php">Ftour Ramadan</a></li>
          <li><a href="agence2.php">Evenement Prive</a></li>
          <li><a href="agence3.php">Fiancailles</a></li>
          <li><a href="agence3.php">Buffet</a></li>
          <li><a href="agence3.php">Pause cafe</a></li>
          <li><a href="agence3.php">Conferance</a></li>
          <li><a href="agence3.php">Seminaire</a></li>
          <li><a href="agence3.php">Soutenance</a></li>
          <li><a href="agence3.php">Gala</a></li>
        </ul>
      </li>
      <li><a href="#contact">contact</a></li>
      {{-- <li><a href="#about">à propos</a></li> --}}
      @if (!session('client'))
        <li class="signin-link"><a href="{{route('accountType')}}">Se connecter / S'inscrir</a></li>
      @else
        <li class="my-account" >
          <a href="{{route('favorisClient')}}" >
           <i class='bx bx-heart' style="color: rgb(0, 146, 204);font-size:14px;"></i>
           <br><span style="color: rgb(0, 146, 204);font-size:14px;">Mes favoris</span>
          </a>
        </li>
        <li >
          <a href="{{route('profileClient')}}">
            <i class='bx bx-user' style="color: rgb(0, 146, 204); font-size:14px;"></i>
            <br><span style="color: rgb(0, 146, 204);font-size:14px;">Mon compte</span>
          </a>
        </li>
      @endif
      </ul>
  
    <div id="menu-bars" class="fas fa-bars"></div>
  </header>
  <script src="script.js"></script>

  