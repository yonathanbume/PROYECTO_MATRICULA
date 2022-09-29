<div class="modal fade" id="del<?php echo $row['IDMatricula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center><h4 class="modal-title" id="myModalLabel">Eliminar</h4></center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<h5><center>¿Deseas Eliminar la matricula con el ID: <strong><?php echo $row['IDMatricula']; ?>?</strong></center></h5>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
				<a href="delete.php?id=<?php echo $row['IDMatricula']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
			</div>
		</div>
	</div>
</div>