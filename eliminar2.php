<?php
$conexion=mysqli_connect("localhost","root","","academia");
$registro=mysqli_query($conexion,"SELECT nombre,calificacion FROM notas WHERE identificacion='$_REQUEST[identificacion]'") or die("problema en el select" . mysqli_error($conexion));
if($reg=mysqli_fetch_array($registro)){
    mysqli_query($conexion,"DELETE FROM notas WHERE identificacion='$_REQUEST[identificacion]'") or die("problemas de select: " . mysqli_error($conexion));
    echo "<script>alert('SE ELIMINO EL ESTUDIANTE CORRECTAMENTE');";
}else{
    echo "<script>alert('NO EXISTE EL ESTUDIANTE A ELIMINAR')";
}
echo "window.location.href = 'estudiantes.php';</script>";
mysqli_close($conexion);
?>