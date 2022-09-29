<div class="modal fade" id="edit<?php echo $row['CodigoAlumno']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Editar</h4>
			</div>
			<form method="POST" action="update.php?id=<?php echo $erow['CodigoAlumno']; ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<?php
						$edit=$mysqli->query("select * from alumno where CodigoAlumno=".$row['CodigoAlumno']);
						$erow=$edit->fetch_assoc();
					?>
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Codigo:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" readOnly="true" name="txtCodigo" class="form-control" value="<?php echo $erow['CodigoAlumno']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">DNI:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtDNI" value="<?php echo $erow['DNI']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Apellidos:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtApellidos" value="<?php echo $erow['Apellidos']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Nombres:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtNombre" value="<?php echo $erow['Nombres']; ?>">
							</div>
						</div>
						
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Correo:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCorreo" value="<?php echo $erow['Correo']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Direccion:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtDireccion" value="<?php echo $erow['Direccion']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Ubigeo:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtUbigeo" value="<?php echo $erow['Ubigeo']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Celular:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCelular" value="<?php echo $erow['Celular']; ?>">
							</div>
						</div>
						
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Lugar de nacimiento:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtNacimiento" value="<?php echo $erow['LugarNacimiento']; ?>">
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
									while($rowh=$listaEscuelas->fetch_assoc())
									{
								?>
								<option value="<?php echo $rowh['IDEscuela']; ?>">
									<?php echo $rowh['NombreEscuela']; ?>
								</option>
								<?php 
									}
								?>
							</select>
							</div>
						</div>
						
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Imagen:
								</label>
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
					<button type="submit" class="btn btn-warning">
						<span class="glyphicon glyphicon-check"></span> Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /.modal -->