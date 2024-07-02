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
                  <input required="" id="input" type="text" name="proprietaire" value="{{ session('gestionnaire')->proprietaire }}"/>
                  <label class="label" for="input">Proprietaire *</label>
                  <div class="underline"></div>
                </div>
                {{-- <div class="input-container">
                  <input required="" id="input" type="text" name="ville" value="{{ session('gestionnaire')->ville }}"/>
                  <label class="label" for="input">Ville *</label>
                  <div class="underline"></div>
                </div> --}}
                <div class="input-container">
                  <input required="" id="input" type="text" name="adresse" value="{{ session('gestionnaire')->adresse }}"/>
                  <label class="label" for="input">Adresse *</label>
                  <div class="underline"></div>
                </div>
                <div class="input-container">
                  <input required="" id="input" type="number" name="telephone" value="{{ session('gestionnaire')->telephone }}"/>
                  <label class="label" for="input">Telephone *</label>
                  <div class="underline"></div>
                </div>
                <div class="input-container">
                  <input id="input" type="number" name="prix" value="{{ session('gestionnaire')->prix }}"  required />
                  <label class="label" for="input">Prix de depart (dh)*</label>
                  <div class="underline"></div>
                </div>
                @if (session('gestionnaire')->type=="Agence")
                <div class="input-container select-option">
                  <label for="input">Service par defaut *</label>
                  <select name="service" id="service">
                    @if (session('gestionnaire')->service)
                      <option value="{{ session('gestionnaire')->service }}">{{ session('gestionnaire')->service }}</option>
                    @else
                      <option value="0">sélectionner Evenement</option>
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
                <div class="input-container select-option">
                  <label for="input">Service par defaut *</label>
                  <select name="service" id="service">
                    @if (session('gestionnaire')->service)
                      <option value="{{ session('gestionnaire')->service }}">{{ session('gestionnaire')->service }}</option>
                    @else
                      <option value="0">sélectionner service</option>
                    @endif
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

                {{-- <div class="input-container">
                  <input required="" name="service" id="input" type="text" value="{{ session('gestionnaire')->service }}"/>
                  <label class="label"  for="input">Service par defaut *</label>
                  <div class="underline"></div>
                </div> --}}
                @endif
                <div class="input-container select-option">
                  <label for="input">Ville *</label>
                  <select name="ville" id="service">
                    @if (session('gestionnaire')->ville)
                      <option value="{{ session('gestionnaire')->ville }}">{{ session('gestionnaire')->ville }}</option>
                    @else
                      <option value="0">sélectionner votre ville</option>
                    @endif
                    <option value="all">Tous les villes</option>
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

                <div class="description-profile">
                  <textarea id="detail" name="detail" rows="4" cols="50" placeholder="Description" required>{{ session('gestionnaire')->detail }} </textarea>
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
                      <input type="file" id="image1" name="image1" required value="{{session('gestionnaire')->image1}}" required/>
                    </div>
                  </div>
                  <div class="messageBox">
                    <div class="fileUploadWrapper">
                      <label for="file">
                        <i class='bx bx-image-add'></i>
                        <span class="tooltip">Add an image</span>
                      </label>
                      <input type="file" id="image2" name="image2" value="{{session('gestionnaire')->image2}}" required/>
                    </div>
                  </div>
                  <div class="messageBox">
                    <div class="fileUploadWrapper">
                      <label for="file">
                        <i class='bx bx-image-add' ></i>
                        <span class="tooltip">Add an image</span>
                      </label>
                      <input type="file" id="image3" name="image3" value="{{session('gestionnaire')->image3}}" required/>
                    </div>
                  </div>
                  <div class="messageBox">
                    <div class="fileUploadWrapper">
                      <label for="file">
                        <i class='bx bx-image-add' ></i>
                        <span class="tooltip">Add an image</span>
                      </label>
                      <input type="file" id="image4" name="image4" value="{{session('gestionnaire')->image4}}" required/>
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
      <script>(function(w, d) { w.CollectId = "663e3d251063215eaa11d59b"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>	<script src="script.js"></script>

    </body>
</html>