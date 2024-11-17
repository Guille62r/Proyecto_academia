<?php include 'administrador.html' ?>
	<div
		class="container"
		style="margin-top: 5%;">

		<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalEliminar" data-bs-whatever="@mdo">ELIMINAR ESTUDIANTE</button>
		<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalModificarId" data-bs-whatever="@fat">MODIFICAR IDENTIFICADOR</button>
		<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalModificarNotas" data-bs-whatever="@getbootstrap">MODIFICAR NOTAS</button>
		<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalModificarNombre" data-bs-whatever="@getbootstrap">MODIFICAR NOMBRE</button>

		<div class="modal fade" id="exampleModalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR ESTUDIANTE</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="eliminar2.php" method="post">
						<div class="modal-body">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Identificador:</label>
								<input type="text" class="form-control" name="identificacion" value=""><br><br>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary" onclick="eliminar()">Eliminar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="exampleModalModificarId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR IDENTIFICADOR</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="modificar1.php" method="post">
						<div class="modal-body">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Identificador:</label>
								<input type="text" class="form-control" name="identificacion" value=""><br><br>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary" onclick="Modificar()">MODIFICAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="exampleModalModificarNotas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR NOTAS</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="modificarnotas1.php" method="post">
						<div class="modal-body">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Identificador:</label>
								<input type="text" class="form-control" name="identificacion" value=""><br><br>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary" onclick="Modificar()">MODIFICAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="exampleModalModificarNombre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR NOMBRE</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="modificarnombre1.php" method="post">
						<div class="modal-body">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Identificador:</label>
								<input type="text" class="form-control" name="identificacion" value=""><br><br>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary" onclick="Modificar()">MODIFICAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	 <script>
		function eliminar(){
			alert("Estas seguro de eliminar al estudiante");
		}
		function modificar() {
			alert("Estas seguro que quieres modificar los datos del estudiante");
		}
	 </script>
