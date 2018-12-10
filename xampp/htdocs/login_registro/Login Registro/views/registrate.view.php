<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/styles.css">
	<title>Registrate</title>
</head>
<body>
	<header class="encabezado">
         <img class="imagen" src="img/12.svg" alt="User">
        
      </header>


       
        <div class="login-box">

   <p class="titulo2">Registrate la clase BDD</p>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">

            <div class="form-group">
            <p class="titulo1">Nombre de usuario </p>
			<input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
            	<p class="titulo1">Contraseña</p>
				<input type="password" name="password" class="password" placeholder="Contraseña">
				 <!--<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> -->
				 </div>
				 <div class="form-group">
				 	<p class="titulo1">Repetir contraseña</p>

                
                  <input type="password" name="password2" class="password_btn" placeholder="Repetir Contraseña">
                
            </div>

				<div class="form-group">

					<input type="submit" name="submit" value="Registrar usuario" class="registra">

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
            
            <a href="login.php">Iniciar Sesión</a>
        </p>
			
		

        </div>
</body>
</html>


