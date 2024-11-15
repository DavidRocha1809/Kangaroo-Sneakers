<?php
        session_start();

        //si en la sesión no se encontró un usuario activo, mandar mensade de error(NO PERMITIR VER LA PÁGINA)
        if(!isset($_SESSION['Email'])){
            echo '
                <script>
                    alert("Por favor, debes iniciar sesión")
                    window.location = "Inicio.php"
                </script>
            ';
            session_destroy();
            die();
        }
        /*
        if (isset($_SESSION['UserType']) && $_SESSION['UserType'] == 'admin') {
            echo 'Hello world';
        }*/
        //Extracción de tipo de usuario
        $UserType = $_SESSION['UserType'];
?>




<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Perfil</title>

</head>

<body>

    <!--  //////////////////////////// -NAVBAR- ////////////////////////////  -->
    <!--  Logo  -->
    <nav class="navbar">
        <div class="logo">
            <a href="./index.html"><img src="https://i.pinimg.com/736x/54/af/e2/54afe2b97cc10709be5bf11ad671ec76.jpg" alt="Kangaroo Sneakers Logo"></a>
        </div>
        
        <!--  Links  -->
        <ul class="nav-links">
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="../Footer/Sobre_nosotros.html">Sobre nosotros</a></li>
            <li><a href="../Caballero/caballero.php">Tienda</a></li>
            <li><a href="../Caballero/caballero.php">Ofertas</a></li>
            <li><a class="btn" href="../ArchivosPHP/cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>

        <!--  Íconos  -->
        <div class="icons">
            <a href="../Inicio_de_sesion/Registro.html"><i class="fa fa-user"></i></a> <!-- Perfil -->
            <a href="../Carrito.php"><i class="fa fa-shopping-cart"></i></a> <!-- Carrito -->
            <a href="../Wishlist.html"><i class="fa fa-heart"></i></a> <!-- Wish list -->
            <a href="../Idiomas_Region/Idiomas.html"><i class="fa fa-globe"></i></a> <!-- Idiomas -->
             
            <a href="#" id="theme-toggle"><i class="fa fa-moon"></i></a> <!-- Tema oscuro -->
        </div>

    </nav>

    <!--  Modo oscuro  -->
    <script src="../Oscuro.js"></script>

    <!--  Modo oscuro  -->
    <script src="../Oscuro.js"></script>


    <h1>HOLA PERFIL!</h1>


    <!--  //////////////////////////// -FOOTER- ////////////////////////////  -->
    <footer class="footer">
        <div class="container-footer">

            <!--  Sección redes sociales  -->
            <div class="socials">
                <a href="#"><i class="fa-brands fa-twitter"></i></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>

            <!--  Columna 1  -->
            <div class="column-footer">
                <h3>Recursos</h3>
                <ul>
                    <li><a href="#">Buscar tienda</a></li>
                    <li><a href="../Footer/Hazte_Miembro.html">Hazte miembro</a></li>
                    <li><a href="../Footer/Contactanos.html">Envíanos tus comentarios</a></li>
                </ul>
            </div>

            <!--  Columna 2  -->
            <div class="column-footer">
                <h3>Ayuda</h3>
                <ul>
                    <li><a href="../Footer/Contactanos.html">Atención al cliente</a></li>
                    <li><a href="../Footer/T_de_V.html">Envío y entrega</a></li>
                    
                    <li><a href="../Footer/Guia_de_tallas.html">Guía de tallas</a></li>
                    <li><a href="../Footer/Metodos de pago 2.0.html">Opciones de pago</a></li>
                    <li><a href="../Footer/P_de_Cookies.html">Aviso de cookies</a></li>
                    <li><a href="../Footer/FAQ.html">Preguntas frecuentes</a></li>
                </ul>
            </div>

            <!--  Columna 3  -->
            <div class="column-footer">
                <h3>Nosotros</h3>
                <ul>
                    <li><a href="../Footer/Sobre_nosotros.html">¿Quiénes somos?</a></li>
                    <li><a href="../Footer/Contactanos.html">Contacto</a></li>
                    <li><a href="../Footer/T_y_C_de_promoc.html">Términos y condiciones de promociones</a></li>
                    <li><a href="../Footer/T_de_U.html">Términos de uso</a></li>
                    <li><a href="../Footer/T_de_V.html">Términos de venta</a></li>
                    <li><a href="../Footer/A_de_Priv.html">Aviso de privacidad</a></li>
                    <li><a href="../Footer/T_y_Condiciones.html">Términos y condiciones</a></li>
                </ul>
            </div>
        </div>
    </footer>


</body>

</html>
