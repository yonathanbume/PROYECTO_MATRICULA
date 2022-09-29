<?php include('../template/Cursos.html'); ?>
<div class="container">
	<br /><br />
	<div class="row header col-sm-12" style="text-align:center;color:black">
		<span class="pull-left">
			<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
				<span class="glyphicon glyphicon-plus"></span> Agregar Nuevo
			</a>
		</span>
		<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
			<thead>
				<th>Docente</th>
				<th>Nombre</th>
				<th>Categoria</th>
				<th>HT</th>
				<th>HP</th>
				<th>HL</th>
				<th>TH</th>
				<th>Creditos</th>
				<th>Pre requeisito</th>
				<th>Estado</th>
				<th>Operaciones</th>
			</thead>
			<tbody>
				<?php
					include('../database.php');
					$result=$mysqli->query("SELECT * from curso INNER JOIN docente ON curso.CodigoDocente=docente.CodigoDocente;");
					while($row=$result->fetch_assoc())
					{
					?>
				<tr>
					<td><?php echo ($row['Nombres'].' '.$row['Apellidos']); ?></td>
					<td><?php echo $row['NombreCurso']; ?></td>
					<td><?php echo $row['Categoria']; ?></td>
					<td><?php echo $row['HT']; ?></td>
					<td><?php echo $row['HP']; ?></td>
					<td><?php echo $row['HL']; ?></td>
					<td><?php echo $row['TH']; ?></td>
					<td><?php echo $row['CREDITOS']; ?></td>
					<td><?php echo $row['PreRequisito']; ?></td>
					<td><?php echo ($row['Estado']==1 ? 'Habilitado' : 'Deshabilitado')?></td>
					<td>
						<a href="#detail<?php echo $row['CodigoCurso']; ?>" data-toggle="modal" class="btn btn-success btn-sm">Detalles</a>&nbsp;
						<a href="#edit<?php echo $row['CodigoCurso']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">Editar</a>&nbsp;
						<a href="#del<?php echo $row['CodigoCurso']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">Eliminar</a>
						<?php include('show_detail_modal.php'); ?>
						<?php include('show_edit_modal.php'); ?>
						<?php include('show_delete_modal.php'); ?>
					</td>
				</tr>
				<?php
						}
					?>
			</tbody>
		</table>
	</div>
	<?php include('show_add_modal.php'); ?>
</div>
<?php include('../template/footer.html'); ?>