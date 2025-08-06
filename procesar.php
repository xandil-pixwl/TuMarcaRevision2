<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $asunto=$_POST['asunto'];
    $mensaje=$_POST['mensaje'];

    $destino="anng.mar0710@gmail.com"; //Correo a donde llegara el archivo
    $contenido="Nombre: $nombre\nEmail: $email\nAsunto: $asunto\nMensaje:\n$mensaje";
    $headers="Enviado desde la página TuMarca por: $email";

    if (mail($destino, $asunto, $contenido, $headers)) {
        echo "<script>alert('Mensaje enviado correctamente'); window.location.href='contacto.html';</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje'); window.history.back();</script>";
    }
}
?>