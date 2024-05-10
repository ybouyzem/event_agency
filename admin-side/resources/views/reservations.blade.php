<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservations</title>
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
                <h1>Reservations</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Reservations</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Reservation recents</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>services</th>
                            <th>promotion</th>
                            <th>pack</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    </main>
    <script src="script.js"></script>
</body>
</html>