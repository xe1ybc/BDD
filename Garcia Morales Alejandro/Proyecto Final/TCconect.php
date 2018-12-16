<?php
include("TCconector.php");


$con=TCconect();


if(!$con){ 
	echo "No se pudo conectar";

	}else{
		$base=@mysqli_select_db(tarjetacredito);


}

$nucard1=$_POST["nucard1"];

$nucard2=$_POST["nucard2"];

$nucard3=$_POST["nucard3"];

$nucard4=$_POST["nucard4"];

$DiaVencimiento=$_POST["DiaVencimiento"];
$AnoVencimiento=$_POST["AnoVencimiento"];
$CVV=$_POST["CVV"];


$sql="INSERT INTO datos VALUES ('$nucard1', '$nucard2', '$nucard3', '$nucard4',  '$DiaVencimiento', '$AnoVencimiento',  '$CVV')";

$ejecutar=mysqli_query($con,$sql);

if(!$ejecutar){
   echo "No se pudo ejecutar el query";
    }else{
	echo "Datos Guardados Correctamente";
}

?>