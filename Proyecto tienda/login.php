<?php
if(isset($_GET["error"]) && $_GET["error"] !="login"){
    header("Location: validacion.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Inicia sesión</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    </head>     
    <body>
        <div id="cabecera">
                <div id="logo">Dios te bendiga</div>
                <div id="menu">
                    <ul>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="registro.php">Categorias</a></li>
                        <li><a href="registro.php">Nuevos</a></li>
                        <li><a href="registro.php">Más comprados</a></li>
                        <li id="login"><a href="login.php">Inicia sesión</a></li>
                        <li id="signup"><a href="registro.php">Registrate</a></li>
                        <li><a href="registro.php"><img src="IMG/buscar.png" width="30" height="30"></a></li>
                        <li><a href="registro.php"><img src="IMG/Carrito.png" width="30" height="30"></a></li>
                    </ul>
                </div> <br>
                <div id="mensaje">
                    <h2>Tiendita "El Xavi"</h2>
                    <h2 id="subtitulo">Inicia sesión para ver los productos</h2>
                </div> 
            </div>
        <div id="container" class="login">
            
            <?php 
            if(isset($_GET["error"])){
                echo "<p class='error'> Usuario y / o Contraseña erroneos. Inténtelo de nuevo. </p>";
            }
            ?>
            
            <form action="validacion.php" method="post" >
                <table id="tabla" align="center">
                    <tr id="tr1">
                        <td id="p1">Correo electrónico</td>
                        <td><input type="email" id="email" name="correo"></td>
                    </tr>
                
                    <tr id="tr2">
                        <td id="p2">Contraseña</td>
                        <td><input type="password" id="contraseña" maxlength="25" name="contrasena"></td>
                    </tr>
                </table>
                <button type="submit"id="boton" align="center">Enviar datos</button>
            </form>
        </div>
        <div id="pie">
            <p>Copyright &copy; 2018 Javier Arturo Zepeda Rojas, Elías Isaac García Chiñas - Todos los derechos reservados</p>
        </div>
    </body>
</html>