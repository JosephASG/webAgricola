<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ url('multimedia/wallpapers/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1.png') }}"/>
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
  </head>
  <body>

    <div class="user-box">

      <img src="{{ asset('multimedia/wallpapers/logoPW.png') }}" class="avatar" alt="Avatar Image">
      <img src="{{ asset('multimedia/wallpapers/PW.png') }}" class="avatar2" alt="">
      <h1>Registro de usuario</h1>
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <!-- USERNAME INPUT -->
        <label for="username" >Nombre de usuario</label>
        <input type="text" id="name" name="name" placeholder="Ingrese su nombre">
        <label for="username">Correo electronico</label>
        <input type="text"  id="email" name="email" placeholder="Ingrese su correo">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
        <label for="password">Confirmar contraseña</label>
        <input type="password"  id="password_confirmation" name="password_confirmation" placeholder="Confirme su contraseña">
        <input type="submit" value="Registrarse">
        <a href="{{ route('login') }}">Ya registrado?</a>
      </form>
    </div>
  </body>
</html>

