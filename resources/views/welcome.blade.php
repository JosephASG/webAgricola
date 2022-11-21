<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1-64x33.png') }}" />
    <title>PROWESS AGRONOMIA</title>
    <script src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/cd33816f91.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ url('css/carrusel.css') }}">
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
    <link rel="stylesheet" href="{{ url('css/mainstyles.css') }}">
</head>
<body>
    <!--VENTANA MODAL-->
    <div class="pop-up">
        <div class="pop-up-wrap">
            <div class="subcription">
                <i class="far fa-times-circle" id="close"></i>
                <div class="sub-content">
                    <img src="{{ asset('multimedia/wallpapers/bienvenida2.gif') }}" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
    <!-- FIN VENTANA MODAL -->
    <!-- LOGO - BARRA DE NAVEGACION - BUSCADOR-->
    <div class="logoP">
        <img src="{{ asset('multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1.png') }}" width="20%" height="10%">
    </div>
    <div class="men">
        <ul class="menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Marketplace</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Contactonos</a></li>
            <li><a href="#">Mi Cuenta</a></li>
            <li><a href="#">Ingresar</a></li>{{-- {{ route('login') }} --}}
            <li><a href="{{ route('register') }}">Registrarse</a></li>
            <li><a href="#"><img src="{{ asset('multimedia/iconos/carrito.png') }}" width="30" height="30"></a></li>
        </ul>
    </div>

    <div class="containerS">
        <input type="text" placeholder="Buscar">
        <div class="btn">
            <i class="fa fa-search"></i>
        </div>
    </div>

    <!-- FIN LOGO - BARRA DE NAVEGACION - BUSCADOR -->

    <!--CATEGORIAS-->
    <!--INICIO PRODUCTOS-->
    <div class="productos">
        <!---INICIO PRODUCTO-->
        <div class="producto">
            <div class="producto-blanco">
                <img src="{{ asset('multimedia/productos/COAATDZBOREGXDG6WITTRXVASQ-299x299.jpg') }}" width="300" height="300">
            </div>
            <button class="categoria" onclick="window.location.href='nosotros.html'">FRUTAS</button>

        </div>
        <!---INICIO PRODUCTO-->
        <div class="producto">
            <img src="{{ asset('multimedia/productos/alimentos-que-engordan-el-abdomen-y-cintura-brocoli-300x300.jpg') }}"
                width="300" height="300">
            <button class="categoria" onclick="window.location.href='nosotros.html'">VEGETALES</button>
        </div>
        <!---INICIO PRODUCTO-->
        <div class="producto">
            <img src="{{ asset('multimedia/productos/Captura-de-pantalla-2021-10-28-001057.png') }}" width="300" height="300">
            <button class="categoria" onclick="window.location.href='nosotros.html'">CARNE</button>
        </div>
        <!---INICIO PRODUCTO-->
        <div class="producto">
            <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}" width="300" height="300">
            <button class="categoria" onclick="window.location.href='nosotros.html'">LACTEOS</button>
        </div>
    </div>
    <!--FIN CATEGORIAS-->
    <!--PRODUCTOS POPULARES-->
    <fieldset class="bord">
        <legend class="legend">PRODUCTOS POPULARES</legend>
        <br>
        <div class="populares">
            <div class="productoPopu">
                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}" width="300" height="300">
                <button class="add">AÑADIR AL CARRITO</button>
            </div>

            <div class="productoPopu">
                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}" width="300" height="300">
                <button class="add">AÑADIR AL CARRITO</button>
            </div>


            <div class="productoPopu">
                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}" width="300" height="300">
                <button class="add">AÑADIR AL CARRITO</button>
            </div>


            <div class="productoPopu">
                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}" width="300" height="300">
                <button class="add">AÑADIR AL CARRITO</button>
            </div>


            <div class="productoPopu">
                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}" width="300" height="300">
                <button class="add">AÑADIR AL CARRITO</button>
            </div>

            <div class="productoPopu">
                <img src="{{ asset('multimedia/productos/productos-lacteos-300x320.jpg') }}" width="300" height="300">
                <button class="add">AÑADIR AL CARRITO</button>
            </div>
        </div>
    </fieldset>
    <br>
    <!--FIN PRODUCTOS POPULARES-->

    <!--CARRUSEL DE IMAGENES-->
    <br><br><br><br><br>
    <div class="row">
        <div id="content" class="col-lg-12">
            <div id="carrusel">
                <a href="#" class="left-arrow"><img src="{{ asset('multimedia/iconos/flecha left.png') }}" width="40"
                        height="40" /></a>
                <a href="#" class="right-arrow"><img src="{{ asset('multimedia/iconos/flecha rigth.png') }}" width="40"
                        height="40" /></a>
                <div class="carrusel">
                    <div class="product" id="product_0">
                        <img src="{{ asset('multimedia/productos/Mandarinas-1140x703-1-400x400.jpg') }}" width="150"
                            height="150" />
                        <button class="add">AÑADIR AL CARRITO</button>
                    </div>
                    <div class="product" id="product_1">
                        <img src="{{ asset('multimedia/productos/Mandarinas-1140x703-1-400x400.jpg') }}" width="150"
                            height="150" />
                        <button class="add">AÑADIR AL CARRITO</button>
                    </div>
                    <div class="product" id="product_2">
                        <img src="{{ asset('multimedia/productos/Mandarinas-1140x703-1-400x400.jpg') }}" width="150"
                            height="150" />
                        <button class="add">AÑADIR AL CARRITO</button>
                    </div>
                    <div class="product" id="product_3">
                        <img src="{{ asset('multimedia/productos/Mandarinas-1140x703-1-400x400.jpg') }}" width="150"
                            height="150" />
                        <button class="add">AÑADIR AL CARRITO</button>
                    </div>
                    <div class="product" id="product_4">
                        <img src="{{ asset('multimedia/productos/Mandarinas-1140x703-1-400x400.jpg') }}" width="150"
                            height="150" />
                        <button class="add">AÑADIR AL CARRITO</button>
                    </div>
                    <div class="product" id="product_5">
                        <img src="{{ asset('multimedia/productos/Mandarinas-1140x703-1-400x400.jpg') }}" width="150"
                            height="150" />
                        <button class="add">AÑADIR AL CARRITO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FIN CARRUSEL DE IMAGENES-->






    <!-- APARTADOS ESPE -->
    <div class="espe-apartado">
        <a href="https://www.espe.edu.ec" target="_blank"><img src="{{ asset('multimedia/wallpapers/espe.jpg') }}" alt=""
                width="1400" height="500"></a>
    </div>
    <br><br><br><br><br><br><br>
    <div class="espe-apartado-THEWUR">
        <a href="https://www.topuniversities.com/universities/universidad-de-las-fuerzas-armadas-espe-ex-escuela-politecnica-del-ejercito"
            target="_blank"><img src="{{ asset('multimedia/wallpapers/THEWUR.png') }}" alt="" width="200"
                height="200" class="imgespe"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.espe.edu.ec"
            target="_blank"><img src="{{ asset('multimedia/wallpapers/logo-espe.jpg') }}" alt="" width="200"
                height="200" class="imgespe"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://deceac.espe.edu.ec"
            target="_blank"><img src="{{ asset('multimedia/wallpapers/DCEA.jpg') }}" alt="" width="200" height="200"
                class="imgespe"></a>
    </div>
    <!-- FIN APARTADOS ESPE -->






    <!-- FOOTER - PIE DE PAGINA -->
    <div class="container-footer">

        <footer>
            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-tiktok icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>
            <div class="columF">
                <div class="paginas">
                    <p>PAGINAS</p>
                    <hr>
                    <br>
                    <i>Inicio</i><br><br>
                    <i>Equipo</i><br><br>
                    <i>Nosotros</i><br><br>
                    <i>Productos</i><br><br>
                    <i>Terminos y condiciones</i>
                </div>

                <div class="Nuestros-productos">
                    <p>NUESTROS PRODUCTOS</p>
                    <hr>
                    <br>
                    <i>Frutas</i><br><br>
                    <i>Vegetales</i><br><br>
                    <i>Lacteos</i><br><br>
                    <i>Carnes</i>
                </div>

                <div class="contactos">
                    <p>CONTACTOS</p>
                    <hr>
                    <br>
                    <a href="#"><i class="fab fa-whatsapp icon-redes-footer"></i></a>
                    <br>
                    <a href="#"><i class="fab fa-google icon-redes-footer"></i></a>
                    <br>
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                </div>
            </div>

            <h4>© 2022 Prowess Agronomia - Todos los Derechos Reservados</h4>

        </footer>

    </div>

    </div>


    <script src="{{ url('js/script.js') }}"></script>

</body>

</html>
