<?php
	include('../database.php');

	$nombreEscuela=$_POST['txtNombre'];
	$url=$_POST['txtURL'];
	$telefono=$_POST['txtTelefono'];

	$mysqli->query("insert into escuelaprofesional (nombreEscuela, URL, Telefono) values ('$nombreEscuela','$url','$telefono')");

	$res = $mysqli->query("select IDEscuela from escuelaprofesional order by IDEscuela desc");
	$row = $res->fetch_row();
	$id = $row[0];
	$img=$_FILES["fileImagen"]["tmp_name"];
	move_uploaded_file($img, "escuelaAcademica_images/".$id.".jpg");

	header('location:EscuelaAcademica.php');
?>