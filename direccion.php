<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['Email'])) {
    header("Location: ./Inicio_de_sesion/Inicio.php");
    exit();
}

//SÓLO MERCADO PAGO
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

require 'vendor/autoload.php';

MercadoPagoConfig::setAccessToken("APP_USR-7454401283718705-102316-de97db03ceaf8f360bed14ebe725433b-2050922019");

$client = new PreferenceClient();

$preference = $client->create([

    "items" => [
        [
            "id" => "DEP-0001",
            "title" => "Tenis deportivos",
            "quantity" => 1,
            "unit_price" => 1899.99
        ],
    ],

    "statement_descriptor" => "Kangaroo Sneakers",
    "external_reference" => "CDP001",

]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de envío</title>
    <!--SDK MercadoPago.js-->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <link rel="stylesheet" href="StylePago.css">
    <link rel="icon" href="../ico/logo.ico">
</head>

<body>

<!--  Modo oscuro  -->
<script src="./Oscuro.js"></script>

<div class="contenedor">
    <form id="https://formsubmit.co/david.rocha180900@gmail.com" action="pago.php" method="post">
        <div class="fila">
                
            <!--COLUMNA 1-->
            <div class="columna">
                <h3 class="titulo"> Datos de envío </h3>
                <div class="input-box">
                    <span>País: </span>
                    <input type="text" placeholder="País" required>
                </div>
                <div class="input-box">
                    <span>Ciudad: </span>
                    <input type="text" placeholder="Ciudad..." required>
                </div>
                <div class="input-box">
                    <span>Código postal: </span>
                    <input type="text" placeholder="12345..." maxlength="5" required>
                </div>
                <div class="input-box">
                    <span>Dirección: </span>
                    <input type="text" placeholder="Calle - Colonia..." required>
                </div>

                <!--subcolumna 1-->
                <div class="flex">
                    <div class="input-box">
                        <span>Num interior: </span>
                        <input type="text" placeholder="12..."  maxlength="3">
                    </div>
                    <div class="input-box">
                        <span>Num exterior: </span>
                        <input type="text" placeholder="56..."  maxlength="3" required>
                    </div>
                </div>
            </div>

            <!-- Botones -->
            <button type="submit" class="btn" id="btnPagar"><b>Pagar</b></button>
            <div id="wallet_container"></div>        

        </form>
</div>

<!--    REDIRECCIÓN DE BOTONES    -->
<script>
    // Seleccionar el formulario y los botones
    const form = document.getElementById('subscribe-form');
    const btnPagar = document.getElementById('btnPagar');
    const btnMercadoPago = document.getElementById('wallet_container');

    // Si se hace clic en el botón Mercado Pago, cambiar la acción del formulario
    btnMercadoPago.addEventListener('click', function() {
        form.action = 'mercado_pago.php';
        form.submit();  // Enviar el formulario manualmente
    });

    // (El botón "Pagar" usa la acción predeterminada, no necesita cambios)
</script>


<!--    SCRIPT MERCADO PAGO    -->
<script>
    const mp = new MercadoPago('APP_USR-ad8145f8-ec7e-46c1-ad2d-8f60c18f5c6e', {
        locale: 'es-MX'
    });
    const bricksBuilder = mp.bricks();
    mp.bricks().create("wallet", "wallet_container", {
        initialization: {
            preferenceId: '<?php echo $preference->id; ?>' 
        }
    })
</script>

</body>
</html>
