<?php

    session_start();

    if(isset($_SESSION['Email'])){
        header("location: Perfil.php");
        
    }

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="StyleIn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    


    <div class="back-arrow">
        <a href="../index.html"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="login-container">
        <h1>Bienvenidos</h1>
        <p>Inicia sesión o Regístrate</p>
        <form id="loginForm" method="POST" action="../ArchivosPHP/login_usuario_be.php">


            <label for="email">Correo Electrónico:</label>
            <input type="email" name="Email" placeholder="Introduce tu correo aquí" required>


            <label for="password">Contraseña:</label>
            <div class="password-container">
                <input type="password" name="Password" placeholder="Introduce tu contraseña aquí" required>
            </div>


            <p class="password-hint">Debe de ser una combinación de 8 letras, símbolos y números</p>


            <div class="checkbox-container">
                <input type="checkbox">
                <label for="remember">Recuérdame</label>
                <a href="Recordar_contra.html" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </div>


            <button href="./Perfil.php" target="_blank" type="submit" class="login-btn">Inicia sesión</button>
        </form>
        
        

        <p class="signup-link">¿Ninguna cuenta aún? <a href="./Registro.php">Regístrate aquí</a></p>
    </div>

    
        
    </script>
</body>
</html>
