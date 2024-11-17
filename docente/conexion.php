<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <nav
        class="navbar navbar-expand-sm navbar-light bg-danger">
        <div class="container">
            <h1 class="navbar-brand" style="margin-left:35%">LISTADO REGISTRO NOTAS</h1>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class='container' style='margin-top:6%;'>
        <?php
        $db_host = "localhost";
        $db_nombre = "academia";
        $db_usuario = "root";
        $db_contra = "";
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        $consulta = "SELECT * FROM notas";
        $resultados = mysqli_query($conexion, $consulta);
        while (($fila = mysqli_fetch_row($resultados)) == true) {
            echo "<div class='row align-items-end'>";
            echo "<div class='col-4'><b>Nombre del alumno:</b> " . $fila[0] . "</div>";
            echo "<div class='col-4'><b>Identificacion:</b> " . $fila[1] . "</div> ";
            echo "<div class='col-4'><b>Calificacion:</b> " . $fila[2] . "</div></div><hr>";
        }
        echo "</div>";
        mysqli_close($conexion);
        /*$fila=mysqli_fetch_row($resultados);
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " <br>";

        $fila=mysqli_fetch_row($resultados);
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . "<br>";

        $fila=mysqli_fetch_row($resultados);
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";*/
        ?>
    </div>
    <?php include '../log/footer.php' ?>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>