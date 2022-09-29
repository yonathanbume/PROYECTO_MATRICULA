<div class="modal fade" id="evaluar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Evaluar</h4>
			</div>
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="container-fluid">
                        <input type="text" hidden name="idDetalleMatricula" id="idDetalleMatricula" class="form-control">
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PC1</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPC1" name="txtPC1" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PC2</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPC2" name="txtPC2" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PC3</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPC3" name="txtPC3" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PP1</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPP1" name="txtPP1" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PP2</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPP2" name="txtPP2" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PP3</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPP3" name="txtPP3" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PA1</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPA1" name="txtPA1" class="form-control" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PA2</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPA2" name="txtPA2" class="form-control" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PA3</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPA3" name="txtPA3" class="form-control" readonly>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-lg-4" align="left">
								<label style="position:relative; top:7px;">PF</label>
							</div>
							<div class="col-lg-8">
								<input type="text" id="txtPF" name="txtPF" class="form-control" readonly>
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