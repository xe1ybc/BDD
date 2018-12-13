<?php
include ("conexion.php");

$d1=$_POST['n1'];
$d2=$_POST['n2'];
$d3=$_POST['n3'];
$d4=$_POST['n4'];
$sqli="INSERT INTO tarjeta (c1,c2,c3,c4) VALUES('$d1','$d2','$d3','$d4')";
mysqli_query($conexion,$sqli);

?>