<?php
include("conexion.php");
$Usuario=$_POST['Usuario'];
$Contrasena=$_POST['Contrasena'];
$CorreoElectronico=$_POST['Correo'];
$Telefono=$_POST['Telefono'];
$query="INSERT INTO usuarios(Usuario,Contrasena,CorreoElectronico,Telefono)VALUES('$Usuario','$Contrasena','$CorreoElectronico','$Telefono')";
$resultado=$conexion ->query($query);
if($resultado){

	include("index.php");
}
else{

	echo"no registrado";

}
?>
