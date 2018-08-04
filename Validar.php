<?php

$correo = $_POST['correo'];
$clave = $_POST['clave'];
//$_SESSION['usuario']= $usuario;


//conexion a la base de datos

$conexion = mysqli_connect("den1.mysql2.gear.host", "vituta17", "Qk0B~o08?puZ", "vituta17");
$consulta = "select * from usuario where correo='$correo' and clave='$clave'";
//echo $consulta;
$resultado = mysqli_query($conexion, $consulta);
//print_r($resultado);
//die();
$fila = mysqli_num_rows($resultado);
if ($fila > 0) {
    header("Location:Usuario.php");
} else {
    echo "Lo siento";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

    