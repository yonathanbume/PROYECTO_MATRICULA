<div class="modal fade" id="edit<?php echo $row['CodigoCurso']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Editar</h4>
				</center>
			</div>

			<div class="modal-body"> 
				<?php
					$edit=$mysqli->query("SELECT * from curso INNER JOIN docente ON curso.CodigoDocente=docente.CodigoDocente WHERE CodigoCurso='".$row['CodigoCurso']."'");
					$erow=$edit->fetch_assoc();
				?>

				<div class="container-fluid">
					<form method="POST" action="update.php?id=<?php echo $erow['CodigoCurso']; ?>" enctype="multipart/form-data">
						
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Docente:</label>
							</div>
							<div class="col-lg-8">
								<select name="selectPreRequisito" id="selectPreRequisito">
									<?php
										$listaDocente=$mysqli->query("select * from docente");

										if($listaDocente!=null)
										{
											while($rowDocente=$listaDocente->fetch_assoc())
											{
												if($rowDocente['CodigoDocente']!=$erow['CodigoDocente'])
												{
									?>
												<option value="<?php echo $rowDocente['CodigoDocente']; ?>"><?php echo ($rowDocente['Nombres'].' '.$rowDocente['Apellidos']); ?></option>
									<?php
												}
											}
										}
									?>
								</select>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Codigo:</label>
							</div>
							<div class="col-lg-8">
								<input readOnly="true" type="text" name="txtCodigo" class="form-control" value="<?php echo $erow['CodigoCurso']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtNombre" value="<?php echo $erow['NombreCurso']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Categoria:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCategoria" value="<?php echo $erow['Categoria']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">HT:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtHT" value="<?php echo $erow['HT']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">HP:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtHP" value="<?php echo $erow['HP']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">HL:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtHL" value="<?php echo $erow['HL']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">TH:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtTH" value="<?php echo $erow['TH']; ?>">
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Creditos:</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="txtCreditos" value="<?php echo $erow['CREDITOS']; ?>">
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
												if($rowc['CodigoCurso']!=$erow['CodigoCurso'])
												{
									?>
												<option value="<?php echo $rowc['NombreCurso']; ?>"><?php echo $rowc['NombreCurso']; ?></option>
									<?php
												}
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
									while($rowes=$listaEscuelas->fetch_assoc())
									{
								?>
									<option value="<?php echo $rowes['IDEscuela']; ?>"><?php echo $rowes['NombreEscuela']; ?></option>
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
				<button type="submit" class="btn btn-warning">
					<span class="glyphicon glyphicon-check"></span> Guardar</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /.modal -->