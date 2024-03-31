<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strip_tags(trim($_POST["nombre"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensaje = trim($_POST["mensaje"]);

    $para = "info@quarkcode.com";
    $asunto = "Nuevo mensaje de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $encabezados = "From: $nombre <$email>";

    if (mail($para, $asunto, $contenido, $encabezados)) {
        echo "Mensaje enviado.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
