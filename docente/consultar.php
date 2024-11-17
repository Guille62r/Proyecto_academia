     <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
<div class="container" style="text-align:center;border:2px solid black;background-color:green;">
<?php
$conexion = mysqli_connect("localhost", "root", "", "academia") or die("problemas con la conexion");
$registros = mysqli_query($conexion, "SELECT nombre,identificacion,calificacion FROM notas
 WHERE identificacion=$_REQUEST[identificacion]")
    or die("problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
if ($reg = mysqli_fetch_array($registros)) {
    echo "<h1>NOMBRE: <br>" . $reg['nombre'] . "</1><br><br>";
    if ($reg['calificacion'] == 1) {
        echo "<h1>CALIFICACION:<br> Apto</h1>";
    }else{
        echo "<h1>CALIFICACION:<br> No apto</h1>";
    }
    echo "<br>";
}
?>
<a href="http://localhost/proyecto3/docente/registro_notas1.php"><button type="button" class="btn btn-danger">ATRAS</button></a>
<br><br>
</div>

<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>