<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <title>resetpwd</title>
</head>
<style>
  body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items:center;
  }

  form {
    padding: 10px;
    border: 1.5px solid #eee;
    border-radius: 10px;
  }

  form div{
    width:270px;
  }
</style>
<body>


  @if ($errors->any())
      <div>
          @foreach ($errors->all() as $error)
              <p style="color: red;">{{ $error }}</p>
          @endforeach
      </div>
  @endif

  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  <form method="POST" action="{{ route('reset.pwd.gest.submit') }}">
    @csrf
    <div id="emailHelp" class="form-text">Entrez votre nouveau mot de passe.</div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
    </div>
    <div class="mb-3">
        <label for="confirmPwd" class="form-label">Confirmez le mot de passe</label>
        <input type="password" class="form-control" id="confirmPwd" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</body>
</html>