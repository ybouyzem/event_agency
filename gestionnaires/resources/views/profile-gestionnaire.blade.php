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
  @if (!session('gestionnaire')->proprietaire || !session('gestionnaire')->detail || !session('gestionnaire')->service || !session('gestionnaire')->compteActiver || session('gestionnaire')->compteActiver == "deactiver")

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
		<ul class="side-menu">
			<li>
				<a href="{{ route('logout') }}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

  @else 
  


  @endif
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
				
				<p>Nom: {{ session('gestionnaire')->nom }}</p>
			</a>
		</nav>
		<!-- NAVBAR -->
	</section>
  <main>
    <div class="col-xl-8 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">My account</h3>
            </div>
            <div class="col-4 text-right">
              <a href="#!" class="btn btn-sm btn-primary">Settings</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-username">Username</label>
                    <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email address</label>
                    <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">First name</label>
                    <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-last-name">Last name</label>
                    <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Contact information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-address">Address</label>
                    <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-city">City</label>
                    <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-country">Country</label>
                    <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Postal code</label>
                    <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">About me</h6>
            <div class="pl-lg-4">
              <div class="form-group focused">
                <label>About Me</label>
                <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </main>
</section>
</body>
</html>