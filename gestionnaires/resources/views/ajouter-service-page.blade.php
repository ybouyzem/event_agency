@props(['categories'])
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->
    
        <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Document</title>
</head>
<body>
     {{-- NAVBAR AND SIDEBAR --}}
	<x-navside-bar/>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Services</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="{{route('allServices')}}">Accueil</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Ajouter Service</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="table-data">
            <div class="order">
                <form  method="POST" action="{{ route('ajouter-service') }}" class="ajouter" id="ajouter-service-form">
                    @csrf
                    {{-- <label class="input-field">
                        <input type="text" readonly value="Identifiant (2)" style="color:rgba(128, 128, 128, 0.717)">
                    </label> --}}
                    <label  class="input-field">
                        {{-- <select name="categorie" required>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                            @endforeach
                        </select> --}}
                        <select name="id_categorie" id="categorie" required>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="input-field">
                        <input type="number" placeholder="prix debut (dh)" name="prix_debut" required>    
                    </label>
                    <label class="input-field">
                        <input type="number" placeholder="prix fin (dh)" name="prix_fin" required>    
                    </label>
                    <label class="input-field">
                        <input type="text" placeholder="detail" name="detail" required>
                    </label>
                    <label class="input-field">
                        <input type="text" name="titre" placeholder="Titre" name="titre" required>
                    </label>          
          
                    <label  class="radio-container">
                        <label style="width: 300px">Offre Deplacement ? </label>
                        <label class="radio-field">
                            <span>Oui</span>
                            <input type="radio" name="deplacement" value="oui" required/>
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-field">
                            <span>Non</span>
                            <input type="radio" name="deplacement"  value="non" required/>
                            <span class="checkmark"></span>
                        </label>
                    </label>
                    <label class="input-field">
                        <span>Image</span>
                        <input type="file" name="image" required>
                    </label>
                    <label class="ajouter-annuler">
                        <a href="{{route('allServices')}}" id="annuler-button">
                            <button onclick="annulerAjouterService()"><i class='bx bx-undo'></i> Annuler</button>           
                        </a>
                        <label class="ajouter-button">
                            <i class='bx bxs-message-square-add'></i>
                            <input type="submit" value="Ajouter" >
                        </label>
                    </label>
                </form>
        </div>
    </main>
    <script src="search-input.js"></script>
    <script src="sort-filter-service.js"></script>
    <script src="script.js"></script>
</body>
</html>