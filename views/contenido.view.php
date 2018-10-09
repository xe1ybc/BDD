<?php
 $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'login';
try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}catch(PDOException $e){
    die('Conexión fallida:' .$e->getMessage());
}

$conexion=mysqli_connect('localhost', 'root', '', 'login');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
     initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/estilos.css">
    <title>Contenido</title>
</head>
<body>
   
        <h1 class="titulo">Consulta los registros existentes</h1>
        <a href="cerrar.php">Cerrar Sesion</a>
        <hr class="border">

        
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Nombre:" name="nombre">
        <br>

        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <br>

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <br>

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>

        <label for="terminos">Aceptas los Terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>
        <input type="submit" value="Enviar">
    </form>


      
</body>
</html>
