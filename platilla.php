<!DOCTYPE html>
<html lang="en">
<head>
<title>UNAMBA</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css" />
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="jquery.dataTables.min.css"></style>
<script type="text/javascript" src="jquery.dataTables.min.js"></script>
<script type="text/javascript" src="bootstrap-filestyle.min.js"> </script>
<link href="fonts.css" rel="stylesheet">

<script>
$(document).ready(function(){
	$('#empTable').dataTable();
	$('.file-upload').file_upload();
});
</script>

</head>

<body style="margin:20px auto">
<center>
<h2><span style="font-size:25px; color:black">ESCUELAS ACADEMICAS - UNAMBA</span></h2>
</center>

<div class="container">
<br/><br/>
<div class="row header col-sm-12" style="text-align:center;color:black">
<span class="pull-left">
<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus"></span> Agregar Nuevo
</a></span>

<div style="height:50px;"></div>
<table class="table table-striped table-bordered table-responsive table-hover" id="empTable" >
<thead>
	<th><center>Imagen</center></th>
	<th><center>Nombre</center></th>
	<th><center>Sitio Web</center></th>
	<th><center>Telefono</center></th>
	<th><center>Accciones</center></th>
</thead>
<tbody>

<?php
include('database.php');
$result=$mysqli->query("select * from employee_basics");
while($row=$result->fetch_assoc()){
$img = "http://localhost/proyectoDesarrollo/EscuelaAcad/profile_images/".$row['id']. ".jpg";
?>
<tr>
	<td> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['post']; ?></td>
	<td><?php echo $row['phone']; ?></td>
	<td>
<a href="#detail<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm">
Detalles</a>&nbsp;

<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
Editar</a>&nbsp;

<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">
Eliminar</a>

<!-- include edit modal -->
<?php include('EscuelaAcad/show_detail_modal.php'); ?>
<!-- End -->
<!-- include edit modal -->
<?php include('EscuelaAcad/show_edit_modal.php'); ?>
<!-- End -->
<!-- include delete modal -->
<?php include('EscuelaAcad/show_delete_modal.php'); ?>
<!-- End -->
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<!-- include insert modal -->
<?php include('EscuelaAcad/show_add_modal.php'); ?>
<!-- End -->
</div>
</body>
</html>