<div class="modal fade" id="edit<?php echo $row['IDEscuela']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Editar</h4>
			</div>
			<form method="POST" action="update.php?id=<?php echo $erow['IDEscuela']; ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<?php
						$edit=$mysqli->query("select * from escuelaprofesional where IDEscuela=".$row['IDEscuela']);
						$erow=$edit->fetch_assoc();
					?>
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Nombre:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" name="txtNombre" class="form-control" value="<?php echo $erow['NombreEscuela']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Telefono:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtTelefono" value="<?php echo $erow['Telefono']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Sitio Web:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtURL" value="<?php echo $erow['URL']; ?>">
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
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /.modal -->