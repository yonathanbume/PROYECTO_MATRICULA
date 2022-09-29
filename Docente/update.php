<?php
    include('../database.php');

    $txtCodigo=$_POST['txtCodigo'];
	$txtDNI=$_POST['txtDNI'];
	$txtApellidos=$_POST['txtApellidos'];
	$txtNombres=$_POST['txtNombres'];
	$txtCorreo=$_POST['txtCorreo'];
	$txtCelular=$_POST['txtCelular'];
	$selectEscuela=$_POST['selectEscuela'];

    $mysqli->query("update docente set DNI='$txtDNI', Apellidos='$txtApellidos', Nombres='$txtNombres', Correo='$txtCorreo', Celular='$txtCelular', IDEscuela='$selectEscuela' where CodigoDocente=$txtCodigo");

    $img=$_FILES["fileImagen"]["tmp_name"];
	move_uploaded_file($img, "docente_images/".$txtCodigo.".jpg");

    header('location:Docente.php');
 
?>