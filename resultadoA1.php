<?php
$nombre = $_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$sexo=strtoupper($_POST['txtSexo']);
$edad=$_POST['txtEdad'];
echo " <h1>Resultado del Proceso</h1><hr>";
echo "Bienvenido (a): " .strtoupper($nombre). ", " .strtoupper($apellido);
switch($sexo) {
    case 'M':
        echo "<br>Su sexo es Masculino"; break;
    case 'F':
        echo "<br>Su sexo es Femenino"; break;
    default:
        echo "<br>Sexo es Indefinido"; break;
    }
    if ($edad>=18){
        echo "<br>Ud. es mayor de edad";
    } else{
        echo "<br>Ud. es Menor de edad";
    }
    echo "<br><br><a href='actividad1.php'>Volver</a>";
    header("refresh:5;url=actividad1.php" );
    ?>
