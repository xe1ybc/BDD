<?php
include("Conector.php");


$con=conect();


if(!$con){
	echo "No se pudo conectar";

	}else{
		$base=@mysqli_select_db(users);


}

$Usuario=$_POST["Usuario"];
$Correo=$_POST['Correo'];
$Contrasena=$_POST['Contrasena'];
$Telefono=$_POST['Telefono'];



$sql="INSERT INTO cuentas VALUES ('$Usuario', '$Correo', '$Contrasena',  '$Telefono')";

$ejecutar=mysqli_query($con,$sql);

if(!$ejecutar){
   echo "No se puedo ejecutar el query";
    }else{
	echo "Datos guardados";
}

?>