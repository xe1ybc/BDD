<!DOCTYPE html>
<html lang="es">  
    <head>
         <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="shortcut icon" href="C:\xampp\htdocs\snap\imágenes\pac.png">
         <meta charset="UTF-8">
        <meta name="Description" content="Compra los mejores productos">
    <title>Inciar sesión en Snapchat</title>
    </head>   
    
    <body>
        <!--contenedor encabezado--> 
        <div id="header">
        </div>
        <!--formulario -->
        <h1>Registrate para poder comprar</h1>
        <form action="conexion.php" method="post">
            <label for="nombre">Ingresa tu nombre</label>
                <input id="nombre" name="fmnombre">  <br><br>    
          
            <label for="apellido paterno">Apellido paterno  </label>
            <input id="apellido paterno" name="fmapellido_paterno"><br><br>
              
            <label for="apellido materno">Apellido materno</label>
            <input id="apellido materno" name="fmapellido_materno"><br><br>
            
            <label for="correo">Ingresa tu correo electronico</label>
            <input email id=correo name="fmcorreo"><br><br>
            
            <label for="contrasena">Ingresa una contraseña</label>
            <input type="password" name="fmcontrasena"><br><br>

            
            
            
            <button type="submit">Enviar</button>
             
            
            
        
        </form>
        
        
        
        
            
        
        </body>

</html>