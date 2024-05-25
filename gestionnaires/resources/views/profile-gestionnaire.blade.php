<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <!-- Boxicons -->
	    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	    <!-- My CSS -->
	    <link rel="stylesheet" href="{{asset('style.css')}}">

	    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">


	    <title>AdminHub</title>
    </head>
    <body>
      <section id="sidebar">
        <a href="/index-gestionnaire" class="brand">
          <img src="img/logo.png" class="logo">
          <span class="text">ADAT</span>
        </a>
        <ul class="side-menu top">
          <li>
            <a href="/profile-gestionnaire" style="background-color: rgb(13, 91, 160); color:white;">
              <i class='bx bxs-user-circle' ></i>
              <span class="text">Profile</span>
              <i class='bx bx-right-arrow-alt' ></i>
            </a>
          </li>
        <ul class="side-menu">
          <li>
            <a href="{{ route('logout') }}" class="logout">
              <i class='bx bxs-log-out-circle' ></i>
              <span class="text">Logout</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- SIDEBAR -->
    
    
    
      <!-- CONTENT -->
      <section id="content">
        <!-- NAVBAR -->
        <nav>
          <i class='bx bx-menu' ></i>
          <form action="#" style="visibility: hidden">
            <div class="form-input">
              <input type="search" placeholder="Chercher client...">
              <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
          </form>
          <input type="checkbox" id="switch-mode" hidden style="visibility: hidden">
          <label for="switch-mode" class="switch-mode" style="visibility: hidden"></label>
          <a href="#" class="profile">
            
            <p>Nom: {{ session('gestionnaire')->nom }}</p>
          </a>
        </nav>
        <!-- NAVBAR -->
      </section>
        <main>
            <div class="profile-container">
              <div class="profile-title">Nom : <span>{{ session('gestionnaire')->nom }}</span></div>
              <form action="" method="post">
                <div class="input-container">
                  <label for="input" style="color: #747474; font-family:'Gill Sans'">Type</label>
                  <input readonly id="input" type="text" value="{{ session('gestionnaire')->type }}" style="color: #4a9ac4"/>
                </div>
                <div class="input-container">
                  <input required="" id="input" type="text" value="{{ session('gestionnaire')->proprietaire }}"/>
                  <label class="label" for="input">Proprietaire *</label>
                  <div class="underline"></div>
                </div>
                <div class="input-container">
                  <input required="" id="input" type="text" value="{{ session('gestionnaire')->ville }}"/>
                  <label class="label" for="input">Ville *</label>
                  <div class="underline"></div>
                </div>
                <div class="input-container">
                  <input required="" id="input" type="text" value="{{ session('gestionnaire')->adresse }}"/>
                  <label class="label" for="input">Adresse *</label>
                  <div class="underline"></div>
                </div>
                <div class="input-container">
                  <input required="" id="input" type="number" value="{{ session('gestionnaire')->adresse }}"/>
                  <label class="label" for="input">Telephone *</label>
                  <div class="underline"></div>
                </div>
                <div class="description-profile">
                  <textarea id="" name="" rows="4" cols="50" placeholder="Description">{{ session('gestionnaire')->detail }}</textarea>
                </div>
                <div class="input-container">
                  <input required="" id="input" type="submit" value="Modifier"/>
                </div>
                </form>
                <div class="profile-title">Changer Votre mot de passe <i class='bx bxs-key'></i></div>
                <form action="" method="post">
                  <div class="input-container">
                    <input required="" id="input" type="password"/>
                    <label class="label" for="input">Ancien mot de passe *</label>
                  </div>
                  <div class="input-container">
                    <input required="" id="input" type="password"/>
                    <label class="label" for="input">nouveau mot de passe *</label>
                  </div>
                  <div class="input-container">
                    <input required="" id="input" type="submit" value="Modifier mot de passe"/>
                  </div>
                </form>
            </div>
        </main>
            <!-- MAIN -->
      </section>
      <!-- CONTENT -->
    </body>
</html>