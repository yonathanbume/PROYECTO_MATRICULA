<?php
include('../database.php');

$idMatricula = $_POST['txtIdMatricula'];

for ($i=0; $i < 10; $i++)
{
    if (isset($_POST['txtCurso'.$i]))
    {
        $idCurso = $_POST['txtCurso'.$i];
        $txtCurso=$_POST['selectCurso'.$i];

        $mysqli->query("update detalle_matricula set
        Notas='20', CodigoCurso='".$txtCurso."' where IDMatricula='".$idMatricula."' and CodigoCurso='".$idCurso."'");
    }
}

header('location:matricula.php');
?>