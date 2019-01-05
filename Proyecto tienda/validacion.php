<?php  
session_start();
$cor=$_POST['correo'];
$contr=$_POST['contrasena'];

include("cone.php"); 

$proceso = $conexion->query("SELECT * FROM registros WHERE correo='$cor' AND password='$contr' ");
if ($resultado = mysqli_fetch_array($proceso)) {
	$_SESSION['u_usuario'] = $cor;
	header("Location: index.php");
}
else{
    echo("Contraseña o correo incorrectos");
	header("Location: login.php");
}
?>