<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
    <link rel="icon" href="img/logo.png" type="image/x-icon">

    <title>Se Connecter</title>
  </head>

  <body>
    <header class="header">
      <a href="/index" class="logo"><span>H</span>adat</a>
    </header>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Se connecter</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" />
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
          <form action="#" class="sign-up-form">
            <h2 class="title">S'inscrire</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nom Complet" name="nomComplet"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" name="motPasse"/>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirmez le mot de passe" name="cnfmotPasse" />
              </div>
            <input type="submit" class="btn" value="S'inscrire" />
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
            <p>Welcom If you have an account, click here.</p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          
        </div>
      </div>
    </div>

    
  </body>
  <script src="login.js"></script>
</html>