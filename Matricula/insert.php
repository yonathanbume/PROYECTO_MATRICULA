<?php
include('../database.php');
 
$FechaMatricula=date("Y/m/d");
$NumeroCredito=$_POST['txtNroCreditos'];
$MaximoCreditos=$_POST['txtMaximoCreditos'];
$MinimoCreditos=$_POST['txtMinimoCreditos'];
$CodigoAlumno=$_POST['selectAlumno'];
$IDSemestre=$_POST['selectSemestre'];
$IDEscuela=$_POST['selectEscuela'];

$mysqli->query("insert into matricula values ('0', '".$FechaMatricula."', '".$NumeroCredito."', '".$MaximoCreditos."', '".$MinimoCreditos."', '".$CodigoAlumno."', '".$IDSemestre."', '".$IDEscuela."');");

$idMatricula = $mysqli->insert_id;

for ($i=0; $i < 10; $i++)
{
    if (isset($_POST['txtCurso'.$i]))
    {
        $txtCurso=$_POST['txtCurso'.$i];
        $mysqli->query("insert into detalle_matricula values
        (0, '20', '".$idMatricula."', '".$txtCurso."')");
    }
}

header('location:matricula.php');
?>