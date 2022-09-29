<?php
	include('../database.php');
	$id=$_GET['id'];
	$nombre=$_POST['txtNombre'];
	$telefono=$_POST['txtTelefono'];
	$url=$_POST['txtURL'];

	$mysqli->query("update escuelaprofesional set NombreEscuela='$nombre', Telefono='$telefono', URL='$url' where IDEscuela=$id");

	$img=$_FILES["fileImagen"]["tmp_name"];
	move_uploaded_file($img, "escuelaAcademica_images/".$id.".jpg");

	header('location:EscuelaAcademica.php');
?>