<div class="modal fade" id="verNotas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Notas</h4>
			</div>
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="container-fluid">
                        <?php
                            $notas=$mysqli->query("SELECT * from detalle_registro WHERE IDDetalleM='".$row['IDDetalleM']."'");
                            $rowNotas=$notas->fetch_assoc();
                        ?>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PC1</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPC1v" name="txtPC1v" class="form-control" value="<?php echo $rowNotas['PC1']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PC2</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPC2v" name="txtPC2v" class="form-control" value="<?php echo $rowNotas['PC2']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PC3</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPC3v" name="txtPC3v" class="form-control" value="<?php echo $rowNotas['PC3']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PP1</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPP1v" name="txtPP1v" class="form-control" value="<?php echo $rowNotas['PP1']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PP2</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPP2v" name="txtPP2v" class="form-control" value="<?php echo $rowNotas['PP2']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PP3</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPP3v" name="txtPP3v" class="form-control" value="<?php echo $rowNotas['PP3']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PA1</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPA1v" name="txtPA1v" class="form-control" value="<?php echo $rowNotas['PA1']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PA2</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPA2v" name="txtPA2v" class="form-control" value="<?php echo $rowNotas['PA2']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PA3</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPA3v" name="txtPA3v" class="form-control" value="<?php echo $rowNotas['PA3']; ?>" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PF</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPFv" name="txtPFv" class="form-control" value="<?php echo $rowNotas['PF']; ?>" readonly>
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