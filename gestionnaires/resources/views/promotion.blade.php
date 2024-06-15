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
<<<<<<< HEAD
        <form id="promotionForm" action="">
=======
        <form action="{{ route('add.promotion') }}" method="POST" id="promotionForm">
            @csrf
>>>>>>> c6fde80b518bb43d7a7ab8b004918fb0dd8256d3
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Ajouter une promotion</h3>

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
<<<<<<< HEAD
                                        <td id="ancienPrix">{{session('gestionnaire')->prix}} dh</td>
                                        <td><input type="number" id="nouveauPrix" required></td>
                                        <td><input type="date" id="dateFin" required></td>
                                        <td>
                                            <button class="modifer-button" type="button" onclick="handleModifierClick()"><i class='bx bxs-edit'></i> Enregister</button>
                                            <button class="supprimer-button" type="button"><i class='bx bx-message-square-x'></i> supprimer</button>
=======
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
>>>>>>> c6fde80b518bb43d7a7ab8b004918fb0dd8256d3
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

<script>
function handleModifierClick() {
            if (validatePromotionForm()) {
                // alert('La promotion a été ajoutée avec succès!');
                document.getElementById('promotionForm').submit(); // Submit the form if validation passes
            }
        }

        function validatePromotionForm() {
            const ancienPrix = parseFloat(document.getElementById('ancienPrix').innerText);
            const nouveauPrix = parseFloat(document.getElementById('nouveauPrix').value);
            const dateFin = new Date(document.getElementById('dateFin').value);
            const today = new Date();

            if (nouveauPrix >= ancienPrix) {
                alert('Le nouveau prix doit être inférieur à l\'ancien prix.');
                return false;
            }

            if (dateFin <= today) {
                alert('La date de fin doit être ultérieure à aujourd\'hui.');
                return false;
            }

            return true; // Return true if both validations pass
        }
</script>
</body>
</html>