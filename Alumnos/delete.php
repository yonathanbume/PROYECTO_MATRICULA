<?php
	include('../database.php');
	$id=$_GET['id'];
	$mysqli->query("delete from alumno where CodigoAlumno=$id");
	unlink("alumno_images/".$id.".jpg");
	header('location:Alumnos.php');
?>