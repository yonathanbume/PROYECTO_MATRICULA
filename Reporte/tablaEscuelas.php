<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
	<h1>Escuelas</h1>
<?php
	include('../database.php');
	$result=$mysqli->query("select * from escuelaprofesional");
?>
	<table style="border-collapse: collapse;">
		<thead>
			<tr style="border: 1px solid black;">
				<th style="border: 1px solid black;">Nombre</th>
				<th style="border: 1px solid black;">URL</th>
				<th style="border: 1px solid black;">Telefono</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc())
				{
			?>
			<tr style="border: 1px solid black;">
				<td style="border: 1px solid black;"><?php echo $row['NombreEscuela']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['URL']; ?></td>
				<td style="border: 1px solid black;"><?php echo $row['Telefono']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>