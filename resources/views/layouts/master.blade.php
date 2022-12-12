<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>A N D R O M E D A</title>
        <!--Con Google Fonts:-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;900&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="img/marca/logo-sencillo.png">
        <link rel="stylesheet" href="assets/vista-andromeda.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        @include('partials.menu')
        <header id="menu">
                <ul id="izquierda_navegacion">
                    <li><a href="index.html"><img id="logo" src="img/marca/logo.png"></a></li>
                    <li><input id="campo" type="text"></li>
                    <li><img id="lupa" src="img/icons/lupa_navegacion.png"></li>
                </ul>
                <ul class="topnav" id="derecha_navegacion">
                    <li><a href="index.html">Ofertas</a></li>
                    <li><a href="#nuestros-packs">Kit Digital</a></li>
                    <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                </ul>
        </header>
        @yield('content')
        <footer class="parallax">
            <div id="titulo-andromeda">
                <a href="#cabecera"><img src="img/marca/titulo.png"></a>
            </div>
            <div class="container peque">
                <p id="correo">info.proyectoandromeda@gmail.com</p>
                <p id="copyright">&copy; Copyright 2021 Andromeda</p>
            </div>
        </footer>
        <script>
            function myFunction() {
                var x = document.getElementById("derecha_navegacion");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
        </script>
    </body>
</html>
