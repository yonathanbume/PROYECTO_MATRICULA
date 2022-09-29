<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
	<h1>Constancia matricula</h1>
<?php
	include('../database.php');
    session_start();
	$result=$mysqli->query("SELECT * from detalle_matricula INNER JOIN matricula ON detalle_matricula.IDMatricula = matricula.IDMatricula INNER JOIN curso ON detalle_matricula.CodigoCurso = curso.CodigoCurso where matricula.CodigoAlumno='".$_SESSION['id']."';");
?>
<p><span style="font-weight: bold;">Nombres: </span><?php echo($_SESSION['nombre']. ' '. $_SESSION['apellidos']) ?></p>
<p><span style="font-weight: bold;">Escuela: </span><?php echo($_SESSION['escuela']) ?></p>

	<table style="border-collapse: collapse;">
		<thead>
			<tr style="border: 1px solid black;">
				<th style="border: 1px solid black;">Curso</th>
				<th style="border: 1px solid black;">Creditos</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc())
				{
			?>
			<tr style="border: 1px solid black;">
				<td style="border: 1px solid black;"><?php echo $row['NombreCurso']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['CREDITOS']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

<p><span style="font-weight: bold;">Fecha: </span><?php echo(date("Y-m-d H:i:s")); ?></p>
</body>
</html>