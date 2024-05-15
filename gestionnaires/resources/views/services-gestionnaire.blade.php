<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
        	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    {{-- NAVBAR AND SIDEBAR --}}
	<x-navside-bar/>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Services</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Accueil</a>
                    </li>
                </ul>
            </div>
        </div>
        <x-services-table :categories="$categories" :services="$services" />
    </main>
    <script src="script.js"></script>
    <script>(function(w, d) { w.CollectId = "663e3d251063215eaa11d59b"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>	<script src="script.js"></script>
</body>
</html>