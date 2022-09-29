<?php include('../template/Evaluar.html'); ?>
<div class="container">
	<br /><br />
	<div class="row header col-sm-12" style="text-align:center;color:black">
		<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
			<thead>
                <th>Codigo Alumno</th>
				<th>Alumno</th>
                <th>Opciones</th>
			</thead>
			<tbody id="tableEvaluar"> 
				<?php
					include('../database.php');
					$result=$mysqli->query("SELECT * from detalle_matricula inner join matricula on matricula.IDMatricula=detalle_matricula.IDMatricula INNER JOIN alumno ON alumno.CodigoAlumno=matricula.CodigoAlumno where CodigoCurso='".$_GET['id']."';");
					while($row=$result->fetch_assoc())
					{
				?>
				<tr>
                    <td><?php echo $row['CodigoAlumno'];?></td>
                    <td><?php echo ($row['Nombres'].' '.$row['Apellidos']); ?></td>
					<td>
						<?php
							$registro=$mysqli->query("SELECT * from detalle_registro WHERE IDDetalleM='".$row['IDDetalleM']."'");
							if($registro->num_rows <= 0)
							{
						?>
							<a href="#evaluar" data-toggle="modal" class="btn btn-success btn-sm btnEvaluar" data-id="<?php echo ($row['IDDetalleM']) ?>">Evaluar</a>&nbsp;
						<?php
							}
							else
							{
						?>
							<a href="#verNotas" data-toggle="modal" class="btn btn-primary btn-sm btnEvaluar" data-id="<?php echo ($row['IDDetalleM']) ?>">Ver notas</a>&nbsp;
						<?php
							}
						?>
						<?php include('verNotas.php'); ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
    <?php include('modalEvaluar.php'); ?>
</div>
<script>
    $('#tableEvaluar').on('click', '.btnEvaluar', function()
	{
        var index = $(this).attr('data-id');
        $('#idDetalleMatricula').val(index);
	});

	$('#txtPP1').on('change', function()
	{
		var prom1 = (parseInt($('#txtPC1').val())+parseInt($('#txtPP1').val()))/2;
		$('#txtPA1').val(prom1);
	});

	$('#txtPP2').on('change', function()
	{
		var prom2 = (parseInt($('#txtPC2').val())+parseInt($('#txtPP2').val()))/2;
		$('#txtPA2').val(prom2);
	});

	$('#txtPP3').on('change', function()
	{
		var prom3 = (parseInt($('#txtPC3').val())+parseInt($('#txtPP3').val()))/2;
		$('#txtPA3').val(prom3);
		$('#txtPF').val(((parseInt($('#txtPA1').val())+parseInt($('#txtPA2').val())+parseInt($('#txtPA3').val()))/3).toFixed(2));
	});
</script>
<?php include('../template/footer.html'); ?>