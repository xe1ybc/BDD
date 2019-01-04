<?php
$conexion=mysqli_connect( "127.0.0.1","root","");
$db=mysqli_select_db($conexion,"snapchat");
    $sql="INSERT INTO registro (nombre, correelectronico) VALUES ('".$_POST['fmnombre']."', '".$_POST['fmcorreelectronico']."')";
echo $sql;
mysqli_query($conexion, $sql);
?>   