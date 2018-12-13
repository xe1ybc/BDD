<?php
include ("conect.php");


     $con=conect();


     if(!$con){
     	echo"no se pudo conectar con el servidor";

     }else{
     	$base=@mysqli_select_db('login');
     	if(!$base){
               echo "no se conecta a la base";

     		}
               }

     $nombre=$_POST['nombre'];
     $apellido=$_POST['apellido'];
     $nombredeusuario=$_POST['nombredeusuario'];
     $contrasena=$_POST['contrasena'];
     $telefono=$_POST['telefono'];
     $fecha=$_POST['fecha'];
     

     $sql= "INSERT INTO usuarios VALUES('$nombre', '$apellido', '$nombredeusuario', '$contrasena', '$telefono', '$fecha')";

     $ejecutar=mysqli_query($con,$sql);

     if(!$ejecutar){
           echo"hubo algun error";
     }else{
     	echo"datos guardados correctamente <br><a href='loginCard.html'>Registrar Tarjeta</a>";
     }
 
?>