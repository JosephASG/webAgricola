
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sesión - PROWESS AGRONOMIA</title>
        <link rel="shortcut icon" href="{{ url('css/multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1-64x33.png')}}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        <script src="https://kit.fontawesome.com/cd33816f91.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style-login-register.css">
    </head>

    <body background="multimedia/logos/loginAndRegisterBack.jpg">
            <main>
                <div class="contenedor__todo">
                    <div class="contenedor__login-register">
                        <form action="{{ route('register') }}" class="formulario__login" method="POST">
                            @csrf
                            <img src= "multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1.png"></img>
                            <h2>Registro de nuevo usuario</h2>
                            <input type="text" id="name" name="name" class="icono-placerholder" placeholder=" Nombre">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            <input type="text" id="email" name="email" class="icono-placerholder" placeholder=" Correo Electronico">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            <input type="password" id="password" name="password" placeholder="🔒Contraseña">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="🔒Confirmar Contraseña">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            <button class="btn-IS" type="submit">Registrarse</button>
                            <button class="btn-IS" onclick="{{ route('login') }}">Ya registrado?</button>
                        </form>
                    </div>
                </div>
            </main>
    </body>
</html>
