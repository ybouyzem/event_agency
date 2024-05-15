@props(['categories', 'services'])
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Tous les services</h3>
            {{-- <i class='bx bx-search' ></i> --}}
            {{-- <i class='bx bx-filter' ></i> --}}
        </div>
        {{-- <form action="#" class="search-input">
            <div class="form-input">
                <input type="search" placeholder="Chercher service..." id="search-input">
            </div>
        </form> --}}
        <table class="client-table">
            <thead>
                <tr class="thead">
                    <th></th>
                    <th id="client-id">Identifiant <i class="bx bx-chevron-up"></i></th>
                    <th id="client-name">Titre <i class="bx bx-chevron-up"></i></th>
                    <th>Catégorie</th>
                    <th>Prix debut</th>
                    <th>Prix final</th>
                    <th>Deplacement</th>
                    <td></td>
                </tr>
            </thead>
            <tbody class="clients">
                @foreach ($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td><p>{{$service->titre}}</p></td>
                        <td>{{$service->image}}</td>
                        <td>{{$service->prix_debut}}</td>
                        <td>{{$service->prix_fin}}</td>
                        <td>{{$service->deplacement}}</td>
                        <td>
                            <button value="modifier" class="modifer-button"></button>
                            <button value="supprimer" class="supprimer-button"></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
