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
                    <th id="client-id">Identifiant <i class="bx bx-chevron-up"></i></th>
                    <th id="client-name">Nom Complet <i class="bx bx-chevron-up"></i></th>
                    <th>Ville</th>
                    <th>Telephone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody class="clients">
                @foreach ($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td><p>{{$client->nomComplet}}</p></td>
                        <td>{{$client->ville}}</td>
                        <td>{{$client->telephone}}</td>
                        <td>{{$client->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
