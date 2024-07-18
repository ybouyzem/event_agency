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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />


	<title>Staff</title>

	<style>
        .prestataire {
		color: #06ba3f;
		font-weight: 700;
        }
        .agence {
			color: #0592de;
		font-weight: 700;
        }
    </style>
	    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<body>
	{{-- NAVBAR AND SIDEBAR --}}

		<!-- MAIN -->
		<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="" class="brand">
			<img src="img/logo.png" class="logo">
			<span class="text">ADAT</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="" style="background-color: rgb(13, 91, 160); color:white;">
					<i class='bx bxs-user-circle' ></i>
					<span class="text">gestionnaires</span>
					<i class='bx bx-right-arrow-alt' ></i>
				</a>
			</li>
			{{-- <li class="active">
				<a href="/index-admin">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li> --}}
            {{-- <li>
				<a href="/gestionnaires-admin">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">gestionnaires</span>
				</a>
			</li> --}}
			{{-- <li>
				<a href="/reservations-admin">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Reservations</span>
				</a>
			</li> --}}
			{{-- <li>
				<a href="/clients-admin">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Clients</span>
				</a>
			</li> --}}
		</ul>
		{{-- <ul class="side-menu">
			<li>
				<a href="{{ route('logout') }}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Se déconnecter</span>
				</a>
			</li>
		</ul> --}}
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#" style="visibility: hidden">
				<div class="form-input">
					<input type="search" placeholder="Chercher client...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden style="visibility: hidden">
			<label for="switch-mode" class="switch-mode" style="visibility: hidden"></label>
			<a href="#" class="profile">
				
				{{-- @if(auth()->check() && auth()->user()->role === 'gestionnaire') --}}
			</a>
		</nav>
		<!-- NAVBAR -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Administartion</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">gestionnaires</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Index</a>
                    </li>
                </ul>
            </div>
        </div>


		{{-- main --}}
		<form action="#" class="search-input">
            <div class="form-input">
                <input type="search" placeholder="Chercher gestionnaire..." id="search-input">
            </div>
        </form>
  
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Tous les gestionnaires</h3>
                    </div>
                        <table class="table">
                            <thead>
                                <tr class="thead">
									<th id="client-id" style="display:flex;">Identifiant <i class="bx bx-chevron-up"></th>
                                    <th id="client-name">nom <i class="bx bx-chevron-up"></th>
                                    <th>type</th>
									<th>service ou evenement</th>
                                    <th>ville</th>
									<th>adresse</th>
                                    <th>prix</th>
                                    <th>telephone</th>
                                    <th>email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="items">
                                    @foreach ($gestionnaires as $gestionnaire)
									<tr>
										<td>{{$gestionnaire->id}}</td>
                                    	<td >{{$gestionnaire->nom}}</td>
                                    	<td class="gestionnaire-type">{{$gestionnaire->type}}</td>
										<td>{{$gestionnaire->service}}</td>
                                    	<td>{{$gestionnaire->ville}}</td>
										<td>{{$gestionnaire->adresse}}</td>
                                    	<td>{{$gestionnaire->prix}}</td>
                                    	<td>{{$gestionnaire->telephone}}</td>
                                    	<td>{{$gestionnaire->email}}</td>
                                        <td>
											<button type="button" class="supprimer-button" onclick="deleteGest({{ $gestionnaire->id }})"><i class='bx bx-message-square-x'></i> supprimer</button>
										</td>
                                    </tr>
									@endforeach
                            </tbody>
                        </table>
                </div>
 
    </main>
    <!-- MAIN -->
</section>
	<!-- CONTENT -->
	<script>
        document.addEventListener('DOMContentLoaded', function() {
            var gestionnaireTypes = document.querySelectorAll('.gestionnaire-type');
            
            gestionnaireTypes.forEach(function(td) {
                var typeContent = td.textContent.trim();

                if (typeContent === 'Prestataire') {
                    td.classList.add('prestataire');
                } else if (typeContent === 'Agence') {
                    td.classList.add('agence');
                }
            });
        });
		function deleteGest(id) {
  if (confirm('Are you sure you quieren eliminar este gestionnaire?')) { 
    const finalUrl = '/remove-gestionnaire/' + id;

    window.location.href = finalUrl; // Navigate to the constructed URL

  }
}
    </script>
	 <script src="{{asset('script.js')}}"></script>
	 <script src="{{asset('search-input.js')}}"></script>
 <script src="{{asset('sort-filter-client.js')}}"></script>
 {{-- <div class="loader"></div> --}}
</body>
</html>