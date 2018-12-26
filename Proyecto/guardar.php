<?php
    //conectar con el servidor
    $conectar=mysqli_connect("localhost","root","");
    //verificar conexion
    if(!$conectar){
        echo"no se pudo conectar con el servidor";
    }else{
       
        $base=mysqli_select_db($conectar, "prueba");
        if(!$base){
            echo "no se encontro la base de datos";
        }
    }
        //recuperar las variables
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=md5('password'); 

        //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$password')";
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conectar, $sql);

  
    //verificacion de la ejecucion
        if(!$ejecutar){
        echo"Huvo Algun Error";
    }else{
        echo "Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
    }
    

?>﻿