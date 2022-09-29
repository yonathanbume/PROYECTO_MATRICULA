<?php
	include('../database.php');

	$txtCodigo=$_POST['txtCodigo'];
	$txtDNI=$_POST['txtDNI'];
	$txtApellidos=$_POST['txtApellidos'];
	$txtNombre=$_POST['txtNombre'];
	$txtCorreo=$_POST['txtCorreo'];
	$txtDireccion=$_POST['txtDireccion'];
	$txtUbigeo=$_POST['txtUbigeo'];
	$txtCelular=$_POST['txtCelular'];
	$txtNacimiento=$_POST['txtNacimiento'];
	$selectEscuela=$_POST['selectEscuela'];

	$mysqli->query("update alumno set DNI='$txtDNI', Apellidos='$txtApellidos', Nombres='$txtNombre', Correo='$txtCorreo', Direccion='$txtDireccion', Ubigeo='$txtUbigeo', Celular='$txtCelular', LugarNacimiento='$txtNacimiento', IDEscuela='$selectEscuela' where CodigoAlumno=$txtCodigo");

	$img=$_FILES["fileImagen"]["tmp_name"];
	move_uploaded_file($img, "alumno_images/".$txtCodigo.".jpg");

	header('location:Alumnos.php');
 
?>