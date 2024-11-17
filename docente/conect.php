<?php
$conexion = mysqli_connect("localhost","root","","academia") or die("problemas con la conexion");
mysqli_query($conexion,"INSERT INTO notas(nombre,identificacion,calificacion) VALUES 
('$_REQUEST[nombre]','$_REQUEST[identificacion]',$_REQUEST[calificacion])") 
or die("problemas con la conexion en el select" . mysqli_error($conexion));
mysqli_close($conexion);
header("Location:registro_notas1.php");

?>