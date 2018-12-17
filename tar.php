<?php  

$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];

include("conexion.php"); 
$sql="INSERT INTO tarjeta (c1,c2,c3,c4) VALUES ('$n1','$n2','$n3','$n4')";
mysqli_query($conexion, $sql);
 require 'compra.php';

?>

