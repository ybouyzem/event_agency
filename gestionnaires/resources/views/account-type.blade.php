<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>


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

    body {
      margin: 0;
      font-family: 'Prompt', sans-serif;
      color: white;
      background: #3c91e6;
      overflow-x: hidden;
      height: 100vh;
    }

    section {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 50%;
      padding-top: 100px;
    }

    .blue {
      background: #3c91e6;
    }

    .dark {
      background: #222;
    }

    /* Curved bg with plain CSS */

    .curve {
      position: absolute;
      height: 250px;
      width: 100%;
      bottom: 0;
      text-align: center;
    }

    .curve::before {
      content: '';
      display: block;
      position: absolute;
      border-radius: 100% 50%;
      width: 55%;
      height: 100%;
      transform: translate(85%, 60%);
      /* background-color: hsl(216, 21%, 16%); */
      background-color: #3c91e6;
    }

    .curve::after {
      content: '';
      display: block;
      position: absolute;
      border-radius: 100% 50%;
      width: 55%;
      height: 100%;
      background-color: #222;
      transform: translate(-4%, 40%);
      z-index: -1;
    }
  </style>
  <body>
    <!-- header section starts  -->
    <x-header-client/>
    <section class="dark">
        <button class="account-type-button">Veuillez choisir votre rôle : Gestionnaire, Client</button>
        <div class="account-type-container">
            {{-- <a href="">
                <div data-text="Administrateur" style="--r:-15;" class="glass">
                    <img src="{{asset('img/administrateur.png')}}" alt="">
                </div>
            </a> --}}
            <a href="/index/signin">
                <div data-text="Client" style="--r:5;" class="glass">
                    <img src="{{asset('img/client.png')}}" alt="">
                </div>
            </a>
            <a href="{{route('authentification')}}">
                <div data-text="Agence ou Prestataire" style="--r:25;" class="glass">
                    <img src="{{asset('img/gestionnaire.png')}}" alt="">
                </div>
            </a>
          </div>
        <div class="curve"></div>
      </section>
      <script src="script.js"></script>
  </body>
</html>