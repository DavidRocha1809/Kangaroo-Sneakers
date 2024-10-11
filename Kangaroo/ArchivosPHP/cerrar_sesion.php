<?php

    session_start();
    session_destroy();
    header("location: ../Inicio_de_sesion/Inicio.php");

?>