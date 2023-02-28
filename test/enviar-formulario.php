<?php
if(isset($_POST['submit'])) {
    $to = "mistercangrejo@gmail.com"; // reemplaza esto con tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $message = "Nombre: ".$nombre."\nEmail: ".$email."\nMensaje:\n".$mensaje;
    $headers = "From:".$email;
    if(mail($to, $subject, $message, $headers)) {
        echo "<p>¡Gracias por contactarnos, ".$nombre."! Nos pondremos en contacto contigo pronto.</p>";
    } else {
        echo "<p>Lo siento, hubo un problema al enviar tu mensaje. Por favor inténtalo de nuevo más tarde.</p>";
    }
}
?>
