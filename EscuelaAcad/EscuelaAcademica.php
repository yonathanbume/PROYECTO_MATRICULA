<?php include('../template/EscuelaAcademica.html'); ?>
<div class="container">
	<br /><br />
	<div class="row header col-sm-12" style="text-align:center;color:black">
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Agregar Nuevo</a></span>
		<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
			<thead>
				<th>Imagen</th>
				<th>Nombre</th>
				<th>URL</th>
				<th>Telefono</th>
				<th>Accciones</th>
			</thead>
			<tbody>
				<?php
					include('../database.php');
					$result=$mysqli->query("select * from escuelaprofesional");
					while($row=$result->fetch_assoc())
					{
						$img = "http://localhost/SistemaMatricula/EscuelaAcad/escuelaAcademica_images/".$row['IDEscuela']. ".jpg";
					?>
				<tr>
					<td><img src='<?php echo $img ?>' height="50px" width="50px"></td>
					<td><?php echo $row['NombreEscuela']; ?></td>
					<td><?php echo $row['URL']; ?></td>
					<td><?php echo $row['Telefono']; ?></td>
					<td>
						<a href="#detail<?php echo $row['IDEscuela']; ?>" data-toggle="modal" class="btn btn-success btn-sm">Detalles</a>&nbsp;
						<a href="#edit<?php echo $row['IDEscuela']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">Editar</a>&nbsp;
						<a href="#del<?php echo $row['IDEscuela']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">Eliminar</a>
						<?php include('show_detail_modal.php'); ?>
						<?php include('show_edit_modal.php'); ?>
						<?php include('show_delete_modal.php'); ?>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
	<?php include('show_add_modal.php'); ?>
</div>
<?php include('../template/footer.html'); ?>
