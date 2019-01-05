<?php
$conexion = new mysqli("127.0.0.1", "root" , "");
$db=mysqli_select_db($conexion, "tiendita");
$sql="INSERT INTO `registros` (`correo`, `password`) VALUES ('".$_POST['fmcorreo']."', '".$_POST['fmcontrasena']."')";
header("Location: inicio.php");
mysqli_query($conexion,$sql);
?>