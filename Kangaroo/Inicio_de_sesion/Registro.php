



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleR.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Registro</title>

</head>

<body>

    <div class="back-arrow">
        <a href="../index.html"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <!--  //////////////////////////// -NAVBAR- ////////////////////////////  -->
    


    <!--  //////////////////////////// -CONTENIDO PRINCIPAL- ////////////////////////////  -->
    <div class="container">
        <h1>Regístrate</h1>
        <form action="../ArchivosPHP/registro_usuario_be.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="User" placeholder="Introduce tu nombre" required>
                </div>
                <div class="col">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Introduce tu apellido" required>
                </div>
            </div>
            <div class="row">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="Email" placeholder="Introduce tu correo electronico" required>
            </div>
            <div class="row">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="Password" placeholder="Introduce la contraseña" 
                pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"
                title="La contraseña debe tener al menos 8 caracteres, incluir una letra, un número y un carácter especial"
                required>
            </div>
            <div class="row">
                <label for="password">Confirmar contraseña</label>
                <input type="password" id="password" name="password" placeholder="Confirma la contraseña" required>
            </div>
            <button type="submit" ><a href="./Inicio.php">Enviar</button></a>
        </form>
    </div>


    <!--  //////////////////////////// -FOOTER- ////////////////////////////  -->
    


</body>

</html>
