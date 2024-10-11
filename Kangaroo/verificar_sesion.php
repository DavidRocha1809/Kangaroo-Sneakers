<?php
session_start();

if (isset($_SESSION['Email'])) {
    // El usuario ha iniciado sesión
    header("Location: pago.php"); // Redirige a la página de pago
    exit();
} else {
    // El usuario no ha iniciado sesión
    echo '
        <script>
            alert("Debe iniciar sesión para proceder al checkout.");
            window.location = "./Inicio_de_sesion/Inicio.php"; // Redirige a la página de inicio de sesión
        </script>
    ';
    exit();
}
?>