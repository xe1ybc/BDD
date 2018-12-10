<?php session_start();

$conexcion2 =  mysqli_connect("localhost", "root", "", "login");

//RECIBIR DATOS Y ALMACENARLOS EN VARIABLES 
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];

$dia = $_POST["dia"];
$fecha_A = $_POST["fecha_A"];
$n5 = $_POST["n5"];




//CONSULTA PARA INSERTARDATOS 

$inse = "INSERT INTO tarjeta(n1, n2, n3,n4,dia,fecha_A,n5)
                    VALUES  ('$n1','$n2','$n3','$n4','$dia','$fecha_A','$n5')";

//EJECUTAR CONSULTAL 

$resul = mysqli_query($conexcion2,$inse);

if (!$resul) {
	echo 'Error al registar';
} else {
	echo 'Usuario registrado correctamente';
	require 'views/curso_con.view.php';
}

mysqli_close($conexcion2)

?>

