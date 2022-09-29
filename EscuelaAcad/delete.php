<?php
include('../database.php');
$id=$_GET['id'];
$mysqli->query("delete from escuelaprofesional where IDEscuela=$id");
unlink("escuelaAcademica_images/".$id.".jpg");
header('location:EscuelaAcademica.php');
?>