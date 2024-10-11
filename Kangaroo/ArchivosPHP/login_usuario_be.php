<?php

    session_start();

    include 'conexion_be.php';
    
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    // Validar login de usuario
    $validar_login = mysqli_query($conexion, "SELECT * FROM user WHERE Email='$Email' and Password='$Password'");

    // Validar login de administrador
    $validar_loginAd = mysqli_query($conexion, "SELECT * FROM administradores WHERE Email='$Email' and Password='$Password'");


    // Buscando usuario
    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['Email'] = $Email;
        $_SESSION['UserType'] = 'user'; // Guardar el tipo de usuario en la sesión
        header("location: ../index.html");
        exit();
        //Buscando administrador
    } elseif (mysqli_num_rows($validar_loginAd) > 0) {
        $_SESSION['Email'] = $Email;
        $_SESSION['UserType'] = 'administradores'; // Guardar el tipo de usuario en la sesión
        header("location: ../index.html");
        exit();
    } else {
        echo '
            <script>
                alert("El usuario o contraseña son incorrectos, por favor verifique los datos introducidos");
                window.location = "../Inicio_de_sesion/Inicio.php";
            </script>
        ';
        exit();
    }

    


?>