<!DOCTYPE html>
<html>
<head>
	<title>Viki Pass</title>
    <link rel="stylesheet" type="text/css" href="estilo11.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="http://cdn.marketplaceimages.windowsphone.com/v8/images/260bc41c-4a7f-4800-8c10-65bc60c3b879?imageType=ws_icon_medium">
<style>
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
<body background="colo2.jpg" bgproperties="fixed">
	<?php  
	session_start();
	if (isset($_SESSION['u_usuario'])){
		
		echo "<a href='cerrar_sesion.php'>cerrar sesion</a>";
	}
	else{
		header("Location: index.php");
	}

	?>

  <div><center><h1  style="color:#204F95">Viki Pass</h1></center></div>
    <em><div><center><h4  style="color:#204F95">La mejor manera de ver TV Global.</h4></center></div></em>
    <div class="vikiii"><center><img src="images/vikii.png"  alt="libroiro"></center></div>
        <em><div><center><h4  style="color:#808B96">Elige tu plan.</h4></center></div></em>


	<form action="paquete.php" method="POST">
  <div class="row text-center">
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="https://1.viki.io/cms-uploads/uncategorized/standard_grey_track_1509600655_264.svg?e=t&f=t&cb=1"  alt="libroiro">
      <h2 style="color:#27578C"><strong>Basic</strong></h2>
      <div><ul>
<li align="left">HD y sin Anuncios
<li align="left">Ver en TV con Chromecast
<li align="left">3 Semanas de Espera para ver Nuevos Episodios de Standard y Plus
</ul></div>
      <input type="radio" name="paquete" value="Basic">Buy $16.90

    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="https://0.viki.io/uploads/icons/standard_track.svg?e=t&f=t&cb=1"  alt="libroiro">
      <h2 style="color:#27578C"><strong>Standard</strong></h2>
      <div><ul>
      <li align="left">HD y sin Anuncios
      <li align="left">Ver en TV con Chromecast
      <li align="left">Acceso Temprano a Éxitos Selectos Disponibles en tu Región
      <li align="left">3 Semanas de Espera para ver Nuevos Episodios de Plus
      <li align="left">Películas
     </ul></div>     
      <input type="radio" name="paquete" value="Standard">Buy $59.45
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="https://0.viki.io/uploads/icons/plus_track.svg?e=t&f=t&cb=1"  alt="kid">
      <h2 style="color:#27578C"><strong>Plus</strong></h2>
      <li align="left">HD y sin Anuncios
      <li align="left">Ver en TV con Chromecast
      <li align="left">Acceso Ilimitado a Todos los Programas Disponibles en tu Región
      <li align="left">¡Sin Espera! Ve Todos los Programas Nuevos Inmediatamente
      <li align="left">Películas
        </ul>
     <center><input type="radio" name="paquete" value="Plus">Buy $169.60</center>
    </div>
  </div>
</div>
      <center><input class="botona" type="submit" value="comprar"/></center></CENTER>

</form>
</center>
<footer>
</center>
<center><em><p style="color:#D7D6D6">Viki, Inc.</p></em></center>

 <div id="player"></div>

   

</footer>
</body>
</html>