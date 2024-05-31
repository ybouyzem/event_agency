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
      {{-- <section id="sidebar">
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
      </section> --}}
      {{-- @if (!session('gestionnaire')->proprietaire || session('gestionnaire')->compteActiver != "oui")
		<x-warning-profile/>
	@else --}}

	{{-- NAVBAR AND SIDEBAR --}}
	<x-navside-bar/>

  
</section>
<!-- CONTENT -->

{{-- @endif --}}
      <!-- SIDEBAR -->
    
      @if(session('success'))
      <div class="alert-container">
        <div class="popup" id="popup">
          <img src="img/verifier.png">
          <h2>Succès!</h2>
          <p> <span style="font-weight: 500">Informations du gestionnaire mises à jour avec succès</span><br>success!</p>
          <button type="button" onclick="closePopup()" id="ok-button">OK</button>
        </div>
      </div>
    @elseif(session('error'))
      <div class="alert-container">
        <div class="popup" id="popup">
          <img src="img/error.png">
          <h2>Oups!</h2>
          <p> <span style="font-weight: 500">Quelque chose s'est mal passé!</span><br> veuillez réessayer.</p>
          <button type="button" onclick="closePopup()" id="ok-button" class="error-ok">OK</button>
        </div>
      </div>
      @endif
    
        <main>
         
            <div class="profile-container">
              <div class="title">
                <img src="{{asset('img/edit.png')}}" alt="">
                <span>Bienvenue {{session('gestionnaire')->nom}} 👋</span>
             </div>
              <div class="profile-title">Modifier vos Information<i class='bx bxs-edit' ></i></div>
              <form action="{{ route('modiferInfoGestionnaire', ['gestId' => session('gestionnaire')->id]) }}" method="POST">                <div class="input-container">
                @csrf  
                <label for="input" style="color: #747474; font-family:'Gill Sans'">Type</label>
                  <input readonly id="input" type="text" value="{{ session('gestionnaire')->type }}" style="color: #6c6c6c; font-weight:bolder;"/>
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
                  <input required="" id="input" type="number" value="{{ session('gestionnaire')->telephone }}"/>
                  <label class="label" for="input">Telephone *</label>
                  <div class="underline"></div>
                </div>
                @if (session('gestionnaire')->type=="Agence")
                <div class="input-container select-option">
                  <label for="input">Service par defaut *</label>
                  <select name="service" id="service">
                    @if (session('gestionnaire')->service)
                      <option value="0">{{ session('gestionnaire')->service }}</option>
                    @else
                      <option value="0">sélectionner service</option>
                    @endif
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
                  </select>
                </div>
                @else 
                <div class="input-container">
                  <input required="" id="input" type="text" />
                  <label class="label" for="input">Service par defaut *</label>
                  <div class="underline"></div>
                </div>
                @endif

                <div class="description-profile">
                  <textarea id="detail" name="detail" rows="4" cols="50" placeholder="Description">{{ session('gestionnaire')->detail }}</textarea>
                </div>
                <div class="input-container">
                  <input required="" id="input" type="submit" value="Modifier"/>
                </div>
                </form>
                {{-- CHANGER IMAGE --}}
                <div class="profile-title">Ajouter Votre Images <i class='bx bxs-image-add'></i></div>
                <form action="{{ route('modifierImageGestionnaire', ['gestId' => session('gestionnaire')->id]) }}" method="POST">
                  @csrf
                  <div class="messageBox">
                    <div class="fileUploadWrapper">
                      <label for="file">
                        <i class='bx bx-image-add' ></i>
                        <span class="tooltip">Add an image</span>
                      </label>
                      <input type="file" id="image1" name="image1" />
                    </div>
                  </div>
                  <div class="messageBox">
                    <div class="fileUploadWrapper">
                      <label for="file">
                        <i class='bx bx-image-add'></i>
                        <span class="tooltip">Add an image</span>
                      </label>
                      <input type="file" id="image2" name="image2" />
                    </div>
                  </div>
                  <div class="messageBox">
                    <div class="fileUploadWrapper">
                      <label for="file">
                        <i class='bx bx-image-add' ></i>
                        <span class="tooltip">Add an image</span>
                      </label>
                      <input type="file" id="image3" name="image3" />
                    </div>
                  </div>
                  <div class="messageBox">
                    <div class="fileUploadWrapper">
                      <label for="file">
                        <i class='bx bx-image-add' ></i>
                        <span class="tooltip">Add an image</span>
                      </label>
                      <input type="file" id="image4" name="image4" />
                    </div>
                  </div>

                  
                  <div class="input-container">
                    <input required="" id="input" type="submit" value="Ajouter images"/>
                  </div>
                </form>
                {{-- CHANGER MOT DE PASSE --}}
                <div class="profile-title">Changer Votre mot de passe <i class='bx bxs-key'></i></div>
                <form action="{{ route('modifierMotPasse', ['gestId' => session('gestionnaire')->id]) }}" method="POST">
                  @csrf
                  <div class="input-container">
                    <input required="" id="input" type="password" name="oldMotPasse"/>
                    <label class="label" for="input">Ancien mot de passe *</label>
                  </div>
                  <div class="input-container">
                    <input required="" id="input" type="password" name="newMotPasse"/>
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

      <script src="{{asset('login.js')}}"></script>

    </body>
</html>