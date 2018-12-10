<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/styles.css">
	<title>Iniciar Sesión</title>
</head>
<body>
	     <header class="encabezado">
         <img class="imagen" src="img/12.svg" alt="User">
        
      </header>
      
      
       
      <div class="login-box">

      	
  
   <p class="titulo2">Iniciar sesión en BDD</p>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">

            <div class="form-group">
            <p class="titulo1">Nombre de usuario o email</p>
			<input type="text" name="usuario" class="usuario" placeholder="Uasuario11">
            </div>

            <div class="form-group">
            	<p class="titulo1">Contraseña</p>
				<input type="password" name="password" class="password_btn" placeholder="tecleame">
				 <!--<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> -->
				 
			 </div>

				<div class="form-group"><input type="submit" name="submit" value="Iniciar sesión" class="login-box">

				</div>
               
			
				
                <?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>
		
		<div class="posicion-link">
			
		<p class="texto-registrate">
           <!-- <a href="contraseña.html">Olvide mi contraseña</a><p>  /  </p> -->
             <a href="registrate.php">Crear cuenta</a>
        </p>

        </div>

		
	</div>
</body>
</html>