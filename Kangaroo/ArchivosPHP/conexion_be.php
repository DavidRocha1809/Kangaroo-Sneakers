<?php


    $conexion = mysqli_connect("localhost", "root", "", "kangaroo");

           
    if($conexion){
        echo 'Conectado exitosamente a la BD';
    }else{
        echo 'Valió verga';
    }

    
?>