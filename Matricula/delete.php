<?php
    include('../database.php');
    $id=$_GET['id'];
    $mysqli->query("delete from matricula where IDMatricula=$id");
    header('location:matricula.php');
?>