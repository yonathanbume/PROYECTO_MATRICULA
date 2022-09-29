<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
	<h1>Docentes</h1>
<?php
	include('../database.php');
	$result=$mysqli->query("select * from docente");
?>
	<table style="border-collapse: collapse;">
		<thead>
			<tr style="border: 1px solid black;">
				<th style="border: 1px solid black;">DNI</th>
				<th style="border: 1px solid black;">Apellidos</th>
				<th style="border: 1px solid black;">Nombres</th>
				<th style="border: 1px solid black;">Correo</th>
				<th style="border: 1px solid black;">Celular</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc())
				{
			?>
			<tr style="border: 1px solid black;">
				<td style="border: 1px solid black;"><?php echo $row['DNI']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Apellidos']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Nombres']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Correo']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Celular']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>