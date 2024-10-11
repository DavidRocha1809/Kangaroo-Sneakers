<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['Email'])) {
    header("Location: ./Inicio_de_sesion/Inicio.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <link rel="stylesheet" href="StylePago.css">
    <link rel="icon" href="../ico/logo.ico">
</head>

<body>

<!--  Modo oscuro  -->
<script src="./Oscuro.js"></script>

<div class="contenedor">
        <form id="subscribe-form" action="subscribe.php" method="post">
            <div class="fila">
                
                <!--COLUMNA 1-->
                <div class="columna">
                    <h3 class="titulo"> Datos </h3>
                    <div class="input-box">
                        <span>Nombre Completo: </span>
                        <input type="text" placeholder="Nombre...">
                    </div>
                    <div class="input-box">
                        <span>Email: </span>
                        <input type="email" name="email" placeholder="ejemplo@ejemplo.com">
                    </div>
                    <div class="input-box">
                        <span>Dirección: </span>
                        <input type="text" placeholder="Calle - Colonia...">
                    </div>
                    <div class="input-box">
                        <span>Ciudad: </span>
                        <input type="text" placeholder="Ciudad...">
                    </div>

                    <!--subcolumna 1-->
                    <div class="flex">
                        <div class="input-box">
                            <span>País: </span>
                            <input type="text" placeholder="País">
                        </div>
                        <div class="input-box">
                            <span>Zip code: </span>
                            <input type="number" placeholder="123 456...">
                        </div>
                    </div>
                    
                </div>

                <!--COLUMNA 2-->
                <div class="columna">
                    <h3 class="titulo"> Pago </h3>
                    <div class="input-box">
                        <span>Tarjetas aceptadas: </span>
                        <img src="tarjetas.png" alt="Tarjetas">
                    </div>
                    <div class="input-box">
                        <span>Nombre de la tarjeta: </span>
                        <input type="text" placeholder="Nombre...">
                    </div>
                    <div class="input-box">
                        <span>Número tarjeta de crédito: </span>
                        <input type="number" placeholder="XXXX XXXX XXXX XXXX">
                    </div>
                    <div class="input-box">
                        <span>Mes de expiración: </span>
                        <input type="text" placeholder="Mes">
                    </div>

                    <!--subcolumna 2-->
                    <div class="flex">
                        <div class="input-box">
                            <span>Año expiración: </span>
                            <input type="number" placeholder="2025">
                        </div>
                        <div class="input-box">
                            <span>CVV: </span>
                            <input type="number" placeholder="123">
                        </div>
                    </div>

                </div>

            </div>

            <button type="submit" class="btn" onclick="pago"> <b>Aceptar</b> </button>

            <!--PARA IMPRIMIR UN MENSAJE AL PAGAR-->
            <script>
                function pago(){
                    alert("Pago exitoso, Gracias por comprar con nosotros:)")
                }
            </script>

        </form>
    </div>


</body>
</html>
