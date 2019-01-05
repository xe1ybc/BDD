<?php 
@session_start(); 
@session_destroy();
//en caso de que la sesion este activa y sea selaccionada la opcion de salir, sera destruida para evitar almacenar
//datos en dicha sesion
header("Location: index1.php");
?>