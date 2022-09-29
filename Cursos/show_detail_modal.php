<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['CodigoCurso']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3> Detalles </h3>
			</div>
			<div class="modal-body">
				<?php
				$edit=$mysqli->query("SELECT * from curso INNER JOIN docente ON curso.CodigoDocente=docente.CodigoDocente WHERE CodigoCurso='".$row['CodigoCurso']."'");
				$erow=$edit->fetch_assoc();
				?>
				<div class="container-fluid">
					<form method="POST" action="update.php?id=<?php echo $erow['CodigoCurso']; ?>" enctype="multipart/form-data">
						
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Docente:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo ($erow['Nombres'].' '.$erow['Apellidos']); ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Codigo:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['CodigoCurso']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Nombre:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['NombreCurso']; ?>
							</div>
						</div>


						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Categoria:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['Categoria']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">HT:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['HT']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">HP:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['HP']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">HL:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['HL']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">TH:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['TH']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Creditos:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['CREDITOS']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Pre-Requisito:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo $erow['PreRequisito']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">Estado:</label>
							</div>
							<div class="col-lg-8" align="left">
								<?php echo ($row['Estado']==1 ? 'Habilitado' : 'Deshabilitado')?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Escuela Academica:</label>
							</div>
							<div class="col-lg-8">
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