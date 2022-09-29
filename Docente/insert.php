<?php
	include('../database.php');

	$txtCodigo=$_POST['txtCodigo'];
	$txtDNI=$_POST['txtDNI'];
	$txtApellidos=$_POST['txtApellidos'];
	$txtNombres=$_POST['txtNombres'];
	$txtCorreo=$_POST['txtCorreo'];
	$txtPassword=$_POST['txtPassword'];
	$txtCelular=$_POST['txtCelular'];
	$selectEscuela=$_POST['selectEscuela'];
	$fileImagen=$_POST['fileImagen'];

	$mysqli->query("insert into docente (CodigoDocente, DNI, Apellidos, Nombres, Correo, Password, Celular, IDEscuela) values ('$txtCodigo','$txtDNI','$txtApellidos','$txtNombres','$txtCorreo', '$txtPassword', '$txtCelular','$selectEscuela')");

	$img=$_FILES["fileImagen"]["tmp_name"];
	move_uploaded_file($img, "docente_images/".$txtCodigo.".jpg");

	header('location:Docente.php');
?>