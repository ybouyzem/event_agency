

  <header class="header">
    <a href="{{route('index')}}" class="logo"><span>H</span>adat</a>
  
    <ul class="navbar">
      <li><a href="index.php">accueil</a></li>
      <li><a href="events.php">prestataires</a></li>
      <li>
        <a href="events.php">agences <i class='bx bx-chevron-down' ></i></a>
        <ul class="dropdown">
          <li><a href="agence1.php">Agence 1</a></li>
          <li><a href="agence2.php">Agence 2</a></li>
          <li><a href="agence3.php">Agence 3</a></li>
        </ul>
      </li>
      <li><a href="#contact">contact</a></li>
      <li><a href="#about">à propos</a></li>
      <li class="signin-link"><a href="{{route('accountType')}}">Se connecter / S'inscrir</a></li>
    </ul>
  
    <div id="menu-bars" class="fas fa-bars"></div>
  </header>
  <script src="script.js"></script>

  