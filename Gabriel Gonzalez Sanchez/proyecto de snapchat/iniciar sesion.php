<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Inicia Sesión.css">
    <title>Inicia Sesión</title>
</head>
<body>
    <form action="db_insertar.php" method="POST" enctype="multipart/from-data">


    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear Cuenta</span>
        </div>

        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="#">
                <input type="text" placeholder="Usuario" required>
                <input type="password" placeholder="Contraseña" required>
                
            </form>
        </div> 

        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            
                <input type="text"name="Usuario" placeholder="Usuario" required>
                <input type="password"name="Contrasena" placeholder="Contraseña" required>
                <input type="email" name="Correo" placeholder="Correo Electronico" require>
                <input type="text" name="Telefono" placeholder="Teléfono">
                <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="reset-password">
            <a href="#">Olvide mi Contraseña</a>
        </div> 
    </div>

    
     <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/main.js"></script>

</body>
</html>