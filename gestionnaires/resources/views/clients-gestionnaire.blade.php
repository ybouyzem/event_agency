<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>clients</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    {{-- NAVBAR AND SIDEBAR --}}
    <x-navside-bar/>

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Clients</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Clients</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <x-clients-table :clients='$allClients'/>
    </main>
    <script src="script.js"></script>
    <script src="sort-filter-client.js"></script>
    <script src="search-input.js"></script>
    <script>(function(w, d) { w.CollectId = "663e3d251063215eaa11d59b"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>	<script src="script.js"></script>

</body>