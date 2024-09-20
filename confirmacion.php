<?php
if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['telefono']) || empty($_POST['email'])){
        // Redirigir si se accede directamente sin enviar datos
        header("Location: index.php");
}else {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
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
                <table class="table table-success">
                    <thead class="table-dark">
                        <th>Nombre:</th>
                        <th>Apellido:</th>
                        <th>Teléfono:</th>
                        <th>Email:</th>
                    </thead>
                    <tbody>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo htmlspecialchars($apellido); ?></td>
                        <td><?php echo htmlspecialchars($telefono); ?></td>
                        <td><?php echo htmlspecialchars($email); ?></td>
                    </tbody>
                </table>
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-primary">Volver al formulario</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>