<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ url('multimedia/wallpapers/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1.png') }}" />
    <title>Inicio de sesión Administrador</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>

<body>

    <div class="login-box">

        <img src="{{ asset('multimedia/wallpapers/logoPW.png') }}" class="avatar" alt="Avatar Image">
        <img src="{{ asset('multimedia/wallpapers/PW.png') }}" class="avatar2" alt="">
        <h1>Inicio de sesión Administrador</h1>

        <form method="POST" action="{{ url('admin/login') }}">
            @csrf
            <!-- USERNAME INPUT -->
            <label for="username">Correo</label>
            <input type="text" name="email" id="email" placeholder="Ingrese su correo">
            <!-- PASSWORD INPUT -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
            <input type="submit" value="Entrar">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu clave?') }}
                </a>
            @endif
        </form>
    </div>
</body>

</html>
