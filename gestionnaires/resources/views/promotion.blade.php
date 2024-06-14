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
        <form action="{{ route('add.promotion') }}" method="POST" id="promotionForm">
            @csrf
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
                                        <td id="ancienPrix">{{session('gestionnaire')->prix}}</td>
                                        @if ($promotion)
                                            <td><input type="number" id="nouveauPrix" placeholder="nouveau prix" name="newPrice" required value="{{$promotion->reduction}}"></td>
                                            <td><input type="date" id="dateFin" placeholder="date fin" name="dateFin" required value="{{$promotion->date_fin}}"></td>
                                        @else
                                            <td><input type="number" id="nouveauPrix" placeholder="nouveau prix" name="newPrice" required></td>
                                            <td><input type="date" id="dateFin" placeholder="date fin" name="dateFin" required></td>
                                        @endif
                                        <td>
                                            <button class="modifer-button"  onclick="handleModifierClick()"><i class='bx bxs-edit'></i> modifier</button>
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

<script>
    function handleModifierClick() {
        if (validatePromotionForm()) {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Votre promotion ajoutée avec succès !",
                showConfirmButton: false,
                timer: 1500
            });
        }
    }

    function validatePromotionForm() {
        const ancienPrix = parseFloat(document.getElementById('ancienPrix').innerText);
        const nouveauPrix = parseFloat(document.getElementById('nouveauPrix').value);
        const dateFin = new Date(document.getElementById('dateFin').value);
        const today = new Date();

        console.log(ancienPrix);
        console.log(nouveauPrix);
        console.log(dateFin);

        if (nouveauPrix >= ancienPrix || nouveauPrix == "NaN") {
            console.log("yes1");
            Swal.fire({
                title: "Oups?",
                text: "Le nouveau prix doit être inférieur à l\'ancien prix.",
                icon: "question"
            });
            return false;
        }

        if (dateFin <= today || dateFin == "Invalid Date") {
            console.log("yes2");
            Swal.fire({
                title: "Oups?",
                text: "La date de fin doit être ultérieure à aujourd\'hui.",
                icon: "question"
            });
            return false;
        }

        return true; // Return true if both validations pass
    }
</script>
<script>(function(w, d) { w.CollectId = "663e3d251063215eaa11d59b"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>	<script src="script.js"></script>
</body>
</html>