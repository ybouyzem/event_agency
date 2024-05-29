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
    <link rel="stylesheet" href="{{ asset('signin-client.css') }}" />

    <!-- favorite icon -->
    <link rel="icon" type="img/logo" href="images/favicon.png" />

  </head>
  <body>
    <x-header-client/>
    <section class="sigin-client-section">
      <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form action="#">
            <h1>Créer un compte</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <span>ou utilisez votre email pour vous inscrire</span>
            <input type="text" placeholder="Nom Complet" />
            <input type="text" placeholder="Ville" />
            <input type="number" placeholder="Telephone" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Mot de passe" />
            <button>S'inscrire</button>
          </form>
        </div>
        <div class="form-container sign-in-container">
          <form action="#">
            <h1>Se connecter</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <span>ou utilisez votre compte</span>
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Mot de Passe" />
            <a href="#" class="fogetpwd">Mot de passe oublié</a>
            <button>Se connecter</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Content de vous revoir!</h1>
              <p>Pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles</p>
              <button class="ghost" id="signIn">Se connecter</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Bonjour, madame,monsieur !</h1>
              <p>Entrez vos informations personnelles et commencez votre voyage avec nous</p>
              <button class="ghost" id="signUp">S'inscrire</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>
  </body>
</html>