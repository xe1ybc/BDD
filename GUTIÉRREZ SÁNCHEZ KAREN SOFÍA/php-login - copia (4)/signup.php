<?php
require "database.php";

$message = "";
if (!empty($_POST["email"]) && !empty($_POST["password"])){
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":email",$_POST["email"]);
  $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
  $stmt->bindParam(":password", $password);

  if ($stmt->execute()){
    $message ="Ha creado una cuenta";
  } else {
    $message ="Ha ocurrido un error al crear su cuenta";
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php if(!empty($message)): ?>
  <p><? =$message ?></p>
<?php endif; ?>

  <h1>Regístrate</h1>
<form action="signup.php" method="post">
	<input type="text" name="email" placeholder="ingresa email">
	<input type="password" name="password" placeholder="ingresa password">
  <input type="password" name="confirm_password" placeholder="Confirma tu password">
	<input type="submit" value="Enviar">
  <p><span>o <a href="login.php">Inicia sesión</a></span></p>
	</form>
</html>
