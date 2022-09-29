<?php
include('../database.php');
 
$txtCodigo=$_POST['txtCodigo'];
$txtCodigoDocente=$_POST['selectDocente'];
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

$mysqli->query("insert into curso
(CodigoCurso, CodigoDocente, NombreCurso, Categoria, HT, HP, HL,TH,CREDITOS, PreRequisito, Estado, IDEscuela) values
('$txtCodigo', '$txtCodigoDocente', '$txtNombre', '$txtCategoria', $txtHT, $txtHP, $txtHL, $txtTH, $txtCreditos, '$selectPreRequisito', $selectEstado, $selectEscuela)");

header('location:Cursos.php');
?>