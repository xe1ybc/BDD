<?php 
	include_once('clases/producto.php');
	include_once('clases/carrito.php');
	$product = new Product();
	$cart = new Cart();
	if(isset($_GET['action'])){
		switch ($_GET['action']){
			case 'add':
				$cart->add_item($_GET['code'], $_GET['amount']);
			break;
			case 'remove':
				$cart->remove_item($_GET['code']);
			break;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carrito de compras</title>
	<script type="text/javascript" src="js/functions.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
    <div id="logo">Dios te bendiga <a href="inicio.php"> <button type="button">Cerrar sesión</button></a></div> <br> 
    <h2 id="titulo">Bienvenido</h2>
	<div class="content">
		<table border="1px" cellpadding="5px" width="100%" id="tabla">
			<thead class="cartHeader" display="off">
				<tr>
					<th colspan="6">Tus pedidos</th>
				</tr>
				<tr>
					<th colspan="3">Total pagar: <?=$cart->get_total_payment();?></th>
					<th colspan="3">Total items: <?=$cart->get_total_items();?></th>
				</tr>
			</thead>
			<tbody class="cartBody">
				<tr>
					<th>Codigo</th>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Opcion</th>
				</tr>
				<?=$cart->get_items();?>
			</tbody>
		</table>
		<br><br>
		<table border="1px" cellpadding="5px" width="100%" id="tabla">
			<thead class="productsHeader">
				<tr>
					<th colspan="6">LISTA DE PRODUCTOS</th>
				</tr>
				<tr>
					<th>Codigo</th>
					<th>Producto</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Opcion</th>
				</tr>
			</thead>
			<tbody class="productsBody">
				<?=$product->get_products();?>
			</tbody>
		</table>
	</div>
    <div id="pie">
        <p>Copyright &copy; 2018 Javier Arturo Zepeda Rojas, Elías Isaac García Chiñas - Todos los derechos reservados</p>
    </div>
</body>
</html>