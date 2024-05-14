<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  
    <link rel="stylesheet" href="login.css" />
    <link rel="icon" href="img/logo.png" type="image/x-icon">

    <title>Se Connecter</title>
  </head>

  <body>

    <div class="container">
        <a href="/index" class="brand">
            <img src="img/logo.png" class="logo">
            <span class="text">ADAT</span>
        </a>
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Se connecter</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" oninput="validateEmail(this)" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe"  oninput="checkPasswordStrength(this)" required />
              <span id="password-strength"></span>
            </div>
            <input type="submit" value="Se Connecter" class="btn solid" />
            <p class="social-text">Ou Inscrivez-vous sur Google</p>
            <div class="social-media">
              {{-- <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a> --}}
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              {{-- <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a> --}}
            </div>
          </form>
          <form method="POST" action="" class="sign-up-form">
            @csrf
            <h2 class="title">S'inscrire</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nom de l'agence ou prestataire" name="nomAgence" required/>
            </div>
            <div class="radio-container">
                <label class="radio-field">
                    <span>Prestataire</span>
                    <input type="radio" name="type" required/>
                    <span class="checkmark"></span>
                </label>
                <label class="radio-field">
                    <span>Agence</span>
                    <input type="radio" name="type" required/>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="input-field">
                <i class='bx bxs-buildings' ></i>
              <input type="text" placeholder="Ville" name="ville" required/>
            </div>
            <div class="input-field">
                <i class="bx bxs-phone"></i>
              <input type="number" placeholder="numero telephone" name="telephone" oninput="validatePhoneNumber(this)" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" oninput="validateEmail(this)" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" name="motPasse" oninput="checkPasswordStrengthSignup(this)" required/>
              <span id="password-strength-signup"></span>
            </div>
            <input type="submit" class="btn" value="S'inscrire" />
            <p class="social-text">Ou Inscrivez-vous sur Google</p>
            <div class="social-media">
              {{-- <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a> --}}
              {{-- <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a> --}}
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
               {{-- <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>  --}}
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nouveau ici ?</h3>
            <p>
              Bienvenue Si vous n'avez pas de compte, cliquez ici.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              S'inscrire
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Un de nous ?</h3>
            <p>Bienvenue Si vous avez un compte, cliquez ici.</p>
            <button class="btn transparent" id="sign-in-btn">
              Se connecter
            </button>
          </div>
          
        </div>
      </div>
    </div>

    
  </body>
  <script src="login.js"></script>
  <script src="input-requirements.js"></script>
</html>