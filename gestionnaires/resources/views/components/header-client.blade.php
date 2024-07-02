

  <header class="header">
    <a href="{{route('index')}}" class="logo"><span>H</span>adat</a>
  
    <ul class="navbar">
      <li><a href="/">accueil</a></li>
      <li>
        <a href="{{route('allPres')}}">prestataires<i class='bx bx-chevron-down' ></i></a>
        <ul class="dropdown">
          <li><a href="">Salle de mariage</a></li>
          <li><a href="">Photographes</a></li>
          <li><a href="">Traiteur & Catering</a></li>
          <li><a href="">Negafa</a></li>
          <li><a href="">Orchestres</a></li>
          <li><a href="">Salons & Coiffure</a></li>
          <li><a href="">Décoration & Design</a></li>
          <li><a href="">Issawa & Dakka Marrakchia</a></li>
          <li><a href="">DJ Evolutif</a></li>
          <li><a href="">Eclairage & Sonorisation</a></li>
        </ul>
      </li>
      <li>
        <a href="events.php">agences <i class='bx bx-chevron-down' ></i></a>
        <ul class="dropdown">
          <li><a href="">Mariages</a></li>
          <li><a href="">Ftour Ramadan</a></li>
          <li><a href="">Evenement Prive</a></li>
          <li><a href="">Fiancailles</a></li>
          <li><a href="">Buffet</a></li>
          <li><a href="">Pause cafe</a></li>
          <li><a href="">Conferance</a></li>
          <li><a href="">Seminaire</a></li>
          <li><a href="">Soutenance</a></li>
          <li><a href="">Gala</a></li>
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

  