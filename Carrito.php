<?php

    session_start();
    $carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : array();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_Car.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Carrito de compras</title>

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
            <li><a href="./index.html">Inicio</a></li>
            <li><a href="./Footer/Sobre_nosotros.html">Sobre nosotros</a></li>
            <li><a href="./Caballero/caballero.php">Hombre</a></li>
            <li><a href="./Caballero/mujer.php">Mujer</a></li>
            <li><a href="./Caballero/niño.php">Niño</a></li>
        </ul>

        <!--  Íconos  -->
        <div class="icons">
            <a href="./Inicio_de_sesion/Inicio.php"><i class="fa fa-user"></i></a> <!-- Perfil -->
            <a href="./Carrito.php"><i class="fa fa-shopping-cart"></i></a> <!-- Carrito -->
            <a href="./Wishlist.html"><i class="fa fa-heart"></i></a> <!-- Wish list -->
            
             
            <a href="#" id="theme-toggle"><i class="fa fa-moon"></i></a> <!-- Tema oscuro -->
        </div>

    </nav>

    <!--  Modo oscuro  -->
    <script src="Oscuro.js"></script>



    <!--  //////////////////////////// -CONTENIDO PRINCIPAL- ////////////////////////////  -->
    <div class="contenedor-carrito-real">   
        <div class="carrito">
            <h1>Carrito de Compras</h1>
            <p>Revisa y completa tu pedido.</p>
            <?php if (empty($_SESSION['carrito'])) { ?>
                <p>Tu carrito está vacío.</p>
            <?php } else { ?>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $subtotal = 0;
                        foreach ($_SESSION['carrito'] as $index => $item) {
                            $total_producto = $item['precio'] * $item['cantidad'];
                            $subtotal += $total_producto;
                    ?>
                    <tr>
                        <td><?php echo $item['nombre']; ?></td>
                        <td><?php echo $item['cantidad']; ?></td>
                        <td><?php echo '$' . number_format($total_producto, 2); ?></td>
                        <td>
                            <form method="post" action="eliminar_Carrito.php">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" class="eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="resumen">
                <h2>Resumen del Pedido</h2>
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td><?php echo '$' . number_format($subtotal, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Envío</td>
                        <td>Gratis</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><?php echo '$' . number_format($subtotal, 2); ?></td>
                    </tr>
                </table>
            </div>
            <div class="pagar">
                <form method="post" action="verificar_sesion.php">
                    <button type="submit">Proceder al Checkout</button>
                </form>
            </div>
            <?php } ?>
        </div>
    </div>
    


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
                    <li><a href="./Ubicanos/Ubicanos.html">Buscar tienda</a></li>
                    <li><a href="./Footer/Hazte_Miembro.html">Hazte miembro</a></li>
                    <!--li><a href="./Footer/Contactanos.html">Envíanos tus comentarios</a></li-->
                </ul>
            </div>

            <!--  Columna 2  -->
            <div class="column-footer">
                <h3>Ayuda</h3>
                <ul>
                    <li><a href="./Footer/Contactanos.html">Atención al cliente</a></li>
                    <li><a href="./Footer/T_de_V.html">Envío y entrega</a></li>
                    
                    <li><a href="./Footer/Guia_de_tallas.html">Guía de tallas</a></li>
                    <li><a href="./Footer/Metodos de pago 2.0.html">Opciones de pago</a></li>
                    <li><a href="./Footer/P_de_Cookies.html">Aviso de cookies</a></li>
                    <li><a href="./Footer/FAQ.html">Preguntas frecuentes</a></li>
                </ul>
            </div>

            <!--  Columna 3  -->
            <div class="column-footer">
                <h3>Nosotros</h3>
                <ul>
                    <li><a href="./Footer/Sobre_nosotros.html">¿Quiénes somos?</a></li>
                    <li><a href="./Footer/Contactanos.html">Contacto</a></li>
                    <li><a href="./Footer/T_y_C_de_promoc.html">Términos y condiciones de promociones</a></li>
                    <li><a href="./Footer/T_de_U.html">Términos de uso</a></li>
                    <li><a href="./Footer/T_de_V.html">Términos de venta</a></li>
                    <li><a href="./Footer/A_de_Priv.html">Aviso de privacidad</a></li>
                    <li><a href="./Footer/T_y_Condiciones.html">Términos y condiciones</a></li>
                </ul>
            </div>
        </div>
    </footer>


</body>

</html>
