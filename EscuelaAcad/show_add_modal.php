<!-- Add New employee-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center><h4 class="modal-title" id="myModalLabel">Agregar Nuevo</h4></center>
			</div>
			<form method="POST" action="insert.php" class="form-horizontal" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="container-fluid">
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
								</div>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="txtNombre">
								</div>
							</div>
							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Telefono:</label>
								</div>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="txtTelefono">
								</div>
							</div>
							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Sitio Web:</label>
								</div>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="txtURL">
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
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
				</div>
			</form>
		</div>
	</div>
</div>