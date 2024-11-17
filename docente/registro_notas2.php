<?php include '../log/header.php' ?>
<script src="../js/js2.js"></script>
<script src="../js/js.js"></script><!---se coloco el script para la funcion--->
<!---botones------>

<!---se realizo los botones los cuales vienen de la pagina de nota--->
<div
    class="container"
    style="margin-top: 50px;margin-left:550px;">
    <a href="registro_notas1.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder2" viewBox="0 0 16 16">
                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5z" />
            </svg>IFCD0110</button></a>
    <a href="registro_notas2.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder2" viewBox="0 0 16 16">
                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5z" />
            </svg>IFCTO31P0</button></a>
    <a href="registro_notas3.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder2" viewBox="0 0 16 16">
                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5z" />
            </svg>IFCT029PO</button></a>
</div>
<!----fin---->
<br>
<!---tabla 1----->
<!---se realizo la primera tabla se coloco el demo para indicar la funcion a ejecutar--->
<div
    class="container"
    style="border: 2px solid black;">
    <br>
    <table
        class="table-reponnsive table table-secondary">
        <thead>
            <tr>
                <th scope="col">MODULOS</th>
                <th scope="col">HORA MODULOS</th>
                <th scope="col">NOTA FINAL</th>

            </tr>
        </thead>
        <tbody>
            <tr class="table table-primary">
                <td scope="row" class="modulo">MF0750_1: Construcción de orientacion a objetos</td>
                <td>210 horas</td>
                <td id="demo1"></td>
            </tr>
            <tr class="table table-primary">
                <td scope="row"  class="modulo">MF0751_2: Creacion de funciones en clases</td>
                <td>180 horas</td>
                <td id="demo2"></td>
            </tr>
            <tr class="table table-primary">
                <td scope="row"  class="modulo">MF0752_3: Publicación de páginas web java</td>
                <td>90 horas</td>
                <td id="demo3"></td>
            </tr>
        </tbody>
    </table>
    <h5>Notas Promedio: <h3 id="demo4"></h3>
    </h5>
    <button type="button" class="btn btn-primary" style="float: right;margin-top: -40px;" onclick="nota()">Calcular Nota</button>
</div>
<!-------------------------------fin tabala 1------------------------->
<!----registrar estudiantes------>

<form action="conect.php" method="post">
    <div
        class="container"
        style="border: 2px solid black;margin-top:50px;">
        <div class="mb-3">
            <div class="mb-3">
                <label class="form-label"><b>Nombre del estudiante</b></label>
                <input
                    type="text"
                    class="form-control"
                    name="nombre"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                    style="width: 500px;border:1px solid black;" />
            </div>
            <div class="mb-3" style="margin-left:660px; margin-top:-85px;">
                <label class="form-label"><b>IDENTIFICADOR</b></label>
                <input
                    type="text"
                    class="form-control"
                    name="identificacion"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                    style="width: 300px;border:1px solid black;" />
            </div>
            <div class="mb-3" style="float: right;margin-top: -50px;">
                <label class="form-label">Calificacion</label>
                <select name="calificacion" id="">
                    <option value="1">Apto</option>
                    <option value="0">No Apto</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" onclick="enviar()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
                <path d="M12 2h-2v3h2z" />
                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1" />
            </svg> REGISTRAR</button>
        <button type="reset" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
            </svg> BORRAR</button>
</form>

<!---fin registrar estudiantes----->

<!-----modal de consultar--------->
<div style="float: right;">
    <form action="consultar2.php" method="post">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z" />
            </svg> Consultar Estudiantes
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">IDENTIFICADOR DEL ESTUDIANTE A CONSULTAR</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!---se agrego unos inputs que no venian del modal---->
                        <div class="mb-3">
                            <label class="form-label">N# IDENTIFICADPOR</label>
                            <input
                                type="text"
                                class="form-control"
                                name="identificacion"
                                id=""
                                aria-describedby="helpId"
                                placeholder="" />
                            <small id="helpId" class="form-text text-muted">Colocar solo numerico</small>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
                        <button type="submit" class="btn btn-primary">CONSULTAR</button><!---Se cambiom el bttona  submit que sirve para enviar--->
                    </div>
                </div>
            </div>
        </div>

</div>
<br><br>
</div>
</form>
<footer style="margin-top: 400px;">
    <?php include '../log/footer.php' ?>
</footer>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>