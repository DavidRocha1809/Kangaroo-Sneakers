<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
    
    $to = $email;
    $subject = "Gracias por su preferencia DulcePan";
    $message = "En unos minutos se le enviara un correo con dato de la entrega";
    $headers = "From: admin@dulcepan.site";

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado correctamente";
    } else {
        echo "Error al enviar el correo";
    }
} else {
    echo "Método no permitido";
}

header("location: ./index.html");
?>
