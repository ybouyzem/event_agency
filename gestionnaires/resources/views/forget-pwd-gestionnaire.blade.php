<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hadat</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      border: 1px solid #999;
      border-radius: 5px;
      padding: 10px;
      margin-top:300px;
      width:300px;
    }
  </style>
  <body>
    {{-- <form >
      @csrf
      <label for="email">Adresse email</label>
      <input id="email" type="email" name="email" required>
      <button type="submit">Send Reset Code</button>
  </form> --}}

  <form method="POST" action="{{ route('password.reset.send.gest') }}">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Adresse email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">veuillez saisir votre adresse email </div>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer code de réinitialisation</button>
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
  </form>
  
 
  
  </body>
</html>