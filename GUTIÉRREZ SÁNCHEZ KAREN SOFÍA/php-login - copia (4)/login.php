<?php
session_start();

require "database.php";

if (!empty($_POST["email"]) && !empty($_POST["password"])){
	$records = $conn->prepare("SELECT id, email, password FROM users WHERE email=:email");
	$records->bindParam(":email", $_POST["email"]);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = "";

	if(count($results) > 0 && password_verify($_POST["password"], $results["password"])){
	$_SESSION["user_id"]	= $results["id"];
	header("Location: /php-login/tienda.php");
} else {
	$message = "Lo sentimos, no es compatible";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<CENTER>
		<center><img src="imagenes/on.png" class="img-circle" alt="Cinque Terre" width="300" height="100"> </center>
		<br/><br/>
	<div id ="cabecera"></div>
	<h1>Inicar sesión</h1>
	<?php if (!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
<form action="login.php" method="post">
	<input type="text" name="email" placeholder="ingresa email">
	<input type="password" name="password" placeholder="ingresa password">
	<input type="submit" value="Iniciar Sesión">
<p><a href="signup.php">Regístrate</a></p>
	</form>
</body>
</html>
