<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['CodigoAlumno']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
<div class="modal-dialog">
<div class="modal-content">

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3> Detalles </h3>
	</div>
			<div class="modal-body"> 
				<?php
				$edit=$mysqli->query("select * from alumno where CodigoAlumno=".$row['CodigoAlumno']);
				$erow=$edit->fetch_assoc();
				?>
				<div class="container-fluid">
					<form method="POST" action="update.php?id=<?php echo $erow['CodigoAlumno']; ?>" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12" align="center">
								<?php $img = "http://localhost/SistemaMatricula/Alumnos/alumno_images/".$row['CodigoAlumno']. ".jpg";?>
								<img src='<?php echo $img ?>' height="170px" width="170px" />
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Codigo:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['CodigoAlumno']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">DNI:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['DNI']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Apellidos:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['Apellidos']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Nombres:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['Nombres']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Correo:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['Correo']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Direccion:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['Direccion']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Ubigeo:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['Ubigeo']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Celular:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['Celular']; ?>
							</div>
						</div>

						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Lugar Nacimiento:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['LugarNacimiento']; ?>
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