<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Welcomeatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1-64x33.png') }}" />
    <title>Prowess | Agrícola</title>
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
    <!-- <div class="pop-up">
        <div class="pop-up-wrap">
            <div class="subcription">
                <i class="far fa-times-circle" id="close"></i>
                <div class="sub-content">
                    <img src="{{ asset('multimedia/wallpapers/bienvenida2.gif') }}" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div> -->
    <!-- FIN VENTANA MODAL -->

    <!-- Header -->
        @include('Welcome.header')
    <!-- Fin Header -->

    <!-- Landing page -->
        @include('Welcome.hero')
    <!-- FIN Landing page -->

    <!--CATEGORIAS-->
        @include('Welcome.category')
    <!--FIN CATEGORIAS-->

    <!--INICIO PRODUCTOS POPULARES -->
        @include('Welcome.product')
    <!--FIN PRODUCTOS POPULARES-->

    <!--CARRUSEL DE IMAGENES-->
    <!-- <div class="row">
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
    </div> -->

    <!--FIN CARRUSEL DE IMAGENES-->

    <!-- APARTADOS ESPE -->
        @include('Welcome.colaboradores')
    <!-- FIN APARTADOS ESPE -->

    <!-- FOOTER - PIE DE PAGINA -->
        @include('Welcome.footer')
    <!-- FIN FOOTER - FIN PIE DE PAGINA -->

    </div>


    <script src="{{ url('js/script.js') }}"></script>
    <script src="{{ url('js/bootstrap.js') }}"></script>

        <script src="{{ url('js/smooth-scroll.js') }}" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <script>
            var ww = window.innerWidth;
            var wh = window.innerHeight;
            if (ww < 968) {
                var device = "mobile";
            } else {
                var device = "desktop";
            }
            if (device === "desktop") {
                let scene = document.querySelectorAll('#parallax');

                scene.forEach((parallax, i) => {
                    var parallaxInstance = new Parallax(parallax);
                });
            }
        </script>
</body>

</html>
