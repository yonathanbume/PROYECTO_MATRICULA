<?php
	include('database.php');
	
	$txtEmail=$_POST['txtEmail'];
	$txtPaswword=$_POST['txtPaswword'];
	$txtNombres=$_POST['txtNombres'];
	$Apellidos=$_POST['Apellidos'];
	$txtDireccion=$_POST['txtDireccion'];
	$txtCelular=$_POST['txtCelular'];
	$SelectCategoria=$_POST['SelectCategoria'];

	$editar = false;
	$eliminar = false;

	if ($SelectCategoria=='Admin')
	{
		$editar = true;
		$eliminar = true;
	}

	try
	{
		$result = $mysqli->query("insert into usuario values (0,'".$Apellidos."','".$txtNombres."','".$txtDireccion."','".$txtCelular."','".$txtEmail."','".$txtEmail."','".$txtPaswword."','".$editar."','".$eliminar."','".$SelectCategoria."')");

		header('location:index.php');
	}
	catch(\Exception $e)
	{
		echo ($e->getMessage());
	}
?>