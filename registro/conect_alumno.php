<?php
$db_host="localhost";
$db_nombre="academia";
$db_usuario="root";
$db_conta="";
$conexion = mysqli_connect($db_host,$db_usuario,$db_conta,$db_nombre) or die("problemas con la conexion");
$exp =array(preg_match('/^\d{8}[A-Z]$/', $_REQUEST['dni']), preg_match('/^\d{9}$/', $_REQUEST['telefono']));
if ($exp[0] == 1 && $exp[1] == 1 && $_REQUEST['curso']!="") {
    $consulta = "INSERT INTO inscripciones(nombre,seguimiento,dni,direccion,telefono,curso,horario,modalidad,correo) VALUES 
    ('$_REQUEST[nombre]','$_REQUEST[seguimiento]','$_REQUEST[dni]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[curso]','$_REQUEST[horario]','$_REQUEST[modalidad]','$_REQUEST[correo]')";
    mysqli_query($conexion, $consulta) or die("problemas con la conexion en el select" . mysqli_error($conexion));
}
mysqli_close($conexion);
header("Location:registro_estudiantes.php");
?>