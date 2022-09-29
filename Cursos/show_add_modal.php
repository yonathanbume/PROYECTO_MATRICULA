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
								<label class="control-label" style="position:relative; top:7px;">Docente:</label>
							</div>
							<div class="col-lg-8">
								<select name="selectDocente" id="selectDocente">
									<?php
										$listaCursos=$mysqli->query("select * from docente");

										if($listaCursos!=null)
										{
											while($rowc=$listaCursos->fetch_assoc())
											{
									?>
												<option value="<?php echo $rowc['CodigoDocente']; ?>"><?php echo ($rowc['Nombres'].' '.$rowc['Apellidos']); ?></option>
									<?php
											}
										}
									?>
								</select>
							</div>
						</div>

						<div style="height:10px;"></div>
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
								<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtNombre">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Categoria:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCategoria">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">HT:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtHT">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">HP:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtHP">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">HL:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtHL">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">TH:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtTH">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Creditos:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCreditos">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Pre Requisito:</label>
							</div>
							<div class="col-lg-8">
								<select name="selectPreRequisito" id="selectPreRequisito">
									<option value="Ninguno">Ninguno</option>
									<?php
										$listaCursos=$mysqli->query("select * from curso");

										if($listaCursos!=null)
										{
											while($rowc=$listaCursos->fetch_assoc())
											{
									?>
												<option value="<?php echo $rowc['NombreCurso']; ?>"><?php echo $rowc['NombreCurso']; ?></option>
									<?php
											}
										}
									?>
								</select>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Escuela:</label>
							</div>
							<div class="col-lg-8">
								<select name="selectEstado" id="selectEstado">
									<option value="1">Habilitado</option>
									<option value="0">Deshabilitado</option>
								</select>
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
									while($row=$listaEscuelas->fetch_assoc())
									{
								?>
									<option value="<?php echo $row['IDEscuela']; ?>"><?php echo $row['NombreEscuela']; ?></option>
								<?php 
									}
								?>
								</select>
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