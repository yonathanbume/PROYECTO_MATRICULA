<?php
    include('../database.php');
    $id=$_GET['id'];
    $mysqli->query("delete from curso where CodigoCurso='$id'");
    header('location:Cursos.php');
?>