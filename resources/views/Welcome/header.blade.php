 <header class="header">
            <div class="logoP">
                <img src="{{ asset('multimedia/logos/cropped-cropped-PROWESS-AGRONOMIA@4x-1-1.png') }}">
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
                    <li><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li>
                </ul>
            </div>
            <div class="containerS">
                <input type="text" placeholder="Buscar">
                <div class="btn">
                    <i class="fa fa-search"></i>
            </div>
        </div>
    </header>
