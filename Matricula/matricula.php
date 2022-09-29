<?php include('../template/Matricula.html'); include('../database.php'); ?>
<div class="container">
	<br /><br />
	<div class="row header col-sm-12" style="text-align:center;color:black">
	<?php
		if($_SESSION['categoria'] == 'Alumno')
		{
			$result=$mysqli->query("SELECT * FROM matricula INNER JOIN semestreacademico on matricula.IDSemestre = semestreacademico.IDSemestre INNER JOIN escuelaprofesional ON escuelaprofesional.IDEscuela=matricula.IDEscuela INNER JOIN alumno ON alumno.CodigoAlumno=matricula.CodigoAlumno where matricula.CodigoAlumno='".$_SESSION['id']."';");
		}
		else
		{
			$result=$mysqli->query("SELECT * FROM matricula INNER JOIN semestreacademico on matricula.IDSemestre = semestreacademico.IDSemestre INNER JOIN escuelaprofesional ON escuelaprofesional.IDEscuela=matricula.IDEscuela INNER JOIN alumno ON alumno.CodigoAlumno=matricula.CodigoAlumno;");
		}
	?>
		<span class="pull-left">
			<?php if($result->num_rows <= 0){
			?>
			<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
			<span class="glyphicon glyphicon-plus"></span> Agregar Nuevo
			</a></span>
			<?php } ?>
			<br><br>
		<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
			<thead>
				<th>ID</th>
				<th>Fecha Matricula</th>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Numero Creditos</th>
				<th>Minimo Creditos</th>
				<th>Maximo Creditos</th>
				<th>ID Semestre</th>
				<th>ID Escuela</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<?php
					while($row=$result->fetch_assoc())
					{
				?>
				<tr>
					<td><?php echo $row['IDMatricula']; ?></td>
					<td><?php echo $row['FechaMatricula']; ?></td>
					<td><?php echo $row['CodigoAlumno']; ?></td>
					<td><?php echo $row['Nombres']; ?></td>
					<td><?php echo $row['Apellidos']; ?></td>
					<td><?php echo $row['NumeroCredito']; ?></td>
					<td><?php echo $row['MinimoCreditos']; ?></td>
					<td><?php echo $row['MaximoCreditos']; ?></td>
					<td><?php echo $row['Descripcion']; ?></td>
					<td><?php echo $row['NombreEscuela']; ?></td>
					<td>
						<a href="#detail<?php echo $row['IDMatricula']; ?>" data-toggle="modal" class="btn btn-success btn-sm mb-1">Detalles</a>&nbsp;
						<a href="#del<?php echo $row['IDMatricula']; ?>" data-toggle="modal" class="btn btn-danger btn-sm mb-1">Eliminar</a>
						<a href="../Reporte/constancia.php" class="btn btn-primary btn-sm mb-1">Constancia</a>
						<?php include('show_detail_modal.php'); ?>
						<?php //include('show_edit_modal.php'); ?>
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