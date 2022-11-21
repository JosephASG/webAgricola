<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prowess Agronomia</title>
    <link rel="shortcut icon" href="{{ asset('multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1-64x33.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!---VENTANA MODAL-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/cd33816f91.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">


    <!---FIN VENTANA MODAL-->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        var current = 0;
        var imagenes = new Array();

        $(document).ready(function() {
            var numImages = 6;
            if (numImages <= 3) {
                $('.right-arrow').css('display', 'none');
                $('.left-arrow').css('display', 'none');
            }

            $('.left-arrow').on('click', function() {
                if (current > 0) {
                    current = current - 1;
                } else {
                    current = numImages - 3;
                }

                $(".carrusel").animate({
                    "left": -($('#product_' + current).position().left)
                }, 600);

                return false;
            });

            $('.left-arrow').on('hover', function() {
                $(this).css('opacity', '0.5');
            }, function() {
                $(this).css('opacity', '1');
            });

            $('.right-arrow').on('hover', function() {
                $(this).css('opacity', '0.5');
            }, function() {
                $(this).css('opacity', '1');
            });

            $('.right-arrow').on('click', function() {
                if (numImages > current + 3) {
                    current = current + 1;
                } else {
                    current = 0;
                }

                $(".carrusel").animate({
                    "left": -($('#product_' + current).position().left)
                }, 600);

                return false;
            });
        });
    </script>

</head>

<body>
    <div class="img-fondo">
        <div class="velo-negro">
            <!-------------------------------------------------->
            <!--ESTE ES LA CABECERA DE NUESTRO DOCUMENTO INDEX-->
            <header class="header">
                <a href="/index.html">
                    <img src="{{ asset('multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1.png') }}"
                        alt="logo" class="logo-img">
                </a>
                <br>
            </header>
            <!---FIN DEL HEADER-->
            <!--ESTE ES EL INICIO DEL CONTENIDO PRINCIPAL-->
            <main class="contenedor">
                <div class="navbar">
                    <ul>
                        <li><a href="nosotros.html">INICIO</a></li>
                        <li> <a href="nosotros.html">MARKETPLACE</a></li>
                        <li> <a href="nosotros.html">NOSOTROS</a></li>
                        <li> <a href="nosotros.html">AYUDA</a></li>
                        <li> <a href="nosotros.html">CONTACTANOS</a></li>
                        <li> <a href="nosotros.html">MI CUENTA</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else
                                <li><a href="#">{{-- {{ route('login') }} --}}
                                        INGRESAR
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">
                                            REGISTRARME
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                        <li>
                            <div id="carrito"><img src="{{ asset('multimedia/iconos/carrito.png') }}" width="40"
                                    height="40">
                            </div>
                        </li>
                    </ul>
                </div>
                <!--BARRA DE BUSQUEDA-->
                {{-- <div>
                        <form action="">
                            <input type="search" required>
                            <i class="fa fa-search"><br><br>Buscar</i>
                        </form>
                    </div> --}}
                <!--FIN BARRA DE BUSQUEDA-->
                <!--INICIO PRODUCTOS-->
                <div class="productos">
                    <!---INICIO PRODUCTO-->
                    <div class="producto">
                        <div class="producto-blanco">
                            <img src="{{ asset('multimedia/productos/COAATDZBOREGXDG6WITTRXVASQ-299x299.jpg') }}">
                        </div>
                        <div class="producto-informacion">
                            <button class="categoria" onclick="window.location.href='nosotros.html'">FRUTAS</button>
                            <hr>
                            <p class="producto-nombre">EJEMPLO DE PRODUCTO POR CATEGORIA 1</p>
                        </div>
                    </div>
                    <!---INICIO PRODUCTO-->
                    <div class="producto">
                        <div class="producto-blanco">
                            <img
                                src="{{ asset('multimedia/productos/alimentos-que-engordan-el-abdomen-y-cintura-brocoli-300x300.jpg') }}">
                        </div>
                        <div class="producto-informacion">
                            <button class="categoria" onclick="window.location.href='nosotros.html'">VEGETALES</button>
                            <hr>
                            <p class="producto-nombre">EJEMPLO DE PRODUCTO POR CATEGORIA 2</p>
                        </div>
                    </div>
                    <!---INICIO PRODUCTO-->
                    <div class="producto">
                        <div class="producto-blanco">
                            <img src="{{ asset('multimedia/productos/Captura-de-pantalla-2021-10-28-001057.png') }}">
                        </div>
                        <div class="producto-informacion">
                            <button class="categoria" onclick="window.location.href='nosotros.html'">CARNE</button>
                            <hr>
                            <p class="producto-nombre">EJEMPLO DE PRODUCTO POR CATEGORIA 3</p>
                        </div>
                    </div>
                    <!---INICIO PRODUCTO-->
                    <div class="producto">
                        <div class="producto-blanco">
                            <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}">
                        </div>
                        <div class="producto-informacion">
                            <button class="categoria" onclick="window.location.href='nosotros.html'">LACTEOS</button>
                            <hr>
                            <p class="producto-nombre">EJEMPLO DE PRODUCTO POR CATEGORIA 4</p>
                        </div>
                    </div>
                </div>
                <fieldset class="bord">
                    <legend class="legend">PRODUCTOS POPULARES</legend>
                    <div class="populares">
                        <!--CONTENIDO DE PRODUCTOS POPULARES-->
                        <!---INICIO PRODUCTOS POPULARES-->
                        <div class="productoPopu">
                            <div class="producto-P">
                                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}">
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                        <!---INICIO PRODUCTOS POPULARES-->
                        <div class="productoPopu">
                            <div class="producto-P">
                                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}">
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                        <!---INICIO PRODUCTOS POPULARES-->
                        <div class="productoPopu">
                            <div class="producto-P">
                                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}">
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                        <!---INICIO PRODUCTOS POPULARES-->
                        <div class="productoPopu">
                            <div class="producto-P">
                                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}">
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                        <!---INICIO PRODUCTOS POPULARES-->
                        <div class="productoPopu">
                            <div class="producto-P">
                                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}">
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                        <!---INICIO PRODUCTOS POPULARES-->
                        <div class="productoPopu">
                            <div class="producto-P">
                                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}">
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                    <!--FIN DE PRODUCTOS POPULARES-->
                </fieldset>
                <br>
                <div class="lineC">
                    <!--CARRUSEL-->
                    <div id="carrusel">
                        <a href="#" class="left-arrow"><img src="multimedia/iconos/flecha left.png" /></a>
                        <a href="#" class="right-arrow"><img src="multimedia/iconos/flecha rigth.png" /></a>
                        <div class="carrusel">
                            <div class="product" id="product_0">
                                <img src="multimedia/productos/alimentos-fresas-3-1280x720-1-300x300.jpg"
                                    width="100" height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                            <div class="product" id="product_5">
                                <img src="multimedia/productos/imagen_2021-10-11_172425-150x150.png" width="195"
                                    height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                            <div class="product" id="product_1">
                                <img src="multimedia/productos/alimentos-que-engordan-el-abdomen-y-cintura-brocoli-unsmushed.jpg"
                                    width="195" height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                            <div class="product" id="product_2">
                                <img src="multimedia/productos/Captura-de-pantalla-2021-10-28-001057-unsmushed.png"
                                    width="195" height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                            <div class="product" id="product_5">
                                <img src="multimedia/productos/imagen_2021-10-11_172425-150x150.png" width="195"
                                    height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                            <div class="product" id="product_3">
                                <img src="multimedia/productos/carne-de-pollo-400x300.jpg" width="195"
                                    height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                            <div class="product" id="product_4">
                                <img src="multimedia/productos/frutas-y-verduras-principal-300x300.jpg" width="195"
                                    height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                            <div class="product" id="product_5">
                                <img src="multimedia/productos/imagen_2021-10-11_172425-150x150.png" width="195"
                                    height="100" />
                                <button class="add">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIN CARRUSEL-->
                <br>
            </main>
        </div>
    </div>
    <footer class="footer">
        <div class="columF">
            <div>
                <p>PAGINAS</p>
                <hr>
                <a>Inicio</a><br>
                <a>Equipo</a><br>
                <a>Nosotros</a><br>
                <a>Productos</a><br>
                <a>Terminos y condiciones</a>
            </div>
            <div>
                <p>NUESTROS PRODUCTOS</p>
                <hr>
                <a>Frutas</a><br>
                <a>Vegetales</a><br>
                <a>Lacteos</a><br>
                <a>Carnes</a>
            </div>
            <div>
                <p>CONTACTOS</p>
                <hr>
                <img src="{{ asset('multimedia/iconos/whatsapp.png') }}" class="contac"><br>
                <img src="{{ asset('multimedia/iconos/correo.png') }}" class="contac"><br>
                <img src="{{ asset('multimedia/iconos/5a4525cd546ddca7e1fcbc84.png') }}" class="contac"><br>
            </div>
            <div>
                <p>REDES SOCIALES</p>
                <hr>
                <img src="{{ asset('multimedia/iconos/tiktok.png') }}" class="contac"><br>
                <img src="{{ asset('multimedia/iconos/facebook.png') }}" class="contac"><br>
                <img src="{{ asset('multimedia/iconos/instagram.png') }}" class="contac"><br>
            </div>
        </div>
        <p>Copyright© 2022-Todos los derechos reservados PROWESS AGRONOMIA</p>
    </footer>
</body>

</html>
