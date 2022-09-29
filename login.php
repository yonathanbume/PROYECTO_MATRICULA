<?php
	include('database.php');
	
	$txtEmail=$_POST['txtEmailLogin'];
	$txtPassword=$_POST['txtPaswwordLogin'];
	$txtTipo=$_POST['txtTipo'];

	session_start();

	$_SESSION['idSemestre'] = '1';

	if($txtTipo=='1')
	{
		$result = $mysqli->query("SELECT * from alumno inner join escuelaprofesional on escuelaprofesional.IDEscuela=alumno.IDEscuela where Correo='".$txtEmail."' and DNI='".$txtPassword."'");

		if($result->num_rows == 1)
		{			
			while($obj = $result->fetch_object())
			{
				$_SESSION['id'] = $obj->CodigoAlumno;
				$_SESSION['nombre'] = $obj->Nombres;
				$_SESSION['apellidos'] = $obj->Apellidos;
				$_SESSION['email'] = $obj->Correo;
				$_SESSION['IDescuela'] = $obj->IDEscuela;
				$_SESSION['escuela'] = $obj->NombreEscuela;
				$_SESSION['categoria'] = 'Alumno';
    		}
		}
	}

	if($txtTipo=='2')
	{
		$result = $mysqli->query("SELECT * from docente inner join escuelaprofesional on escuelaprofesional.IDEscuela=docente.IDEscuela where Correo='".$txtEmail."' and Password='".$txtPassword."'");

		if($result->num_rows == 1)
		{			
			while($obj = $result->fetch_object())
			{
				$_SESSION['id'] = $obj->CodigoDocente;
				$_SESSION['nombre'] = $obj->Nombres;
				$_SESSION['apellidos'] = $obj->Apellidos;
				$_SESSION['email'] = $obj->Correo;
				$_SESSION['IDescuela'] = $obj->IDEscuela;
				$_SESSION['escuela'] = $obj->NombreEscuela;
				$_SESSION['categoria'] = 'Docente';
    		}
		}
	}

	if($txtTipo=='3')
	{
		$result = $mysqli->query("select * from usuario where Correo='".$txtEmail."' and Password='".$txtPassword."'");

		if($result->num_rows == 1)
		{			
			while($obj = $result->fetch_object())
			{
				$_SESSION['id'] = $obj->idUsuario;
				$_SESSION['nombre'] = $obj->Nombres;
				$_SESSION['apellidos'] = $obj->Appelidos;
				$_SESSION['email'] = $obj->Correo;
				$_SESSION['IDescuela'] = '0';
				$_SESSION['escuela'] = '0';
				$_SESSION['categoria'] = $obj->Categoria;
    		}
		}

	}

	header('location:index.php');
?>