<?php
    include('../database.php');
    
    $txtCodigo=$_POST['txtCodigo'];
    $txtDNI=$_POST['txtDNI'];
    $txtApellidos=$_POST['txtApellidos'];
    $txtNombre=$_POST['txtNombre'];
    $txtCorreo=$_POST['txtCorreo'];
    $txtDireccion=$_POST['txtDireccion'];
    $txtUbigeo=$_POST['txtUbigeo'];
    $txtCelular=$_POST['txtCelular'];
    $txtNacimiento=$_POST['txtNacimiento'];
    $selectEscuela=$_POST['selectEscuela'];
    
    $mysqli->query("insert into alumno (CodigoAlumno, DNI, Apellidos, Nombres, Correo, Direccion, Ubigeo, Celular, LugarNacimiento, IDEscuela) values ('$txtCodigo', '$txtDNI','$txtApellidos','$txtNombre','$txtCorreo','$txtDireccion','$txtUbigeo','$txtCelular','$txtNacimiento','$selectEscuela')");
    
    $img=$_FILES["fileImagen"]["tmp_name"];
    move_uploaded_file($img, "alumno_images/".$txtCodigo.".jpg");
    
    header('location:Alumnos.php');
?>