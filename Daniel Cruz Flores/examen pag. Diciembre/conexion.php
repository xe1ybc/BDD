<?php  
include ("conect.php");


     $con=conect();


     if(!$con){
     	echo"no se pudo conectar con el servidor";

     }else{
     	$base=@mysqli_select_db('login');
     	if(!$base){
               echo "no se conecta a la base";

     		}else
               echo"se conecto a la base(por parte del else)";
     	
     }
 
     $numcarduno=$_POST['numcarduno'];
     $numcarddos=$_POST['numcarddos'];
     $numcardtres=$_POST['numcardtres'];
     $numcardcuatro=$_POST['numcardcuatro'];
     $dia=$_POST['dia'];
     $ano=$_POST['ano'];
     $tresultd=$_POST['tresultd'];

     $sql= "INSERT INTO datecard VALUES('$numcarduno', '$numcarddos', '$numcardtres', '$numcardcuatro', '$dia', '$ano', '$tresultd')";

     $ejecutar=mysqli_query($con, $sql);

     if(!$ejecutar){
           echo"hubo algun error";
     }else{
     	echo"Tus datos se han guardados correctamente, <br> <br><a href='loginCard.html'>Registrar Tarjeta</a>";
     }
     
 ?>