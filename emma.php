<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $para = "germiluce@gmail.com";
    $asunto = "Confirmación de asistencia - Baby Shower";
    $mensaje = "Nombre y Apellido: " . $nombre;
    $cabeceras = "From: noreply@tuweb.com";

    mail($para, $asunto, $mensaje, $cabeceras);
    echo "Gracias por confirmar tu asistencia.";
}
?>
