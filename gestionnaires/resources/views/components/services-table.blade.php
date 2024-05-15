@props(['categories', 'services'])
<div class="table-data">
    <div class="order">
        <form  method="POST" action="{{ route('ajouter-service') }}" class="modifier">
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
                <input type="file" name="image">
            </label>
            <label class="ajouter-button">
                <i class='bx bxs-message-square-add'></i>
                <input type="submit" value="Ajouter" >
            </label>
        </form>

        <div class="head">
            <h3>Tous les services</h3>
            {{-- <i class='bx bx-search' ></i> --}}
            {{-- <i class='bx bx-filter' ></i> --}}
        </div>
        <form action="#" class="search-input">
            <div class="form-input">
                <input type="search" placeholder="Chercher service..." id="search-input">
            </div>
        </form>
        <table class="table">
            <thead>
                <tr class="thead">
                    <th></th>
                    <th id="service-id">Identifiant <i class="bx bx-chevron-up"></i></th>
                    <th id="service-name">Titre <i class="bx bx-chevron-up"></i></th>
                    <th>Catégorie</th>
                    <th>Prix debut (DH)</th>
                    <th>Prix final (DH)</th>
                    <th>Detail</th>
                    <th>Deplacement</th>
                    <td></td>
                </tr>
            </thead>
            <tbody class="items">
                @foreach ($services as $service)
                    <tr>
                        <td><img src="img/{{$service->image}}" alt=""></td>
                        <td>{{$service->id}}</td>
                        <td>{{$service->titre}}</td>
                        <td>{{$service->nom}}</td>
                        <td>{{ $service->{'prix-debut'} }}</td>
                        <td>{{ $service->{'prix-fin'} }}</td>
                        <td>{{$service->detail}}</td>
                        <td>{{$service->deplacement}}</td>
                        <td>
                            <button class="modifer-button"><i class='bx bxs-edit'></i> modifier</button>
                            <button class="supprimer-button"><i class='bx bx-message-square-x'></i> supprimer</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
