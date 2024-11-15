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
        <form id="subscribe-form" action="subscribe.php" method="post" onsubmit="return pago()">
            <div class="fila">
                
                <!--COLUMNA 1-->
                <div class="columna">
                    <h3 class="titulo"> Datos </h3>
                    <div class="input-box">
                        <span>Nombre Completo: </span>
                        <input type="text" placeholder="Nombre..." required>
                    </div>
                    <div class="input-box">
                        <span>Email: </span>
                        <input type="email" name="Email" placeholder="ejemplo@ejemplo.com" required>
                    </div>
                    <div class="input-box">
                        <span>Nombre de la tarjeta: </span>
                        <input type="text" placeholder="Nombre..." required>
                    </div>

                    <!--subcolumna 1-->
                    <div class="flex">
                        <div class="input-box">
                            <span>Año expiración: </span>
                            <input type="text" placeholder="2025"  maxlength="4" required>
                        </div>
                    </div>
                    
                </div>

                <!--COLUMNA 2-->
                <div class="columna">
                    <h3 class="titulo"> Pago </h3>
                    <div class="input-box">
                        <span>Tarjetas aceptadas: </span>
                        <img src="tarjetas.png" alt="Tarjetas" required>
                    </div>
                    <div class="input-box">
                        <span>Número tarjeta de crédito: </span>
                        <input type="text" placeholder="XXXX XXXX XXXX XXXX"  maxlength="16" required>
                    </div>
                    <div class="input-box">
                        <span>Mes de expiración: </span>
                        <input type="text" placeholder="Mes"  maxlength="10" required>
                    </div>

                    <!--subcolumna 2-->
                    <div class="flex">
                        
                        <div class="input-box">
                            <span>CVV: </span>
                            <input type="text" placeholder="123"  maxlength="3" required>
                        </div>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn" > <b>Pagar</b> </button>

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
