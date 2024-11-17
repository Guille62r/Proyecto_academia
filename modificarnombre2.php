<?php 
$conexion = mysqli_connect("localhost", "root", "", "academia");
$registro = mysqli_query($conexion, "UPDATE notas set nombre='$_REQUEST[nota_nueva]' WHERE identificacion='$_REQUEST[nota]'") or die("problema en el select" . mysqli_error($conexion));
mysqli_close($conexion);
header("Location:estudiantes.php");
?>