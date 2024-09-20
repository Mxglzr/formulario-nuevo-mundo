<?php
$nombre = $_POST['txtNombre'];
echo "Bienvenido (a): ". strtoupper ($nombre);
echo "<br><br>";
echo "<a href= 'recopilar1.php'>Regresar</a>";
header ("refresh:5;url=recopilar1.php");
?>
