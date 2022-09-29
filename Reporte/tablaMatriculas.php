<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
	<h1>Matriculas</h1>
<?php
	include('../database.php');
	$result=$mysqli->query("SELECT * FROM matricula INNER JOIN semestreacademico on matricula.IDSemestre = semestreacademico.IDSemestre INNER JOIN escuelaprofesional ON escuelaprofesional.IDEscuela=matricula.IDEscuela INNER JOIN alumno ON alumno.CodigoAlumno=matricula.CodigoAlumno;");
?>
	<table style="border-collapse: collapse;">
		<thead>
			<tr style="border: 1px solid black;">
				<th style="border: 1px solid black;">ID</th>
				<th style="border: 1px solid black;">Fecha Matricula</th>
				<th style="border: 1px solid black;">Codigo</th>
				<th style="border: 1px solid black;">Nombre</th>
				<th style="border: 1px solid black;">Apellidos</th>
				<th style="border: 1px solid black;">Numero Creditos</th>
				<th style="border: 1px solid black;">Minimo Creditos</th>
				<th style="border: 1px solid black;">Maximo Creditos</th>
				<th style="border: 1px solid black;">ID Semestre</th>
				<th style="border: 1px solid black;">ID Escuela</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc())
				{
			?>
			<tr style="border: 1px solid black;">
				<td style="border: 1px solid black;"><?php echo $row['IDMatricula']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['FechaMatricula']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['CodigoAlumno']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Nombres']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Apellidos']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['NumeroCredito']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['MinimoCreditos']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['MaximoCreditos']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Descripcion']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['NombreEscuela']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>