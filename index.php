<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario IE Mundo Nuevo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center">Modelo del Formulario</h3>
        <p class="text-center">Bienvenidos al formulario de la I.E. "Nuevo Mundo".</p>
        <form action="confirmacion.php" method="post">
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="form-group">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
    </div>
</body>

</html>