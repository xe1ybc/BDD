<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Registro</title>
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
                    <h2 id="subtitulo">Estas a punto de comprar: "combo estudiante"</h2>
                </div> 
            </div>
        
        <div id="container" class="login">
            <form action="compra.php" method="post" >
                <table id="tabla" align="center">
                    <tr id="tr1">
                        <td id="p1">Domicilio</td>
                        <td><input type="text" id="nombre" name="fmdom"></td>
                    </tr>
                
                    <tr id="caducidad">
                        <td id="p2">Fecha de caducidad</td>
                        <td><input type="text" id="1" name="fm1"></td>
                        <td><input type="text" id="2" name="fm2"></td>
                        <td><input type="text" id="3" name="fm3"></td>
                    </tr>
                    
                    <tr id="tr3">
                        <td id="p1">Titular</td>
                        <td><input type="text" id="email" name="fmtitular"></td>
                    </tr>
                
                    <tr id="tr4">
                        <td id="p2">Número de la tarjeta</td>
                        <td><input type="text" id="tarjeta" maxlength="25" name="fmnumero"></td>
                    </tr>
                    
                    <tr id="tr5">
                        <td>Código de seguridad</td>
                        <td><input type="password" name="fmcodigo"></td>
                    </tr>
                    
                </table>
                <button type="submit"id="boton" align="center">Comprar</button>
            </form>
        </div>
        <div id="pie">
            <p>Copyright &copy; 2018 Javier Arturo Zepeda Rojas, Elías Isaac García Chiñas - Todos los derechos reservados</p>
        </div>
    </body>
</html>