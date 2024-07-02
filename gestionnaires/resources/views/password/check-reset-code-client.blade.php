<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .input-group {
  display: flex;
  align-items: center;
}

.input {
  min-height: 50px;
  max-width: 150px;
  padding: 0 1rem;
  color: #222;
  font-size: 15px;
  border: 1px solid #5e4dcd;
  border-radius: 6px 0 0 6px;
  background-color: transparent;
}

.button--submit {
  min-height: 50px;
  padding: .5em 1em;
  border: none;
  border-radius: 0 6px 6px 0;
  background-color: #5e4dcd;
  color: #fff;
  font-size: 15px;
  cursor: pointer;
  transition: background-color .3s ease-in-out;
}

.button--submit:hover {
  background-color: #5e5dcd;
}

.input:focus, .input:focus-visible {
  border-color: #3898EC;
  outline: none;
}

.message {
    color: green;
    font-family: cursive;
    margin: 5px;
}

</style>
<body>

    <form action="{{ route('verify.code') }}" method="POST">
        @csrf
        <div class="message">code de vérification envoyé à votre e-mail avec succès !</div>
        <div class="input-group">
            <input type="text" class="input" id="code" name="code" placeholder="example GX-123" autocomplete="off" required>
            <input class="button--submit" value="Verify Code" type="submit">
        </div>
    </form>  
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif  
</body>
</html>