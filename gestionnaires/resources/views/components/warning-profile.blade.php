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
<style>
    /* body {
        display: grid;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;

        background-color: rgb(226, 155, 155);
    } */
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
    }

    .notifications-container {
        align-self: center;
        width: 320px;
        height: auto;
        font-size: 0.875rem;
        line-height: 1.25rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-weight: 600;
        margin-left: 55px;
    }

    .flex {
        display: flex;
    }

    .flex-shrink-0 {
        flex-shrink: 0;
    }

    .alert {
        background-color:rgb(255, 248, 248);
        border-left-width: 4px;
        border-color: rgb(250 204 21);
        border-radius: 0.375rem;
        padding: 1rem;
    }

    .alert-svg {
        height: 1.25rem;
        width: 1.25rem;
        color: rgb(250 204 21);
    }

    .alert-prompt-wrap {
        margin-left: 0.75rem;
        color: rgb(202 138 4);
    }

    .alert-prompt-link {
        font-weight: 900;
        color: rgb(250 204 21);
        text-decoration: underline;
    }

    .alert-prompt-link:hover {
        color: rgb(202 138 4);
    }
</style>
<body>
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
				
				<p>Nom: {{ session('gestionnaire')->nom }}</p>
			</a>
		</nav>
		<!-- NAVBAR -->
	</section>
    <main>
        <div class="notifications-container">
            <div class="alert">
              <div class="flex">
                <div class="flex-shrink-0">
                  <svg aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 alert-svg">
                    <path clip-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" fill-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="alert-prompt-wrap">
                  <p class="text-sm text-yellow-700">
                    veuillez d'abord compléter votre profil et attendre la confirmation de l'administrateur 
                    <a class="alert-prompt-link" href="#">Compléter Mon Profil</a>
                  </p>
              </div>
            </div>
            </div>
          </div>
    </main>
    		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</body>
</html>