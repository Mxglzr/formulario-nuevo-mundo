<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
} else {
    // Redirigir si se accede directamente sin enviar datos
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación del Registro</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center">Registro Completado</h3>
                <p class="text-center">Estos son los datos que has ingresado:</p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></li>
                    <li class="list-group-item"><strong>Apellido:</strong> <?php echo htmlspecialchars($apellido); ?></li>
                    <li class="list-group-item"><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></li>
                    <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
                </ul>
                <div class="text-center mt-4">
                    <a href="index.html" class="btn btn-primary">Volver al formulario</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
