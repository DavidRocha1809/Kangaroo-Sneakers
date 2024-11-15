<?php

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
    <!--SDK MercadoPago.js-->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <title>MercadoPago</title>
</head>
<body>
    
    <div id="wallet_container"></div>

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