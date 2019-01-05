<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$db="registro";
//conectar con el servidor
if(!($conectar= mysqli_connect($servidor,$usuario,$contrasena,$db))){
echo "no se puede conectar al moto";
die();
}
//verificar conexion
else{
if(!mysqli_select_db($conectar, $db)){
echo "no se puede conectar a la base de dato $dbname";
die();
}
}
//variables
$Nombre= $_POST['nombres'];
$Apellidop= $_POST['apellidopa'];
$Apellidom= $_POST['apellidoma'];
$curp= $_POST['clave'];
$Telefono= $_POST['telefonope'];
$Direccion= $_POST['direc'];
$correo= $_POST['corre'];
//sentencia mysql
$sql= mysqli_query($conectar, "INSERT INTO Datos(nombre,apellidop,apellidom,curp,telefono,direccion,correo) VALUES('$Nombre', '$Apellidop', '$Apellidom', '$curp', '$Telefono', '$Direccion', '$correo')");

if (!$sql) {
	echo "Hubo algún error";
}else{
	echo "Datos guardados<br><a href='index.html'>Volver</a>";
}
mysqli_close($conectar);


?>