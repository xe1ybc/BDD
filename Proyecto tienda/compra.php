<?php
$conexion = new mysqli("127.0.0.1", "root" , "");
$db=mysqli_select_db($conexion, "tiendita");
$sql="INSERT INTO `pago` (`domicilio`, `caducidad1`, `caducidad2`, `caducidad3`, `titular`, `numero`, `codigo`)
VALUES ('".$_POST['fmdom']."', '".$_POST['fm1']."', '".$_POST['fm2']."', '".$_POST['fm3']."', '".$_POST['fmtitular']."', '".$_POST['fmnumero']."', '".$_POST['fmcodigo']."')";

echo("Compra realizada con exito <br>");
echo("Dios te bendiga <br> <br>");
mysqli_query($conexion,$sql);
?>