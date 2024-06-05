<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="{{ asset('index-style.css') }}" />

    <!-- favorite icon -->
    <link rel="icon" type="img/logo" href="images/favicon.png" />

  </head>
  <style>
    .sidebar-client ul li:first-child
    {
          background-color: #23a5d518;
    }


    .sidebar-client ul li:first-child a
    {
      width: 100%;
      height: 100%;
      color: var(--theme-color);
      transition: 0.3s;
    }


    .profile-container .main-client table {
      margin-top: 20px;
      width: 600px;
      border-collapse: collapse;
      margin-left:10px;
    }

   

    .profile-container .main-client table tr th{
      text-align: left;
      font-size: 12px;
      color: #666;
      padding: 10px;
      border-bottom:1px solid #eee;
    }

    .profile-container .main-client table tr td:last-child {
      color: gray;
      font-weight: 500;
    }

    .profile-container .main-client table tr td input{
      color: #333;
      font-weight: 500;
      padding: 10px;
      font-size: 12px;
    }

    #modifierInfoBtn {
      cursor: pointer;
      visibility: hidden;
    }

    .profile-container .main-client  input[type="submit"]
    {
      margin-left: 20px;
      padding: 7px;
      background-color: rgb(7, 163, 225);
      border-radius: 5px;
      color:#fff;
      font-weight: 600;
    }

    .profile-container .main-client button {
      cursor: pointer;
      margin-left: 20px;
      margin-top: 15px;
      background-color: #ffffff00;
      color: rgb(0, 177, 248);
      border-bottom:1px solid rgb(0, 183, 255);
    }

    /* edit password form */
    #edit-pwd-form {
      visibility: hidden;
      display: flex;
      flex-direction: column;
    }
    #edit-pwd-form h2 {
      margin-top:15px;
      align-self: left;
      text-align: left;
      width: 100%;
    }
    #edit-pwd-form input[type="password"] {
      border: 1px solid #666;
      width: 200px;
      padding: 7px;
    }

    #edit-pwd-form input {
      cursor: pointer;
      width: 100px;
      margin: 10px 0px 10px 20px;
      border-radius: 7px;
      font-size: 14px;
      font-weight: 500;
    }
</style>
  <body>
    <x-header-client/>
    <section class="profile-container">
      <div class="sidebar-client">
        <ul>
          <li><a href="{{route('profileClient')}}">Mon Compte</a></li>
          <li><a href="">Historique des reservations </a></li>
          <li><a href="{{route('favorisClient')}}">Ma liste d'envie</a></li>
          <li><a href="{{route('logout')}}">Déconnexion</a></li>
        </ul>
      </div>
      <div class="main-client">
        <h2>Mes Informations</h2>
          <form action="{{ route('modifierClientInfo', session('client')->id) }}" method="post">
            @csrf
            <table>
              <tr class="table-header">
                <th>Nom Complet</th>
                <th>Ville</th>
                <th>Telephone</th>
                <th>Email</th>
                <th></th>
              </tr>
              <tr>
                <td><input name="nomComplet" type="text" value="{{session('client')->nomComplet}}" readonly class="client-data" required></td>
                <td><input name="ville" type="text" value="{{session('client')->ville}}" readonly class="client-data" required></td>
                <td><input name="telephone" type="number" value="0{{session('client')->telephone}}" readonly class="client-data" required></td>
                <td>{{session('client')->email}}</td>
                <td><input type="submit" value="modifier" class="client-data" id="modifierInfoBtn"></td>
              </tr>
            </table>
            <button onclick="showEditBtn()"><i class='bx bxs-edit-alt'></i>Modifier</button> <button onclick="showEditPwd()"><i class='bx bx-key' ></i></i>Modifier mot de passe</button>
          </form>
          <form action="" method="post" id="edit-pwd-form">
            <h2>changer votre mot de passe</h2>
            <input type="password" name="" id="" placeholder="ancien mot de passe" required>
            <input type="password" name="" id="" placeholder="nouveau mot de passe" required>
            <input type="submit" value="modifer" >
          </form>
      </div>
    </section>
    <x-footer/>
    <script>
      function showEditBtn()
      {
        event.preventDefault();
        // Select all input elements with the class 'client-data'
        let inputs = document.querySelectorAll('.client-data');

        // Loop through each input element
        inputs.forEach(input => {
            // Log the input element and its type to the console for debugging
            
            if (input.type == 'submit') {
                // Change the display style to block if the type is submit
                input.style.visibility = 'visible';
            } else {
                // Remove the readonly attribute if the type is not submit
                input.removeAttribute('readonly');
                input.style.color = "rgb(0, 183, 255)";
            }
        });
      }

      function showEditPwd(){
        event.preventDefault();
        let form = document.getElementById("edit-pwd-form");
        console.log(form);
        form.style.visibility = 'visible';
      }
    </script>
  </body>
</html>