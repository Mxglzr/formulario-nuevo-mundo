<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $to = "asistentaadministrativa@iemundonuevo.edu.pe";
    $subject = "Nuevo registro de interesado - Mundo Nuevo";
    $message = "Nombre: $nombre\nApellido: $apellido\nTeléfono: $telefono\nEmail: $email";
    $headers = "From: noreply@tudominio.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "El formulario ha sido enviado con éxito.";
    } else {
        echo "Error al enviar el formulario.";
    }
}
?>