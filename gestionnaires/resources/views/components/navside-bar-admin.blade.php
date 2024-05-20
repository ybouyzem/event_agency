	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/index-gestionnaire" class="brand">
			<img src="img/logo.png" class="logo">
			<span class="text">ADAT</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/profile-admin" style="background-color: rgb(13, 91, 160); color:white;">
					<i class='bx bxs-user-circle' ></i>
					<span class="text">Profile</span>
					<i class='bx bx-right-arrow-alt' ></i>
				</a>
			</li>
			<li class="active">
				<a href="/index-admin">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li>
				<a href="/gestionnaires-admin">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">gestionnaires</span>
				</a>
			</li>
			<li>
				<a href="/reservations-admin">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Reservations</span>
				</a>
			</li>
			<li>
				<a href="/clients-admin">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Clients</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="{{ route('logout') }}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
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
			<a href="#" class="profile">
				
				{{-- @if(auth()->check() && auth()->user()->role === 'gestionnaire') --}}
				<p>Nom: {{ session('gestionnaire')->nom }}</p>
			</a>
		</nav>
		<!-- NAVBAR -->