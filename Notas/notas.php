<?php include('../template/Notas.html'); ?>
<div class="container">
	<br /><br />
	<div class="row header col-sm-12" style="text-align:center;color:black">
		<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
			<thead>
				<th>Curso</th>
				<th>Categoria</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<?php
					include('../database.php');
					$result=$mysqli->query("SELECT * from curso where CodigoDocente='".$_SESSION['id']."';");
					while($row=$result->fetch_assoc())
					{
				?>
				<tr>
                    <td><?php echo $row['NombreCurso']; ?></td>
					<td><?php echo $row['Categoria']; ?></td>
					<td>
						<a href="evaluar.php?id=<?php echo $row['CodigoCurso']; ?>" class="btn btn-success btn-sm">Ver</a>&nbsp;
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php include('../template/footer.html'); ?>