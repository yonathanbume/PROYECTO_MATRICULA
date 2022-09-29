<div class="modal fade" id="detail<?php echo $row['IDEscuela']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3> Detalles </h3>
			</div>
			<form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<?php
						$edit=$mysqli->query("select * from escuelaprofesional where IDEscuela=".$row['IDEscuela']);
						$erow=$edit->fetch_assoc();
					?>
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<?php $img = "http://localhost/SistemaMatricula/EscuelaAcad/escuelaAcademica_images/".$row['IDEscuela']. ".jpg";?>
								<img src='<?php echo $img ?>' height="170px" width="170px" />
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label style="position:relative; top:7px;">Nombre:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['NombreEscuela']; ?>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Telefono:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['Telefono']; ?>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-4">
								<label class="control-label" style="position:relative; top:7px;">Sitio Web:</label>
							</div>
							<div class="col-lg-8">
								<?php echo $erow['URL']; ?>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
			</div>
		</div>
	</div>
</div>