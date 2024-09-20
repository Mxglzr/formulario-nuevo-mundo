
<?php
$diametro = $_POST['txtDiam'];
$altura = $_POST['txtAltu'];
$radio = $diametro/2;
$Pi = 3.141593;
$volumen = $Pi*$radio*$radio*$altura;
echo "<br> &nbsp; El volumen del cilindro es de ". $volumen. " metros cúbicos";
echo "<br><br> <a href='actividad2.php'>Volver</a>";
header("refresh:10;url=actividad2.php" );

?>