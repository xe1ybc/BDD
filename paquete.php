<?php  

$paquete=$_POST['paquete'];

include("conexion.php"); 

$sql="INSERT INTO paquete (tipo) VALUES ('$paquete')";
mysqli_query($conexion, $sql);
require'tarjeta.php';
?>
