<?php 

function conect(){

	$user="root";
	$pass="";
	$server="localhost";
	$db="login";
	$con=mysqli_connect($server, $user, $pass) or die ("error al conectar");
	
	mysqli_select_db($con,$db);


	return $con;
}
 ?>