<?php 
$conexion=mysqli_connect("localhost","root","","academia");
$sql="INSERT INTO ventas(fecha,cliente,curso,abono) VALUES ('$_REQUEST[fecha]','$_REQUEST[cliente]','$_REQUEST[curso]','$_REQUEST[abono]')";
mysqli_query($conexion,$sql) or die("Problemas con el select" . mysqli_error($conexion));
mysqli_close($conexion);
header("Location:ventas.php");
?>