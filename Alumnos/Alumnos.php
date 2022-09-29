<?php include('../template/Alumnos.html'); ?>
<div class="container">
	<br /><br />
	<div class="row header col-sm-12" style="text-align:center;color:black">
		<span class="pull-left">
			<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
				<span class="glyphicon glyphicon-plus"></span> Agregar Nuevo
			</a></span>
		<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
			<thead>
				<th>Imagen</th>
				<th>DNI</th>
				<th>Apellidos</th>
				<th>Nombres</th>
				<th>Correo</th>
				<th>Dirección</th>
				<th>Ubigeo</th>
				<th>Celular</th>
				<th>Lugar de nacimiento</th>
			</thead>
			<tbody>
				<?php
					include('../database.php');
					$result=$mysqli->query("select * from alumno");
					while($row=$result->fetch_assoc())
					{
					$img = "http://localhost/SistemaMatricula/Alumnos/alumno_images/".$row['CodigoAlumno']. ".jpg";
				?>
				<tr>
					<td><img src='<?php echo $img ?>' height="50px" width="50px"></td>
					<td><?php echo $row['DNI']; ?></td>
					<td><?php echo $row['Nombres']; ?></td>
					<td><?php echo $row['Apellidos']; ?></td>
					<td><?php echo $row['Correo']; ?></td>
					<td><?php echo $row['Direccion']; ?></td>
					<td><?php echo $row['Ubigeo']; ?></td>
					<td><?php echo $row['Celular']; ?></td>
					<td><?php echo $row['LugarNacimiento']; ?></td>
					<td>
						<a href="#detail<?php echo $row['CodigoAlumno']; ?>" data-toggle="modal" class="btn btn-success btn-sm">Detalles</a>&nbsp;
						<a href="#edit<?php echo $row['CodigoAlumno']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">Editar</a>&nbsp;
						<a href="#del<?php echo $row['CodigoAlumno']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">Eliminar</a>
						<?php include('show_detail_modal.php'); ?>
						<?php include('show_edit_modal.php'); ?>
						<?php include('show_delete_modal.php'); ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<!-- include insert modal -->
	<?php include('show_add_modal.php'); ?>
	<!-- End -->
</div>
<?php include('../template/footer.html'); ?>