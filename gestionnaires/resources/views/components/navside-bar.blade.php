	<!-- SIDEBAR -->
	<section id="sidebar">
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
			{{-- <li class="active">
				<a href="/index-gestionnaire">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Tableau de Bord</span>
				</a>
			</li> --}}
			{{-- <li>
				<a href="/reservations">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Reservations</span>
				</a>
			</li> --}}
			{{-- @if (session('gestionnaire') && session('gestionnaire')->type == "Agence")
				<li>
					<a href="/services-gestionnaire">
						<i class='bx bxs-doughnut-chart' ></i>
						<span class="text">Services</span>
					</a>
				</li>
			@endif --}}
			{{-- <li>
				<a href="/clients">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Clients</span>
				</a>
			</li> --}}
			{{-- <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Packs</span>
				</a>
			</li> --}}
			<li>
				<a href="/promotion">
					<i class='bx bxs-discount'></i>
					<span class="text">Promotions</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
			<li>
				<a href="{{ route('logout') }}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Se déconnecter</span>
				</a>
			</li>
		</ul>
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
			{{-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a> --}}
			<a href="#" class="profile">
				
				{{-- @if(auth()->check() && auth()->user()->role === 'gestionnaire') --}}
				<!-- Add more properties as needed -->
			{{-- @endif --}}
			
							{{-- <img src="img/people.png"> --}}
			</a>
		</nav>
		<!-- NAVBAR -->