<?php
   $host= "localhost";
   $db= "prueba";
   $admindb= "root";
   $pass= "";
   $usuarios= "usuarios";

   error_reporting(0);

   $conexion = new mysqli($host,$admindb,$pass,$db);

   if ($conexion->connect_errno){
   	   echo "Error-------->";
   	   exit();
   }
?>
