<?php include '../log/header.php' ?>
<div
    class="container nt-3 mt-5"
    style="border: 2px solid black;background-color:gray;">
    <h2 style="text-align:center;color:darkblue;">RECIBO ABONO</h2>
    <form action="conect_ventas.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label" style="font-weight: bold;">Fecha</label>
            <input
                type="date"
                class="form-control"
                name="fecha"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 150px;"
            />
        </div>
        <div class="mb-3" style="float: right;margin-top:-7.9%;">
            <label for="" class="form-label" style="font-weight: bold;">Cliente</label>
            <input
                type="text"
                class="form-control"
                name="cliente"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 450px;"
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label" style="font-weight: bold;">Curso abonar</label>
            <input
                type="text"
                class="form-control"
                name="curso"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 500px;"
            />
        </div>
        <div class="mb-3" style="float: right;margin-top:-7.9%;">
            <label class="form-label" style="font-weight: bold;">Abono</label>
            <input
                type="text"
                class="form-control"
                name="abono"
                id=""
                aria-describedby="helpId"
                placeholder=""
                style="width: 250px;"
            />
        </div>
        
        
        <button type="submit" class="btn btn-primary mb-3">Registrar</button>
        <button type="reset" class="btn btn-primary mb-3" style="float: right;">BORRAR</button>
    </form>


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