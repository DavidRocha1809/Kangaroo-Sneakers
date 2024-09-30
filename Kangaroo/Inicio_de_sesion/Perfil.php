<?php
        session_start();

        //si en la sesión no se encontró un usuario activo, mandar mensade de error(NO PERMITIR VER LA PÁGINA)
        if(!isset($_SESSION['user'])){
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
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="EstiloInic.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>Perfil</title>
    </head>

    <body>
        
        <h1>HOLA PERFIL!</h1>

    </body>

</html>