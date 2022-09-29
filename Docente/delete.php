<?php
    include('../database.php');
    $id=$_GET['id'];
    $mysqli->query("delete from docente where CodigoDocente=$id");
    unlink("docente_images/".$id.".jpg");
    header('location:Docente.php');
?>