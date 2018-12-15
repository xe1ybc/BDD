<?php
$conexion=mysqli_connect ("127.0.0.1","root","");
mysqli_select_db($conexion, "registro");
$sql="INSERT INTO datos (usuario, contrasena) VALUES ('".$_POST['fmusuario']."', '".$_POST['fmcontrasena']."')";
mysqli_query($conexion, $sql);
?>
