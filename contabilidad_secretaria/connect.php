<?php 
$conexion=mysqli_connect("localhost","root","","academia") or die("Problemas con la conexion");
$registro="INSERT INTO libro_diario(date1,cuenta1,debe1,haber1,
date2,cuenta2,debe2,haber2,
date3,cuenta3,debe3,haber3,
date4,cuenta4,debe4,haber4,
date5,cuenta5,debe5,haber5) 
VALUES('$_REQUEST[date1]','$_REQUEST[cuenta1]','$_REQUEST[debe1]','$_REQUEST[haber1]',
'$_REQUEST[date2]','$_REQUEST[cuenta2]','$_REQUEST[debe2]','$_REQUEST[haber2]',
'$_REQUEST[date3]','$_REQUEST[cuenta3]','$_REQUEST[debe3]','$_REQUEST[haber3]',
'$_REQUEST[date4]','$_REQUEST[cuenta4]','$_REQUEST[debe4]','$_REQUEST[haber4]',
'$_REQUEST[date5]','$_REQUEST[cuenta5]','$_REQUEST[debe5]','$_REQUEST[haber5]')";
mysqli_query($conexion,$registro) or die("problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
header('Location:libro.php');
?>