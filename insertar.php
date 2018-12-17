<?php  

$usuario=$_POST['usuario'];
$passw=$_POST['contrasena'];

include("conexion.php"); 

$sql="INSERT INTO usuarios (usu, pss) VALUES ('$usuario','$passw')";
mysqli_query($conexion, $sql);
require'sesion.php';
?>