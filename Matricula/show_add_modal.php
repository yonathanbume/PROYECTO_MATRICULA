<!-- Add New employee-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Agregar Nuevo</h4>
				</center>
			</div>
			<form method="POST" action="insert.php" class="form-horizontal" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="container-fluid">

							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Número creditos:</label>
								</div>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="txtNroCreditos" value="22" readonly>
								</div>
							</div>

							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Maximo creditos:</label>
								</div>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="txtMaximoCreditos" value="26" readonly>
								</div>
							</div>

							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Minimo creditos:</label>
								</div>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="txtMinimoCreditos" value="16" readonly>
								</div>
							</div>

							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Alumno:</label>
								</div>
								<div class="col-lg-8">
									<select name="selectAlumno" id="selectAlumno" class="form-control">
										<option value="<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellidos']; ?></option>
                                    </select>
								</div>
							</div>

							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Semestre:</label>
								</div>
								<div class="col-lg-8">
									<select name="selectSemestre" id="selectSemestre" class="form-control">
										<?php
											$listaSemestre=$mysqli->query("select * from semestreacademico");
											while($rowSemestre=$listaSemestre->fetch_assoc())
											{
										?>
											<option value="<?php echo $rowSemestre['IDSemestre']; ?>"><?php echo $rowSemestre['Descripcion']; ?></option>
										<?php 
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
									<select name="selectEscuela" id="selectEscuela" class="form-control">
										<option value="<?php echo $_SESSION['IDescuela']; ?>"><?php echo $_SESSION['escuela']; ?></option>
                                    </select>
								</div>
							</div>

							<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">Curso:</label>
								</div>
								<div class="col-lg-8 d-flex justify-content-around">
									<select name="selectCurso" id="selectCurso">
									<?php
										$listaEscuelas=$mysqli->query("SELECT * from curso where IDEscuela='".$_SESSION['IDescuela']."';");
										while($rowCurso=$listaEscuelas->fetch_assoc())
										{
									?>
										<option value="<?php echo $rowCurso['CodigoCurso']; ?>"><?php echo $rowCurso['NombreCurso']; ?></option>
									<?php 
										}
									?>
									</select>
									<a href="javascript:void(0);"class="btn btn-sm btn-outline-primary" id="btnAniadirCurso">Añadir</a>
								</div>
							</div>

							<div style="height:20px;"></div>
							<div class="row">
								<div class="col-lg-12 table-responsive">
								<table class="table table-striped">
								  <thead>
								    <tr>
								      <th style="width: 30%;">Codigo</th>
								      <th style="width: 50%;">Nombre</th>
								      <th style="width: 10%;">Opc</th>
								    </tr>
								  </thead>
								  <tbody id="tablaCursos">
								  </tbody>
								</table>
								</div>
							</div>
					</div>
				</div>
				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">
						<span class="glyphicon glyphicon-remove"></span> Cancelar</button>

					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script>

$(function()
{
	window.nroCursos = 0;

	$('#btnAniadirCurso').on('click', function()
	{
		var nombreCurso = $("#selectCurso option:selected" ).text();
		var idCurso = $("#selectCurso").val();
		var html =  "<tr id='tr"+window.nroCursos+"'><td><input type='text' class='form-control form-control-sm' readonly name='txtCurso"+window.nroCursos+"' id='txtCurso"+window.nroCursos+"' value='"+idCurso+"'></td><td>"+nombreCurso+"</td><td><a href='javascript:void(0);'class='btn btn-sm btn-outline-danger btnQuitarCurso' data-index='"+window.nroCursos+"'>Quitar</a></td></tr>";

		$('#tablaCursos').append(html);

		window.nroCursos ++;
	});

	$('#tablaCursos').on('click', '.btnQuitarCurso', function()
	{
		var index = $(this).attr('data-index');
		$('#tr'+index).remove();

		window.nroCursos --;
	});

});

</script>