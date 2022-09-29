<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['CodigoDocente']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3> Detalles </h3>
			</div>
			<div class="modal-body">
				<?php
				$edit=$mysqli->query("select * from docente where CodigoDocente=".$row['CodigoDocente']);
				$erow=$edit->fetch_assoc();
				?>
				<div class="container-fluid">
					<form method="POST" action="update.php?id=<?php echo $erow['CodigoDocente']; ?>" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12" align="center">
								<?php $img = "http://localhost/SistemaMatricula/Docente/docente_images/".$row['CodigoDocente']. ".jpg";?>
								<img src='<?php echo $img ?>' height="170px" width="170px" />
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Codigo:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['CodigoDocente']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">DNI:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['DNI']; ?>
							</div>
						</div>


						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Apellidos:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['Apellidos']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Nombres:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['Nombres']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Correo:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['Correo']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Celular:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['Celular']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label class="control-label" style="position:relative; top:7px;">Escuela:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php
									$listaEscuelas=$mysqli->query("select * from escuelaprofesional where IDEscuela=".$erow['IDEscuela']);
									while($trow=$listaEscuelas->fetch_assoc()){echo $trow['NombreEscuela'];}
								?>
							</div>
						</div>

					</form>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
			</div>
		</div>
	</div>
</div>