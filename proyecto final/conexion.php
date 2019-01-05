<?php
$conexion=mysqli_connect("127.0.0.1", "root", "");
$db=mysqli_select_db($conexion, "usuarios");
$sql="INSERT INTO registros (nombre, apellido_paterno, apellido_materno, correo, contrasena) VALUES ('".$_POST['fmnombre']."', '".$_POST['fmapellido_paterno']."', '".$_POST['fmapellido_materno']."', '".$_POST['fmcorreo']."',  '".$_POST['fmcontrasena']."')";
header("Location:test.php");
mysqli_query($conexion,$sql);
    ?> 