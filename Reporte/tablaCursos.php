<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
	<h1>Cursos</h1>
<?php
	include('../database.php');
	$result=$mysqli->query("SELECT * from curso INNER JOIN docente ON curso.CodigoDocente=docente.CodigoDocente;");
?>
	<table style="border-collapse: collapse;">
		<thead>
			<tr style="border: 1px solid black;">
				<th style="border: 1px solid black;">Docente</th>
				<th style="border: 1px solid black;">Nombre</th>
				<th style="border: 1px solid black;">Categoria</th>
				<th style="border: 1px solid black;">HT</th>
				<th style="border: 1px solid black;">HP</th>
				<th style="border: 1px solid black;">HL</th>
				<th style="border: 1px solid black;">TH</th>
				<th style="border: 1px solid black;">Creditos</th>
				<th style="border: 1px solid black;">Pre requeisito</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc())
				{
			?>
			<tr style="border: 1px solid black;">
				<td style="border: 1px solid black;"><?php echo ($row['Nombres'].' '.$row['Apellidos']); ?></td>
				<td style="border: 1px solid black;"><?php echo $row['NombreCurso']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Categoria']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['HT']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['HP']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['HL']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['TH']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['CREDITOS']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['PreRequisito']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>