<?php include '../log/header.php' ?>
<div
    class="container nt-3 mt-5"
    style="border: 2px solid black;background-color:gray;">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
    </svg>
    <h2 style="text-align:center;color:darkblue;">INSCRIPCIONES NUEVAS</h2>
    <form action="conect_alumno.php" method="post">
        <div class="mb-3">
            <div class="mb-3" style="float:right;margin-top:-7%;">
                <label for="" class="form-label"><b>Nº Seguimiento</b></label>
                <input
                    type="text"
                    class="form-control"
                    name="seguimiento"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                    style="width: 300px;" />
            </div>
            <label for="" class="form-label"><b>Nombre del estudiante</b></label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 300px;" />
        </div>
        <div class="mb-3" style="float:right;margin-top:-7%;">
            <label for="" class="form-label"><b>DNI</b></label>
            <input
                type="text"
                class="form-control"
                name="dni"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 300px;" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label"><b>Direccion</b></label>
            <input
                type="text"
                class="form-control"
                name="direccion"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 300px;" />
        </div>
        <div class="mb-3" style="float:right;margin-top:-7%;">
            <label for="" class="form-label"><b>Telefono</b></label>
            <input
                type="text"
                class="form-control"
                name="telefono"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 300px;" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label"><b>CURSO A INSCRIBIR</b></label>
            <select
                class="form-select form-select-lg"
                name="curso"
                id="">
                <option selected value="">ELIJA CURSO </option>
                <option value="IFCD0110">IFCD0110</option>
                <option value="IFCTO31P0">IFCTO31P0</option>
                <option value="IFCT029PO">IFCT029PO</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label"><b>HORARIO DE ESTUDIO</b></label><br>
            <input type="radio" class="form-check-input" name="horario" value="mañana"> <label class="form-label">Mañana</label><br>
            <input type="radio" class="form-check-input" name="horario" value="tarde"> <label class="form-label">Tarde</label><br>
            <input type="radio" class="form-check-input" name="horario" value="noche"> <label class="form-label">Noche</label><br>
            <div style="margin-left: 30%;margin-top:-9.5%;">
                <label class="form-label"><b>MODALIDAD</b></label><br>
                <label class="form-label">Presencial</label> <input  type="radio" value="presencial" class="form-check-input" name="modalidad"><br>
                <label class="form-label">Aula Virtual</label> <input type="radio" value="aula virtual" class="form-check-input" name="modalidad"><br>
                <label class="form-label">Mixto</label> <input type="radio" value="mixto" class="form-check-input" name="modalidad"><br>
            </div>
        </div>
        <div class="mb-3" style="float: right;margin-top:-11.5%">
            <label for="" class="form-label"><b>Correo electronico</b></label>
            <input
                type="text"
                class="form-control"
                name="correo"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 300px;" />
        </div>

        <button type="submit" class="btn btn-primary mb-3">Registrar</button>
        <button type="reset" class="btn btn-primary mb-3" style="float: right;">BORRAR</button>
    </form>


</div>
<?php include '../log/footer.php'?>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>