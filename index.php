<!DOCTYPE html>
<html>
<head>
	<title>Login Snapchat</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" href="images/sa2.PNG">
<style>
div{
	font-family: Century Gothic;
border-radius: 40px 0px 40px 0px;
    background-color: rgba(52, 73, 94, 0.7);
    width:500px;
    height: 239px;
    position: absolute;
   top: 50%;
   left: 50%;
   margin: -15% 0 0 -17%;
   border: 3px #F4D03F   solid;
}
  .botona{
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
<div>
<body background="colo2.jpg" bgproperties="fixed">
	<CENTER>
		<center><img src="images/packman.gif" class="img-circle" alt="Cinque Terre" width="100" height="100"> </center>
		<br/><br/>
		<form action="proceso.php" method="POST">
			<center><input type="text" name="usuario" value="" placeholder="usuario..."/></center>
			<center><input type="password" name="contrasena" value="" placeholder="contrasena..."/></center>
			<input class="botona" type="submit" value="Aceptar"/>
            <a href="registro.php"><input class="botona" type="button" value="registrate"></a>
		</form>
	</CENTER></div>
</body>
</html>