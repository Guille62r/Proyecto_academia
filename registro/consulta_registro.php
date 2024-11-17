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
    <?php
    $db_host = "localhost";
    $db_nombre = "academia";
    $db_usuario = "root";
    $db_contra = "";
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if (isset($_REQUEST['seleccionado'])) {
        if ($_REQUEST['seleccionado'] == "profesor") {
            echo '<nav
            class="navbar navbar-expand-sm navbar-light bg-danger">
            <div class="container">
                <h1 class="navbar-brand" style="margin-left:35%">LISTADO REGISTROS DE PROFESORES</h1>
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
            <div class="container" style="margin-top:6%;">';
            echo '<form action="consulta_registro.php" method="post">
                <div class="mb-3">
                    <select
                        class="form-select form-select-lg bg-primary text-white"
                        style="text-align:center;"
                        name="seleccionado"
                        id="seleccionado"
                        onchange="this.form.submit()">
                        <option value="">Selecciona</option>
                        <option value="profesor" selected>PROFESORES</option>
                        <option value="alumno">ALUMNOS</option>
                    </select>
                </div>
            </form>';
            $consulta = 'SELECT * FROM profesores';
            $resultados = mysqli_query($conexion, $consulta);
            echo "<div style='margin-top:5%;'>";
            while (($fila = mysqli_fetch_row($resultados)) == true) {
                echo "<div class='row align-items-end'>";
                echo "<div class='col-2'><b>Nombre:</b> " . $fila[0] . "</div>";
                echo "<div class='col-2'><b>Curso:</b> " . $fila[1] . "</div>";
                echo "<div class='col-2'><b>Horario:</b> " . $fila[2] . "</div>";
                echo "<div class='col-2'><b>Telefono:</b> " . $fila[3] . "</div>";
                echo "<div class='col-4'><b>Observacion:</b> " . $fila[4] . "</div>";
                echo "</div><hr>";
            }
            echo "</div>";
        } else if ($_REQUEST['seleccionado'] == "alumno") {
            echo '<nav
            class="navbar navbar-expand-sm navbar-light bg-danger">
            <div class="container">
                <h1 class="navbar-brand" style="margin-left:35%">LISTADO REGISTROS DE ALUMNOS</h1>
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
            <div class="container" style="margin-top:6%;">';
            echo '<form action="consulta_registro.php" method="post">
            <div class="mb-3">
                <select
                    class="form-select form-select-lg bg-primary text-white"
                    style="text-align:center;"
                    name="seleccionado"
                    id="seleccionado"
                    onchange="this.form.submit()">
                    <option value="">Selecciona</option>
                    <option value="profesor" >PROFESORES</option>
                    <option value="alumno" selected>ALUMNOS</option>
                </select>
            </div>
            </form>';
            $consulta = 'SELECT * FROM inscripciones';
            $resultados = mysqli_query($conexion, $consulta);
            echo "<div style='margin-top:5%;'>";
            echo "<table style='width:100%'>";
            echo "<tr >";
            echo "<th >Nombre</th>";
            echo "<th>Seguimiento</th>";
            echo "<th>DNI</th>";
            echo "<th>Direccion</th>";
            echo "<th>telefono</th>";
            echo "<th>curso</th>";
            echo "<th>horario</th>";
            echo "<th>modalidad</th>";
            echo "<th>correo</th>";
            echo "<tr/>";
            while (($fila = mysqli_fetch_row($resultados)) == true) {
                echo "<tr style='border-bottom: 1px solid rgb(161, 159, 159)'>";
                echo "<td >" . $fila[0] . "</td>";
                echo "<td >" . $fila[1] . "</td>";
                echo "<td >" . $fila[2] . "</td>";
                echo "<td >" . $fila[3] . "</td>";
                echo "<td >" . $fila[4] . "</td>";
                echo "<td >" . $fila[5] . "</td>";
                echo "<td >" . $fila[6] . "</td>";
                echo "<td >" . $fila[7] . "</td>";
                echo "<td >" . $fila[8] . "</td>";
                echo "<tr/>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo '<nav
            class="navbar navbar-expand-sm navbar-light bg-danger">
            <div class="container">
                <h1 class="navbar-brand" style="margin-left:35%">LISTADO REGISTROS</h1>
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
            <div class="container" style="margin-top:6%;">';
            echo '<form action="consulta_registro.php" method="post">
                <div class="mb-3">
                    <select
                        class="form-select form-select-lg bg-primary text-white"
                        style="text-align:center;"
                        name="seleccionado"
                        id="seleccionado"
                        onchange="this.form.submit()">
                        <option value="" selected>Selecciona</option>
                        <option value="profesor">PROFESORES</option>
                        <option value="alumno">ALUMNOS</option>
                    </select>
                </div>
            </form>';
        }
    } else {
        echo '<nav
        class="navbar navbar-expand-sm navbar-light bg-danger">
        <div class="container">
            <h1 class="navbar-brand" style="margin-left:35%">LISTADO REGISTROS</h1>
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
        <div class="container" style="margin-top:6%;">';
        echo '<form action="consulta_registro.php" method="post">
            <div class="mb-3">
                <select
                    class="form-select form-select-lg bg-primary text-white"
                    style="text-align:center;"
                    name="seleccionado"
                    id="seleccionado"
                    onchange="this.form.submit()">
                    <option value="" selected>Selecciona</option>
                    <option value="profesor">PROFESORES</option>
                    <option value="alumno">ALUMNOS</option>
                </select>
            </div>
        </form>';
    }
    echo "</div>";
    mysqli_close($conexion);
    ?>
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