<?php
    include('../database.php');
    
    $txtPC1=$_POST['txtPC1'];
    $txtPC2=$_POST['txtPC2'];
    $txtPC3=$_POST['txtPC3'];
    $txtPP1=$_POST['txtPP1'];
    $txtPP2=$_POST['txtPP2'];
    $txtPP3=$_POST['txtPP3'];
    $txtPA1=$_POST['txtPA1'];
    $txtPA2=$_POST['txtPA2'];
    $txtPA3=$_POST['txtPA3'];
    $txtPF=$_POST['txtPF'];
    $idDetalleMatricula=$_POST['idDetalleMatricula'];
    
    try
    {
        $mysqli->query("insert into detalle_registro values ('0', '".$txtPC1."','".$txtPC2."','".$txtPC3."','".$txtPP1."','".$txtPP2."','".$txtPP3."','".$txtPA1."','".$txtPA2."','".$txtPA3."','".$txtPF."', '0', '".$idDetalleMatricula."')");
    header('location:notas.php');
    }
    catch(\Exception $e)
	{
		echo($e->getMessage());
	}

?>