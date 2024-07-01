<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    {{-- <link rel="stylesheet" href="{{ asset('signin-client.css') }}" /> --}}

    <!-- favorite icon -->
    <link rel="icon" type="img/logo" href="{{ asset('img/logo.png') }}" />

  </head>
  <body>
    <form method="POST" action="{{ route('password.reset.send') }}">
      @csrf
      <label for="email">Adresse email</label>
      <input id="email" type="email" name="email" required>
      <button type="submit">Send Reset Code</button>
  </form>
  
  @if ($errors->any())
      <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      </div>
  @endif
  
  @if (session('status'))
      <p>{{ session('status') }}</p>
  @endif
  
  </body>
</html>