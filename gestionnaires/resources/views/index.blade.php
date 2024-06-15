<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
    <link rel="icon" type="img/logo" href="images/favicon.png" />

  </head>
  <body>
    <!-- header section starts  -->
    <x-header-client/>

    <!-- home section starts  -->
    <section class="home" id="home">
      <div class="content">
        <h1>evénements <br><span>Hadat</span> <br>où décollent vos idées</h1>
        <p class="par">Transformons Votre Vision En Une Réalité Minutieusement Planifiée.</p>
        <a href="{{asset('/se-connecter-gestionnaire/account-type')}}">
          <button class="home-btn">
            <div class="wrapper">
              <p class="text">Rejoins-nous</p>
          
              <div class="flower flower1">
                <div class="petal one"></div>
                <div class="petal two"></div>
                <div class="petal three"></div>
                <div class="petal four"></div>
              </div>
              <div class="flower flower2">
                <div class="petal one"></div>
                <div class="petal two"></div>
                <div class="petal three"></div>
                <div class="petal four"></div>
              </div>
              <div class="flower flower3">
                <div class="petal one"></div>
                <div class="petal two"></div>
                <div class="petal three"></div>
                <div class="petal four"></div>
              </div>
              <div class="flower flower4">
                <div class="petal one"></div>
                <div class="petal two"></div>
                <div class="petal three"></div>
                <div class="petal four"></div>
              </div>
              <div class="flower flower5">
                <div class="petal one"></div>
                <div class="petal two"></div>
                <div class="petal three"></div>
                <div class="petal four"></div>
              </div>
              <div class="flower flower6">
                <div class="petal one"></div>
                <div class="petal two"></div>
                <div class="petal three"></div>
                <div class="petal four"></div>
              </div>
            </div>
          </button>
        </a>
      </div>
    </section>
    @if (!empty($promotions))
      <x-slider-promotion :promotions="$promotions"  />
    @endif
    <section class="filter-section">
      <p class="filter-title">veuillez choisir ce que vous recherchez</p>
      <div class="type-gestionnaire">
        <div>
          {{-- <label>
            <input type="radio" name="radio" value="all">
            <span>Tous</span>
          </label> --}}
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
          <option value="all">Services & evenements</option>
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
          <option value="Salle de mariage">Salle de mariage</option>
          <option value="Photographes">Photographes</option>
          <option value="Traiteur & Catering">Traiteur & Catering</option>
          <option value="Negafa">Negafa</option>
          <option value="Orchestres">Orchestres</option>
          <option value="Salons & Coiffure">Salons & Coiffure</option>
          <option value="Décoration & Design">Décoration & Design</option>
          <option value="Issawa & Dakka Marrakchia">Issawa & Dakka Marrakchia</option>
          <option value="DJ Evolutif">DJ Evolutif</option>
          <option value="Eclairage & Sonorisation">Eclairage & Sonorisation</option>
        </select>
      </div>
    <div class="city-select-wrapper">
      {{-- <label for="">Choisis Services :</label> --}}
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <select name="city" size="1" onfocus="this.size = 8" onchange="this.blur()" onblur="this.size = 1; this.blur()"> --}}
      <select name="city" id="cities" >
        <option value="all" >Tous les villes</option>
        <option value="agadir">Agadir</option>
        <option value="ait-melloul">Ait Melloul</option>
        <option value="asilah">Asilah</option>
        <option value="azrou">Azrou</option>
        <option value="azzemour">Azzemour</option>
        <option value="beni-mellal">Beni Mellal</option>
        <option value="ben-ahmed">Ben Ahmed</option>
        <option value="ben-guerir">Ben Guerir</option>
        <option value="berkane">Berkane</option>
        <option value="berrechid">Berrechid</option>
        <option value="biougra">Biougra</option>
        <option value="bouarfa">Bouarfa</option>
        <option value="casablanca">Casablanca</option>
        <option value="chechaouen">Chechaouen</option>
        <option value="drargua">Drargua</option>
        <option value="el-aaiun">El Aaiun</option>
        <option value="el-hajeb">El Hajeb</option>
        <option value="el-jadida">El Jadida</option>
        <option value="el-kelâa-des-sraghna">El Kelâa des Sraghna</option>
        <option value="essaouira">Essaouira</option>
        <option value="fes">Fes</option>
        <option value="fes-el-jdid">Fes el Jdid</option>
        <option value="fnideq">Fnideq</option>
        <option value="guelmim">Guelmim</option>
        <option value="imzouren">Imzouren</option>
        <option value="jerada">Jerada</option>
        <option value="kalaa-sraghna">Kalaa Sraghna</option>
        <option value="kenitra">Kenitra</option>
        <option value="khemisset">Khemisset</option>
        <option value="khenifra">Khenifra</option>
        <option value="khouribga">Khouribga</option>
        <option value="larache">Larache</option>
        <option value="laayoune">Laayoune</option>
        <option value="martil">Martil</option>
        <option value="marrakech">Marrakech</option>
        <option value="meknes">Meknes</option>
        <option value="mohammedia">Mohammedia</option>
        <option value="moulay-idriss">Moulay Idriss</option>
        <option value="nador">Nador</option>
        <option value="ouarzazate">Ouarzazate</option>
        <option value="oued-zem">Oued Zem</option>
        <option value="oujda">Oujda</option>
        <option value="oulad-teima">Oulad Teima</option>
        <option value="rabat">Rabat</option>
        <option value="safi">Safi</option>
        <option value="sebt-zniber">Sebt Zniber</option>
        <option value="settat">Settat</option>
        <option value="sidi-ifni">Sidi Ifni</option>
        <option value="sidi-kacem">Sidi Kacem</option>
        <option value="sidi-slimane">Sidi Slimane</option>
        <option value="tan-tan">Tan-Tan</option>
        <option value="tangier">Tangier</option>
        <option value="taroudant">Taroudant</option>
        <option value="taza">Taza</option>
        <option value="temara">Temara</option>
        <option value="tetouan">Tetouan</option>
        <option value="tirahmad">Tirahmad</option>
        <option value="tiznit">Tiznit</option>
        <option value="youssoufia">Youssoufia</option>
      </select>
    </div>
  
      <div class="PB-range-slider-div">
        <p>Prix maximum</p>
        <input type="range" min="50" max="90000" value="900000" class="PB-range-slider" id="myRange" >
        <p class="PB-range-slidervalue" id="priceDisplay"></p>
      </div>
    </section>
    {{-- slider of agences and prestataires --}}
    {{-- @if (empty($gestionnaires))
    <div class="empty-gest">
      Désolé! il n'y a aucune agence ou prestataire disponible actuellement.
    </div>

    @else
      <x-slider-agences :gestionnaires="$gestionnaires" :favoriteGests="$favoriteGests" :promotions="$promotions" />
    @endif --}}
    <x-slider-agences :gestionnaires="$gestionnaires" :favoriteGests="$favoriteGests" :promotions="$promotions" />

    <!-- service section starts  -->
    {{-- <section class="service" id="service">
      <h1 class="heading">Nos <span>services</span></h1>

      <div class="box-container">
       
          
          <?php 
          ?>
            <div class="box">
              <img src="img/shooting.jpg" alt="">
              <h3> titre </h3>
              </div>
          <?php
          ?>
        
      </div>
    </section> --}}

    <!-- contact section starts  -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>nous</span> contacter</h1>
        <form action="contact-us.php" method="post" >
            <div class="inputBox">
                <input type="text" placeholder="nom complet" id="nomComplet" name="nomComplet" />
                <input type="email" placeholder="email" id="email" name="email"/>
            </div>
            <div class="inputBox">
                <input type="tel" placeholder="telephone" id="telephone" name="telephone"/>
                <input type="text" placeholder="objet" id="object" name="object"/>
            </div>
            <textarea
            name="message"
            placeholder="message"
            id="message"
            cols="30"
            rows="10"
            ></textarea>
            <input type="submit" value="envoyer" class="btn" />
        </form>
    </section>
    <!-- about section starts  -->
    {{-- <section class="about" id="about">
      <h1 class="heading"><span>À PROPOS</span> DE NOUS</h1>

      <div class="row">
        <div class="image">
          <img src="images/plaining.jpeg" alt="" />
        </div>

        <div class="content">
          <h3>Votre événement mérite une planification méticuleuse.</h3>
          <p>
            Sur notre plateforme de gestion
            d'événements, nous comprenons l'importance de chaque rassemblement,
            des célébrations intimes aux grandes fonctions corporatives. 
          </p>
          <p>
            Cliquez sur le bouton ci-dessous pour entamer une conversation concernant votre événement,
            où notre équipe ajustera chaque détail avec soin pour garantir une expérience mémorable.
            Transformons votre vision en une réalité minutieusement planifiée.
          </p>
          <a href="#" class="btn">Rejoins-nous</a>
        </div>
      </div>
    </section> --}}
    <!-- footer section starts  -->
    <x-footer/>
    
    <!-- for the page loader -->
    <div class="loader"></div>
    <!--JS file-->
    <script>

    </script>
    <script src="{{asset('loader.js')}}"></script>
    <script src="{{asset('filter-agence.js')}}"></script>
    <script src="{{asset('script.js')}}"></script>
    <script src="{{asset('favoris.js')}}"></script>
    <script src="{{asset('detail-agence.js')}}"></script>
    <script src="{{asset('alert.js')}}"></script>

  </body>
</html>
