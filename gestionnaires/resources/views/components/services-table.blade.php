@props(['services'])
<div class="table-data">
    <div class="order">
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
                    <th>Prix debut</th>
                    <th>Prix final</th>
                    <th>Detail</th>
                    <th>Deplacement</th>
                    <td></td>
                </tr>
            </thead>
            <tbody class="items">
                @foreach ($services as $service)
                    <tr>
                        <td><img src="{{$service->image}}" alt=""></td>
                        <td>{{$service->id}}</td>
                        <td>{{$service->titre}}</td>
                        <td>{{$service->nom}}</td>
                        <td>{{$service->prix}}</td>
                        <td>{{$service->prix_debut}}</td>
                        <td>{{$service->prix_fin}}</td>
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
