<?php 
include ("conect.php");


     $con=conect();


     if(!$con){
     	echo"no se pudo conectar con el cervix";

     }else{
     	$bace=@mysqli_select_db('login');

     	if(!$bace){
               echo "";

     		}else
               echo"se conecto a la base ";
     	
    }
 
    $numcarduno=$_POST['numcarduno'];
    $numcarddos=$_POST['numcarddos'];
    $numcardtres=$_POST['numcardtres'];
    $numcardcuatro=$_POST['numcardcuatro'];
    $dia=$_POST['dia'];
    $ano=$_POST['ano'];
    $tresultd=$_POST['tresultd'];
    
    $sql= "INSERT INTO datecard VALUES ('$numcarduno', '$numcarddos', '$numcardtres', '$numcardcuatro', '$dia', '$ano', '$tresultd')";

    $ejecutar=mysqli_query($con,$sql);

    if(!$ejecutar){
	echo"hubo algun error";
    }else{
	    echo"los datos de tu tarjeta estan guardados <br><a href='login.html'>Registrarse </a>";
    }
     ?>
