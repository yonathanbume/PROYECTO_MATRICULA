<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['IDMatricula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3> Detalles </h3>
			</div>
			<div class="modal-body"> 
				<div class="container-fluid">
				<?php
				$resultDetail=$mysqli->query("SELECT * from detalle_matricula INNER JOIN curso ON curso.CodigoCurso=detalle_matricula.CodigoCurso WHERE IDMatricula='".$row['IDMatricula']."'");
				while($detailRow=$resultDetail->fetch_assoc())
        		{
				?>
				<div class="row">
					<div class="col-md-12 text-center">
						<label for="curso"><?php echo $detailRow['NombreCurso'] ?></label>
					</div>
				</div>
					<?php
					$notas=$mysqli->query("SELECT * from detalle_registro WHERE IDDetalleM='".$detailRow['IDDetalleM']."'");
					$rowNotas=$notas->fetch_assoc();
					?>
        			<table class="table table-responsive">
						<thead>
        					<th>PC1</th>
							<th>PC2</th>
							<th>PC3</th>
							<th>PP1</th>
							<th>PP2</th>
							<th>PP3</th>
							<th>PA1</th>
							<th>PA2</th>
							<th>PA3</th>
							<th>PF</th>
        				</thead>
						<tbody>
						<tr>
							<td><?php echo $rowNotas['PC1']; ?></td>
							<td><?php echo $rowNotas['PC2']; ?></td>
							<td><?php echo $rowNotas['PC3']; ?></td>
							<td><?php echo $rowNotas['PP1']; ?></td>
							<td><?php echo $rowNotas['PP2']; ?></td>
							<td><?php echo $rowNotas['PP3']; ?></td>
							<td><?php echo $rowNotas['PA1']; ?></td>
							<td><?php echo $rowNotas['PA2']; ?></td>
							<td><?php echo $rowNotas['PA3']; ?></td>
							<td><?php echo $rowNotas['PF']; ?></td>
						</tr>
						</tbody>
        			</table>
				<?php } ?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
			</div>
		</div>
	</div>
</div>