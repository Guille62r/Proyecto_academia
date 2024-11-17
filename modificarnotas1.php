<?php include 'administrador.html' ?>
<div
		class="container"
		style="margin-top: 5%;">
<?php
$conexion = mysqli_connect("localhost", "root", "", "academia");
$registro = mysqli_query($conexion, "SELECT * FROM notas WHERE identificacion='$_REQUEST[identificacion]'") or die("problema en el select" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registro)) {
?>
<div style="margin-top:10%;margin-left:30%;border:2px solid black;background-color:burlywood;width:30%;padding:1%">
    <form action="modificarnotas2.php" method="post">
        <span> INGRESAR NOTAS A MODIFICAR:</span><br><br>
        <input type="text" class="form-control" style="margin-bottom: -2%;" name="nota_nueva" value="<?php echo $reg['calificacion'] ?>"><br><br>
        <input type="hidden" name="nota" value="<?php echo $reg['calificacion'] ?>">
        <input type="submit" class="btn btn-primary" value="Modificar">
    </form>
</div>
<?php
}else{
    echo "<div style='margin-top:10%;margin-left:30%;border:2px solid black;background-color:burlywood;width:35%;padding:1%''><h4>NO EXISTE EL IDENTIFICADOR</h4></div>";
}
mysqli_close($conexion);
?>
</div>