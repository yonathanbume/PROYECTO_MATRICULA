<?php
	include('../database.php');

	$txtCodigo=$_POST['txtCodigo'];
	$txtNombre=$_POST['txtNombre'];
	$txtCategoria=$_POST['txtCategoria'];
	$txtHT=$_POST['txtHT'];
	$txtHP=$_POST['txtHP'];
	$txtHL=$_POST['txtHL'];
	$txtTH=$_POST['txtTH'];
	$txtCreditos=$_POST['txtCreditos'];
	$selectPreRequisito=$_POST['selectPreRequisito'];
	$selectEstado=$_POST['selectEstado'];
	$selectEscuela=$_POST['selectEscuela'];

	$mysqli->query("update curso set NombreCurso='$txtNombre',Categoria='$txtCategoria', HT='$txtHT', HP='$txtHP', HL='$txtHL', TH='$txtTH', CREDITOS='$txtCreditos', PreRequisito='$selectPreRequisito', Estado='$selectEstado', IDEscuela='$selectEscuela' where CodigoCurso='$txtCodigo'");

	header('location:Cursos.php'); 
?>