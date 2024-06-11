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


	<title>Promotions</title>
</head>
<body>
    <x-navside-bar/>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Promotions</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Promotions</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Index</a>
                    </li>
                </ul>
            </div>
        </div>
        <form action="">
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Ajouter une promotion</h3>
                        {{-- <i class='bx bx-search' ></i> --}}
                        {{-- <i class='bx bx-filter' ></i> --}}
                    </div>
                        <table class="table">
                            <thead>
                                <tr class="thead">
                                    <th>Ancien prix (dh)</th>
                                    <th>Nouveau prix (dh)</th>
                                    <th>Date fin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="items">
                                    <tr>
                                        <td>2000 dh</td>
                                        <td><input type="number"></td>
                                        <td><input type="date"></td>
                                        <td>
                                            <button class="modifer-button"><i class='bx bxs-edit'></i> modifier</button>
                                            <button class="supprimer-button"><i class='bx bx-message-square-x'></i> supprimer</button>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                </div>
        </form>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->
<script>(function(w, d) { w.CollectId = "663e3d251063215eaa11d59b"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>	<script src="script.js"></script>
</body>
</html>