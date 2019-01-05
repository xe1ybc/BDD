<?php 

$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;

//Vaciamos el carrito

if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
}

//Obtenemos los productos anteriores

if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Anyado un nuevo articulo al carrito

if(isset($_GET['nombre']) && isset($_GET['precio'])) {
	$iUltimaPos = count($aCarrito);
	$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
	$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
}

//Creamos la cookie (serializamos)

$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimimos el contenido del array

foreach ($aCarrito as $key => $value) {
	$sHTML .= '-> ' . $value['nombre'] . ' ' . $value['precio'] . '<br>';
	$fPrecioTotal += $value['precio'];
}

//Imprimimos el precio total

$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal;

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
    
	<title>Selección de productos</title>
</head>
<body>
    <div id="header"></div>
	<div>
		<?php echo $sHTML; ?>
	</div>
	<ul>
		<li><a href="test.php?nombre=computadora&precio=$22,000.00">Computadora <img src="ima/1.jpg" width="150" height="100"></a></li>
        
		<li><a href="test.php?nombre=Laptop&precio=$32,000.00">Laptop<img src="ima/2.png" width="150" height="100"></a></li>
		<li><a href="test.php?nombre=Memoria USB &precio=$250.00">Memoria usb <img src="ima/3.jpg" width="150" height="100"></a></li>
		
		<li><a href="test.php?vaciar=1">vaciar carrito</a></li>
	</ul>	
</body>
</html>