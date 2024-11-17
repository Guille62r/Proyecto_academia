<?php include '../administrador.html' ?>
<script>
    document.getElementById("logo").setAttribute("src","../img/1.png");
    document.getElementById("avatar").setAttribute("src","../img/admin.jfif");
</script>
<div
    class="container"
    style="margin-top: 5%;"
>
<?php 
$conexion=mysqli_connect("localhost","root","","academia");
$inyect_sql="SELECT * FROM ventas";
$resultado=mysqli_query($conexion,$inyect_sql);
while(($file = mysqli_fetch_row($resultado)) == true){
    $fecha = date_create($file[0]);
    echo date_format($fecha, "Y") . "<br>";
    echo "<b>FEHCA ABONO : </b>" . $file[0] . "<br>";
    echo "<b>CLIENTE : </b>" . $file[1] . "<br>";
    echo "<b>CURSO : </b>" . $file[2] . "<br>";
    echo "<b>ABONO : </b>" . $file[3] . " €<br><hr>";
}
mysqli_close($conexion);
?>
</div>