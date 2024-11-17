<?php include '../log/header.php'?>
<div
class="container nt-3 mt-5"
style="border: 2px solid black;background-color:gray;">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
<h2 style="text-align:center;color:darkblue;">REGISTRO DE PROFESORES</h2>
<form action="conect_profesores.php" method="post">
<div class="mb-3">
    <label for="" class="form-label"><b>Nombre del profesor</b></label>
    <input
        type="text"
        class="form-control"
        name="nombre"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 300px;"
    />
</div>
<div class="mb-3" style="float:right;margin-top:-9%;">
    <label for="" class="form-label"><b>Nombre del curso</b></label>
    <input
        type="text"
        class="form-control"
        name="curso"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 300px;"
    />
</div>
<div class="mb-3">
    <label for="" class="form-label"><b>Horario</b></label>
    <input
        type="text"
        class="form-control"
        name="horario"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 300px;"
    />
</div>
<div class="mb-3" style="float:right;margin-top:-9%;">
    <label for="" class="form-label"><b>Telefono</b></label>
    <input
        type="text"
        class="form-control"
        name="telefono"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 300px;"
    />
</div>
<div class="mb-3">
    <label for="" class="form-label">OBSERVACION</label>
    <label for="" class="form-label"></label>
    <textarea class="form-control" name="observacion" id="" rows="3"></textarea>
</div>
<a href="#"><button type="submit"  class="btn btn-primary mb-3">Registrar</button></a>
<button type="reset" class="btn btn-primary mb-3" style="float: right;">BORRAR</button>

</form>

</div>
<?php include '../log/footer.php'?>
<script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>