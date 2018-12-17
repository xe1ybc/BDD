<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
<style>
div{
	font-family: Century Gothic;
border-radius: 40px 0px 40px 0px;
    background-color: rgba(52, 73, 94, 0.7);
    width:500px;
    height: 130px;
    position: absolute;
   top: 50%;
   left: 50%;
   margin: -15% 0 0 -17%;
   border: 3px #F4D03F   solid;
}
label{
	font-family: Century Gothic;
	color: #FBFD7D;
}
  .botonb{
    text-decoration: none;
    padding: 10px;
    font-weight: 100;
    font-size: 10px;
    color: #34495E;
    background-color: #FBFD7D;
    border-radius: 6px;
    border: 3px solid #34495E;
    font-family: Century Gothic;
  }
</style>
</head>
<body background="colo2.jpg" bgproperties="fixed">
	<div><center><label>R E G I S T R O</label></center>
	<CENTER>
	<form action="insertar.php" method="POST" onsubmit="return validacion()">
			<center><input type="text" name="usuario" value="" placeholder="usuario..." class="input-48" required/></center>
			<center><input type="password" name="contrasena" value="" placeholder="contrasena..." class="input-48" required/></center>
			<center><input type="password" name="contrasena1" value="" placeholder="Repita password" class="input-48" required /></center>

			<input class="botonb" type="submit" value="Aceptar"/>
            <a href="index.php"><input class="botonb" type="button" value="regresar"></a>

		</form></div>

</body>
</html>