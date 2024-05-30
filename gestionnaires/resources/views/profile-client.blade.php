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
  <body>
    <x-header-client/>
    <a href="{{route('logout')}}" style="font-size: 30px;position: absolute; top:300px">log out</a>
  </body>
</html>