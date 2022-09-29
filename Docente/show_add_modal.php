<!-- Add New employee-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Agregar Nuevo</h4>
				</center>
			</div>

			<div class="modal-body">
				<div class="container-fluid">

					<form method="POST" action="insert.php" class="form-horizontal" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Codigo:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCodigo">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">DNI:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtDNI">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Apellidos:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtApellidos">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Nombres:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtNombres">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Correo:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCorreo">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Password:</label>
							</div>
							<div class="col-lg-8">
								<input type="password" class="form-control" name="txtPassword">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Celular:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCelular">
							</div>
						</div>

						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Escuela:</label>
								</div>
								<div class="col-lg-8">
									<select name="selectEscuela" id="selectEscuela">
									<?php
										$listaEscuelas=$mysqli->query("select * from escuelaprofesional");
										while($rowa=$listaEscuelas->fetch_assoc())
										{
									?>
										<option value="<?php echo $rowa['IDEscuela']; ?>"><?php echo $rowa['NombreEscuela']; ?></option>
									<?php 
										}
									?>
									</select>
								</div>
							</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
							</div>
							<div class="col-lg-8">
								<input type="file" class="filestyle" name="fileImagen" />
							</div>
						</div>

				</div>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-default" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> Cancelar</button>

				<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>

					</form>
			</div>
		</div>
	</div>
</div>